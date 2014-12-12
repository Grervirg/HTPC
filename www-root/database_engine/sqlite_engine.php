<?php

include_once dirname(__FILE__) . '/' . 'engine.php';
include_once dirname(__FILE__) . '/' . 'database_engine_utils.php';
include_once dirname(__FILE__) . '/' . 'pdo_engine.php';

/* Common SQLite-related classes */

class SqliteBaseCommandImp extends EngCommandImp {
    public function GetFieldAsSQLInSelectFieldList($fieldInfo) {
        if (isset($fieldInfo->Alias) && $fieldInfo->Alias != '')
            return $this->GetFieldFullName($fieldInfo) . ' AS ' . $fieldInfo->Alias;
        else
            return $this->GetFieldFullName($fieldInfo) . ' AS ' . $fieldInfo->Name;
    }

    public function QuoteIdentifier($identifier) {
        return '"' . $identifier . '"';
    }

    public function GetFieldValueAsSQL($fieldInfo, $value) {
        if ($fieldInfo->FieldType == ftBlob) {
            if (is_array($value)) {
                return '\'' . sqlite_escape_string(file_get_contents($value[0])) . '\'';
            } else {
                return '\'' . sqlite_escape_string($value) . '\'';
            }
        } else
            return parent::GetFieldValueAsSQL($fieldInfo, $value);
    }

    public function GetCastToCharExpression($value) {
        return $value;
    }

    public function SupportsDefaultValue() {
        return false;
    }

    public function DoExecuteCustomSelectCommand($connection, $command) {
        $upLimit = $command->GetUpLimit();
        $limitCount = $command->GetLimitCount();

        if (isset($upLimit) && isset($limitCount)) {
            $sql = sprintf('SELECT * FROM (%s) a LIMIT %s, %s',
                $command->GetSQL(),
                $upLimit,
                $limitCount
            );
            $result = $this->GetConnectionFactory()->CreateDataset($connection, $sql);
            $result->Open();
            return $result;
        } else {
            return parent::DoExecuteSelectCommand($connection, $command);
        }
    }
}

/* sqlite extension related classes */

class SqliteConnectionFactory extends ConnectionFactory {
    public function DoCreateConnection($connectionParams) {
        return new SqliteConnection($connectionParams);
    }

    public function CreateDataset($connection, $sql) {
        return new SqliteDataReader($connection, $sql);
    }

    public function CreateEngCommandImp() {
        return new SqliteEngCommandImp($this);
    }
}

class SqliteConnection extends EngConnection {
    private $connectionHandle;
    private $connectionError = '';

    public function IsDriverSupported() {
        return function_exists('sqlite_open');
    }

    protected function DoGetDBMSName() {
        return 'SQLite';
    }

    protected function DoGetDriverExtensionName() {
        return 'sqlite';
    }

    protected function DoGetDriverInstallationLink() {
        return 'http://www.php.net/manual/en/sqlite.installation.php';
    }

    protected function DoConnect() {
        $this->connectionHandle = @sqlite_open($this->ConnectionParam('database'), 0666, $this->connectionError);
        if (!$this->connectionHandle)
            return false;
        return true;
    }

    protected function DoCreateDataReader($sql) {
        return new SqliteDataReader($this, $sql);
    }

    protected function DoDisconnect() {
        @sqlite_close($this->connectionHandle);
    }

    public function GetConnectionHandle() {
        return $this->connectionHandle;
    }

    protected function DoExecSQL($sql) {
        return @sqlite_exec($sql, $this->GetConnectionHandle()) ? true : false;
    }

    public function ExecScalarSQL($sql) {
        $queryHandle = @sqlite_query($sql, $this->GetConnectionHandle());
        $queryResult = @sqlite_fetch_array($queryHandle, SQLITE_NUM);
        return $queryResult[0];
    }

    public function SupportsLastInsertId() {
        return false;
    }

    public function GetLastInsertId() {
        return @sqlite_last_insert_rowid($this->GetConnectionHandle());
    }

    public function DoLastError() {
        if ($this->connectionHandle)
            return sqlite_error_string(sqlite_last_error($this->connectionHandle));
        else
            return $this->connectionError;
    }
}

class SqliteDataReader extends EngDataReader {
    private $queryResult;
    private $lastFetchedRow;
    /**
     * @var SQLiteConnection
     */
    private $sqliteConnection;

    protected function FetchField() {
        RaiseNotSupportedException();
    }

    protected function FetchFields() {
        for ($i = 0; $i < sqlite_num_fields($this->queryResult); $i++)
            $this->AddField(sqlite_field_name($this->queryResult, $i));
    }

    protected function DoOpen() {
        $this->queryResult = @sqlite_query($this->GetSQL(), $this->sqliteConnection->GetConnectionHandle(), SQLITE_ASSOC);
        if ($this->queryResult)
            return true;
        else
            return false;
    }

    /*
     * {@inheritdoc}
     */
    public function __construct(IEngConnection $connection, $sql) {
        parent::__construct($connection, $sql);
        $this->queryResult = null;
        $this->sqliteConnection = $connection;
    }

    public function Opened() {
        return $this->queryResult ? true : false;
    }

    public function Seek($ARowIndex) {
        sqlite_seek($this->queryResult, $ARowIndex);
    }

    public function Next() {
        $this->lastFetchedRow = sqlite_fetch_array($this->queryResult, SQLITE_ASSOC);
        return $this->lastFetchedRow ? true : false;
    }

    public function GetFieldValueByName($AFieldName) {
        return $this->GetActualFieldValue($AFieldName, $this->lastFetchedRow[$AFieldName]);
    }
}

class SqliteEngCommandImp extends SqliteBaseCommandImp {
    public function EscapeString($string) {
        return sqlite_escape_string($string);
    }
}

/* SQLitePDO extension related classes */

class SqlitePDOConnectionFactory extends ConnectionFactory {
    public function DoCreateConnection($connectionParams) {
        return new SqlitePDOConnection($connectionParams);
    }

    public function CreateDataset($connection, $sql) {
        return new SqlitePDODataReader($connection, $sql);
    }

    public function CreateEngCommandImp() {
        return new SQLitePDOCommandImp($this);
    }
}
/*
class OldSqlitePDOConnection extends EngConnection {
    private $connection;
    private $connectionError = '';

    public function IsDriverSupported() {
        return parent::IsDriverSupported();
    }

    protected function DoGetDBMSName() {
        return 'SQLite';
    }

    protected function DoGetDriverExtensionName() {
        return 'pdo_sqlite';
    }

    protected function DoGetDriverInstallationLink() {
        return 'http://www.php.net/manual/en/ref.pdo-sqlite.php';
    }

    protected function DoConnect() {
        try {
            $this->connection = new PDO('sqlite:' . $this->ConnectionParam('database'));
            return true;
        } catch (PDOException $e) {
            $this->connectionError = $e->getMessage();
            return false;
        }
    }

    protected function DoCreateDataReader($sql) {
        return new SqlitePDODataReader($this, $sql);
    }

    protected function DoDisconnect() {
    }

    public function GetConnectionHandle() {
        return $this->connection;
    }

    protected function DoExecSQL($sql) {
        return !($this->connection->exec($sql) === false);
    }

    public function SupportsLastInsertId() {
        return true;
    }

    public function GetLastInsertId() {
        return $this->connection->lastInsertId();
    }

    public function ExecScalarSQL($sql) {
        $queryHandle = $this->connection->query($sql);
        if ($queryHandle) {
            $row = $queryHandle->fetch(PDO::FETCH_NUM);
            if ($row === false) {
                return false;
            } else {
                return $row[0];
            }
        } else
            return false;
    }

    public function DoLastError() {
        if ($this->connection) {
            $pdoErrorInfo = $this->connection->errorInfo();
            return $pdoErrorInfo[2];
        } else {
            return $this->connectionError;
        }
    }
}
*/
class SqlitePDOConnection extends PDOConnection {

    protected function CreatePDOConnection() {
        return new PDO(
            sprintf('sqlite:%s', $this->ConnectionParam('database')));
    }

    protected function DoGetDBMSName() {
        return 'SQLite';
    }

    protected function DoGetDriverExtensionName() {
        return 'pdo_sqlite';
    }

    protected function DoGetDriverInstallationLink() {
        return 'http://www.php.net/manual/en/ref.pdo-sqlite.php';
    }

    protected function DoAfterConnect() { /* nothing here*/}
}


class SqlitePDODataReader extends PDODataReader {
}

/*
class OldSqlitePDODataReader extends EngDataReader {
    private $statement;
    private $lastFetchedRow;

    protected function FetchField() {
        RaiseNotSupportedException();
    }

    protected function FetchFields() {
        for ($i = 0; $i < $this->statement->columnCount(); $i++) {
            $columnMetadata = $this->statement->getColumnMeta($i);
            $this->AddField($columnMetadata['name']);
        }
    }

    protected function DoOpen() {
        try {
            $this->statement = $this->GetConnection()->GetConnectionHandle()->query($this->GetSQL());
            if (!$this->statement)
                return false;
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    protected function DoClose() {
        $this->statement->closeCursor();
    }

    public function __construct($connection, $sql) {
        parent::__construct($connection, $sql);
        $this->statement = null;
    }

    public function Opened() {
        return $this->statement ? true : false;
    }

    public function Seek($rowIndex) {
    }

    public function Next() {
        try {
            $this->lastFetchedRow = $this->statement->fetch();
            if ($this->lastFetchedRow)
                return true;
            else
                return false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function GetFieldValueByName($fieldName) {
        return $this->GetActualFieldValue($fieldName, $this->lastFetchedRow[$fieldName]);
    }
}
*/

class SQLitePDOCommandImp extends SqliteBaseCommandImp {
    public function GetFieldValueAsSQL($fieldInfo, $value) {
        if ($fieldInfo->FieldType == ftBlob) {
            if (is_array($value)) {
                return 'x\'' . bin2hex(file_get_contents($value[0])) . '\'';
            } else {
                return 'x\'' . bin2hex($value[0]) . '\'';
            }
        } else
            return parent::GetFieldValueAsSQL($fieldInfo, $value);
    }
}

/* sqlite3 extension related classes */

class Sqlite3ConnectionFactory extends ConnectionFactory {
    public function DoCreateConnection($connectionParams) {
        return new Sqlite3Connection($connectionParams);
    }

    public function CreateDataset($connection, $sql) {
        return new Sqlite3DataReader($connection, $sql);
    }

    public function CreateEngCommandImp() {
        return new Sqlite3EngCommandImp($this);
    }
}

class Sqlite3Connection extends EngConnection {

    /**
     * @var SQLite3
     */
    private $connection;

    /**
     * {@inheritdoc}
     */
    protected function DoConnect() {
        try {
            $this->connection = new SQLite3($this->ConnectionParam('database'), SQLITE3_OPEN_READWRITE);
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

    protected function DoDisconnect() {
        $this->connection->close();
    }

    /**
     * {@inheritdoc}
     */
    protected function DoCreateDataReader($sql) {
        return new Sqlite3DataReader($this, $sql);
    }

    /**
     * {@inheritdoc}
     */
    public function IsDriverSupported() {
        return class_exists('SQLite3', false);
    }

    protected function DoGetDBMSName() {
        return 'SQLite';
    }

    protected function DoGetDriverExtensionName() {
        return 'sqlite3';
    }

    protected function DoGetDriverInstallationLink() {
        return 'http://www.php.net/manual/sqlite3.installation.php';
    }

    protected function FormatConnectionParams() {
        return $this->ConnectionParam('database');
    }

    public function GetConnectionHandle() {
        return $this->connection;
    }

    /**
     * {@inheritdoc}
     */
    protected function DoExecSQL($sql) {
        return @$this->connection->exec($sql);
    }

    public function SupportsLastInsertId() {
        return false;
    }

    public function GetLastInsertId() {
        return $this->connection->lastInsertRowID();
    }

    public function ExecScalarSQL($sql) {
        $queryResult = @$this->connection->querySingle($sql);
        if ($queryResult)
            return $queryResult;
        else // SQLite3::querySingle can return null or false
            return null;
    }

    public function ExecQueryToArray($sql, &$array) {
        $queryResult = @$this->connection->query($sql);
        if ($queryResult instanceof SQLite3Result) {
            while ($row = $queryResult->fetchArray(SQLITE3_BOTH))
                $array[] = $row;
        }
        else
            throw new SMSQLException('Cannot execute SQL: ' . $sql . "\n" . $this->LastError());
    }

    public function DoLastError() {
        return $this->connection->lastErrorMsg();
    }

    public function GetNativeConnection() {
        return $this->connection;
    }
}

class Sqlite3DataReader extends EngDataReader {

    /**
     * @var SQLite3Result
     */
    private $queryResult;
    /**
     * @var array
     */
    private $lastFetchedRow;
    /**
     * @var SQLite3Connection
     */
    private $sqlite3Connection;

    /**
     * {@inheritdoc}
     */
    protected function FetchField() {
        RaiseNotSupportedException();
    }

    /**
     * {@inheritdoc}
     */
    protected function FetchFields() {
        for ($i = 0; $i < $this->queryResult->numColumns(); $i++)
            $this->AddField($this->queryResult->columnName($i));
    }

    /**
     * {@inheritdoc}
     */
    protected function DoOpen() {
        $this->queryResult = @$this->sqlite3Connection->GetNativeConnection()->query($this->GetSQL());
        if ($this->queryResult)
            return true;
        else
            return false;
    }

    /**
     * {@inheritdoc}
     */
    public function __construct(IEngConnection $connection, $sql) {
        parent::__construct($connection, $sql);
        $this->queryResult = null;
        $this->sqlite3Connection = $connection;
    }

    /**
     * {@inheritdoc}
     */
    public function Opened() {
        return $this->queryResult ? true : false;
    }

    /**
     * {@inheritdoc}
     */
    public function Next() {
        $this->lastFetchedRow = $this->queryResult->fetchArray(SQLITE3_ASSOC);
        return $this->lastFetchedRow ? true : false;
    }

    /**
     * {@inheritdoc}
     */
    public function GetFieldValueByName($AFieldName) {
        return $this->GetActualFieldValue($AFieldName, $this->lastFetchedRow[$AFieldName]);
    }
}

class Sqlite3EngCommandImp extends SqliteBaseCommandImp {

    public function EscapeString($string) {
        return SQLite3::escapeString($string);
    }

    public function GetFieldValueAsSQL($fieldInfo, $value) {
        if ($fieldInfo->FieldType == ftBlob) {
            if (is_array($value)) {
                return '\'' . SQLite3::escapeString(file_get_contents($value[0])) . '\'';
            } else {
                return '\'' . SQLite3::escapeString($value) . '\'';
            }
        } else
            return parent::GetFieldValueAsSQL($fieldInfo, $value);
    }
}