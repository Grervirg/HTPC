<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                                   ATTENTION!
 * If you see this message in your browser (Internet Explorer, Mozilla Firefox, Google Chrome, etc.)
 * this means that PHP is not properly installed on your web server. Please refer to the PHP manual
 * for more details: http://php.net/manual/install.php 
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */


    include_once dirname(__FILE__) . '/' . 'components/utils/check_utils.php';
    CheckPHPVersion();
    CheckTemplatesCacheFolderIsExistsAndWritable();


    include_once dirname(__FILE__) . '/' . 'phpgen_settings.php';
    include_once dirname(__FILE__) . '/' . 'database_engine/sqlite_engine.php';
    include_once dirname(__FILE__) . '/' . 'components/page.php';


    function GetConnectionOptions()
    {
        $result = GetGlobalConnectionOptions();
        GetApplication()->GetUserAuthorizationStrategy()->ApplyIdentityToConnectionOptions($result);
        return $result;
    }

    
    
    // OnBeforePageExecute event handler
    
    
    
    class movieviewPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new SqlitePDOConnectionFactory(),
                GetConnectionOptions(),
                '"movieview"');
            $field = new IntegerField('idMovie');
            $this->dataset->AddField($field, true);
            $field = new IntegerField('idFile');
            $this->dataset->AddField($field, true);
            $field = new StringField('c00');
            $this->dataset->AddField($field, false);
            $field = new StringField('c01');
            $this->dataset->AddField($field, false);
            $field = new StringField('c02');
            $this->dataset->AddField($field, false);
            $field = new StringField('c03');
            $this->dataset->AddField($field, false);
            $field = new StringField('c04');
            $this->dataset->AddField($field, false);
            $field = new StringField('c05');
            $this->dataset->AddField($field, false);
            $field = new StringField('c06');
            $this->dataset->AddField($field, false);
            $field = new StringField('c07');
            $this->dataset->AddField($field, false);
            $field = new StringField('c08');
            $this->dataset->AddField($field, false);
            $field = new StringField('c09');
            $this->dataset->AddField($field, false);
            $field = new StringField('c10');
            $this->dataset->AddField($field, false);
            $field = new StringField('c11');
            $this->dataset->AddField($field, false);
            $field = new StringField('c12');
            $this->dataset->AddField($field, false);
            $field = new StringField('c13');
            $this->dataset->AddField($field, false);
            $field = new StringField('c14');
            $this->dataset->AddField($field, false);
            $field = new StringField('c15');
            $this->dataset->AddField($field, false);
            $field = new StringField('c16');
            $this->dataset->AddField($field, false);
            $field = new StringField('c17');
            $this->dataset->AddField($field, false);
            $field = new StringField('c18');
            $this->dataset->AddField($field, false);
            $field = new StringField('c19');
            $this->dataset->AddField($field, false);
            $field = new StringField('c20');
            $this->dataset->AddField($field, false);
            $field = new StringField('c21');
            $this->dataset->AddField($field, false);
            $field = new StringField('c22');
            $this->dataset->AddField($field, false);
            $field = new StringField('c23');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('idSet');
            $this->dataset->AddField($field, true);
            $field = new StringField('strSet');
            $this->dataset->AddField($field, false);
            $field = new StringField('strFileName');
            $this->dataset->AddField($field, false);
            $field = new StringField('strPath');
            $this->dataset->AddField($field, false);
            $field = new IntegerField('playCount');
            $this->dataset->AddField($field, true);
            $field = new StringField('lastPlayed');
            $this->dataset->AddField($field, false);
            $field = new StringField('dateAdded');
            $this->dataset->AddField($field, false);
            $field = new StringField('resumeTimeInSeconds');
            $this->dataset->AddField($field, true);
            $field = new StringField('totalTimeInSeconds');
            $this->dataset->AddField($field, true);
        }
    
        protected function CreatePageNavigator()
        {
            $result = new CompositePageNavigator($this);
            
            $partitionNavigator = new PageNavigator('pnav', $this, $this->dataset);
            $partitionNavigator->SetRowsPerPage(20);
            $result->AddPageNavigator($partitionNavigator);
            
            return $result;
        }
    
        public function GetPageList()
        {
            $currentPageCaption = $this->GetShortCaption();
            $result = new PageList($this);
            $result->AddGroup('Default');
            if (GetCurrentUserGrantForDataSource('movieview')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Movieview'), 'movieview.php', $this->RenderText('Movieview'), $currentPageCaption == $this->RenderText('Movieview'), false, 'Default'));
            if (GetCurrentUserGrantForDataSource('seasonview')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Seasonview'), 'seasonview.php', $this->RenderText('Seasonview'), $currentPageCaption == $this->RenderText('Seasonview'), false, 'Default'));
            if (GetCurrentUserGrantForDataSource('tvshowview')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Tvshowview'), 'tvshowview.php', $this->RenderText('Tvshowview'), $currentPageCaption == $this->RenderText('Tvshowview'), false, 'Default'));
            if (GetCurrentUserGrantForDataSource('episodeview')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Episodeview'), 'episodeview.php', $this->RenderText('Episodeview'), $currentPageCaption == $this->RenderText('Episodeview'), false, 'Default'));
            
            if ( HasAdminPage() && GetApplication()->HasAdminGrantForCurrentUser() ) {
              $result->AddGroup('Admin area');
              $result->AddPage(new PageLink($this->GetLocalizerCaptions()->GetMessageString('AdminPage'), 'phpgen_admin.php', $this->GetLocalizerCaptions()->GetMessageString('AdminPage'), false, false, 'Admin area'));
            }
            return $result;
        }
    
        protected function CreateRssGenerator()
        {
            return null;
        }
    
        protected function CreateGridSearchControl(Grid $grid)
        {
            $grid->UseFilter = true;
            $grid->SearchControl = new SimpleSearch('movieviewssearch', $this->dataset,
                array('idMovie', 'idFile', 'c00', 'c01', 'c02', 'c03', 'c04', 'c05', 'c06', 'c07', 'c08', 'c09', 'c10', 'c11', 'c12', 'c13', 'c14', 'c15', 'c16', 'c17', 'c18', 'c19', 'c20', 'c21', 'c22', 'c23', 'idSet', 'strSet', 'strFileName', 'strPath', 'playCount', 'lastPlayed', 'dateAdded', 'resumeTimeInSeconds', 'totalTimeInSeconds'),
                array($this->RenderText('IdMovie'), $this->RenderText('IdFile'), $this->RenderText('C00'), $this->RenderText('C01'), $this->RenderText('C02'), $this->RenderText('C03'), $this->RenderText('C04'), $this->RenderText('C05'), $this->RenderText('C06'), $this->RenderText('C07'), $this->RenderText('C08'), $this->RenderText('C09'), $this->RenderText('C10'), $this->RenderText('C11'), $this->RenderText('C12'), $this->RenderText('C13'), $this->RenderText('C14'), $this->RenderText('C15'), $this->RenderText('C16'), $this->RenderText('C17'), $this->RenderText('C18'), $this->RenderText('C19'), $this->RenderText('C20'), $this->RenderText('C21'), $this->RenderText('C22'), $this->RenderText('C23'), $this->RenderText('IdSet'), $this->RenderText('StrSet'), $this->RenderText('StrFileName'), $this->RenderText('StrPath'), $this->RenderText('PlayCount'), $this->RenderText('LastPlayed'), $this->RenderText('DateAdded'), $this->RenderText('ResumeTimeInSeconds'), $this->RenderText('TotalTimeInSeconds')),
                array(
                    '=' => $this->GetLocalizerCaptions()->GetMessageString('equals'),
                    '<>' => $this->GetLocalizerCaptions()->GetMessageString('doesNotEquals'),
                    '<' => $this->GetLocalizerCaptions()->GetMessageString('isLessThan'),
                    '<=' => $this->GetLocalizerCaptions()->GetMessageString('isLessThanOrEqualsTo'),
                    '>' => $this->GetLocalizerCaptions()->GetMessageString('isGreaterThan'),
                    '>=' => $this->GetLocalizerCaptions()->GetMessageString('isGreaterThanOrEqualsTo'),
                    'ILIKE' => $this->GetLocalizerCaptions()->GetMessageString('Like'),
                    'STARTS' => $this->GetLocalizerCaptions()->GetMessageString('StartsWith'),
                    'ENDS' => $this->GetLocalizerCaptions()->GetMessageString('EndsWith'),
                    'CONTAINS' => $this->GetLocalizerCaptions()->GetMessageString('Contains')
                    ), $this->GetLocalizerCaptions(), $this, 'CONTAINS'
                );
        }
    
        protected function CreateGridAdvancedSearchControl(Grid $grid)
        {
            $this->AdvancedSearchControl = new AdvancedSearchControl('movieviewasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('idMovie', $this->RenderText('IdMovie')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('idFile', $this->RenderText('IdFile')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c00', $this->RenderText('C00')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c01', $this->RenderText('C01')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c02', $this->RenderText('C02')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c03', $this->RenderText('C03')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c04', $this->RenderText('C04')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c05', $this->RenderText('C05')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c06', $this->RenderText('C06')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c07', $this->RenderText('C07')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c08', $this->RenderText('C08')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c09', $this->RenderText('C09')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c10', $this->RenderText('C10')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c11', $this->RenderText('C11')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c12', $this->RenderText('C12')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c13', $this->RenderText('C13')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c14', $this->RenderText('C14')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c15', $this->RenderText('C15')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c16', $this->RenderText('C16')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c17', $this->RenderText('C17')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c18', $this->RenderText('C18')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c19', $this->RenderText('C19')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c20', $this->RenderText('C20')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c21', $this->RenderText('C21')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c22', $this->RenderText('C22')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('c23', $this->RenderText('C23')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('idSet', $this->RenderText('IdSet')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('strSet', $this->RenderText('StrSet')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('strFileName', $this->RenderText('StrFileName')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('strPath', $this->RenderText('StrPath')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('playCount', $this->RenderText('PlayCount')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('lastPlayed', $this->RenderText('LastPlayed')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('dateAdded', $this->RenderText('DateAdded')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('resumeTimeInSeconds', $this->RenderText('ResumeTimeInSeconds')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('totalTimeInSeconds', $this->RenderText('TotalTimeInSeconds')));
        }
    
        protected function AddOperationsColumns(Grid $grid)
        {
            $actionsBandName = 'actions';
            $grid->AddBandToBegin($actionsBandName, $this->GetLocalizerCaptions()->GetMessageString('Actions'), true);
            if ($this->GetSecurityInfo()->HasViewGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('View'), OPERATION_VIEW, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
            }
            if ($this->GetSecurityInfo()->HasEditGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Edit'), OPERATION_EDIT, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
                $column->OnShow->AddListener('ShowEditButtonHandler', $this);
            }
            if ($this->GetSecurityInfo()->HasDeleteGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Delete'), OPERATION_DELETE, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
                $column->OnShow->AddListener('ShowDeleteButtonHandler', $this);
            $column->SetAdditionalAttribute("data-modal-delete", "true");
            $column->SetAdditionalAttribute("data-delete-handler-name", $this->GetModalGridDeleteHandler());
            }
            if ($this->GetSecurityInfo()->HasAddGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Copy'), OPERATION_COPY, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
            }
        }
    
        protected function AddFieldColumns(Grid $grid)
        {
            //
            // View column for idMovie field
            //
            $column = new TextViewColumn('idMovie', 'IdMovie', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for idFile field
            //
            $column = new TextViewColumn('idFile', 'IdFile', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c00 field
            //
            $column = new TextViewColumn('c00', 'C00', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c00_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c01 field
            //
            $column = new TextViewColumn('c01', 'C01', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c01_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c02 field
            //
            $column = new TextViewColumn('c02', 'C02', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c02_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c03 field
            //
            $column = new TextViewColumn('c03', 'C03', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c03_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c04 field
            //
            $column = new TextViewColumn('c04', 'C04', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c04_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c05 field
            //
            $column = new TextViewColumn('c05', 'C05', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c05_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c06 field
            //
            $column = new TextViewColumn('c06', 'C06', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c06_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c07 field
            //
            $column = new TextViewColumn('c07', 'C07', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c07_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c08 field
            //
            $column = new TextViewColumn('c08', 'C08', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c08_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c09 field
            //
            $column = new TextViewColumn('c09', 'C09', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c09_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c10 field
            //
            $column = new TextViewColumn('c10', 'C10', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c10_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c11 field
            //
            $column = new TextViewColumn('c11', 'C11', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c11_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c12 field
            //
            $column = new TextViewColumn('c12', 'C12', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c12_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c13 field
            //
            $column = new TextViewColumn('c13', 'C13', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c13_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c14 field
            //
            $column = new TextViewColumn('c14', 'C14', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c14_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c15 field
            //
            $column = new TextViewColumn('c15', 'C15', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c15_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c16 field
            //
            $column = new TextViewColumn('c16', 'C16', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c16_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c17 field
            //
            $column = new TextViewColumn('c17', 'C17', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c17_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c18 field
            //
            $column = new TextViewColumn('c18', 'C18', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c18_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c19 field
            //
            $column = new TextViewColumn('c19', 'C19', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c19_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c20 field
            //
            $column = new TextViewColumn('c20', 'C20', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c20_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c21 field
            //
            $column = new TextViewColumn('c21', 'C21', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c21_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c22 field
            //
            $column = new TextViewColumn('c22', 'C22', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c22_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for c23 field
            //
            $column = new TextViewColumn('c23', 'C23', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c23_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for idSet field
            //
            $column = new TextViewColumn('idSet', 'IdSet', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for strSet field
            //
            $column = new TextViewColumn('strSet', 'StrSet', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_strSet_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for strFileName field
            //
            $column = new TextViewColumn('strFileName', 'StrFileName', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_strFileName_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_strPath_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for playCount field
            //
            $column = new TextViewColumn('playCount', 'PlayCount', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for lastPlayed field
            //
            $column = new TextViewColumn('lastPlayed', 'LastPlayed', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_lastPlayed_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for dateAdded field
            //
            $column = new TextViewColumn('dateAdded', 'DateAdded', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_dateAdded_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for resumeTimeInSeconds field
            //
            $column = new TextViewColumn('resumeTimeInSeconds', 'ResumeTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for totalTimeInSeconds field
            //
            $column = new TextViewColumn('totalTimeInSeconds', 'TotalTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for idMovie field
            //
            $column = new TextViewColumn('idMovie', 'IdMovie', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for idFile field
            //
            $column = new TextViewColumn('idFile', 'IdFile', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c00 field
            //
            $column = new TextViewColumn('c00', 'C00', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c00_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c01 field
            //
            $column = new TextViewColumn('c01', 'C01', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c01_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c02 field
            //
            $column = new TextViewColumn('c02', 'C02', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c02_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c03 field
            //
            $column = new TextViewColumn('c03', 'C03', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c03_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c04 field
            //
            $column = new TextViewColumn('c04', 'C04', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c04_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c05 field
            //
            $column = new TextViewColumn('c05', 'C05', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c05_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c06 field
            //
            $column = new TextViewColumn('c06', 'C06', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c06_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c07 field
            //
            $column = new TextViewColumn('c07', 'C07', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c07_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c08 field
            //
            $column = new TextViewColumn('c08', 'C08', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c08_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c09 field
            //
            $column = new TextViewColumn('c09', 'C09', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c09_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c10 field
            //
            $column = new TextViewColumn('c10', 'C10', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c10_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c11 field
            //
            $column = new TextViewColumn('c11', 'C11', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c11_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c12 field
            //
            $column = new TextViewColumn('c12', 'C12', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c12_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c13 field
            //
            $column = new TextViewColumn('c13', 'C13', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c13_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c14 field
            //
            $column = new TextViewColumn('c14', 'C14', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c14_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c15 field
            //
            $column = new TextViewColumn('c15', 'C15', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c15_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c16 field
            //
            $column = new TextViewColumn('c16', 'C16', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c16_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c17 field
            //
            $column = new TextViewColumn('c17', 'C17', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c17_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c18 field
            //
            $column = new TextViewColumn('c18', 'C18', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c18_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c19 field
            //
            $column = new TextViewColumn('c19', 'C19', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c19_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c20 field
            //
            $column = new TextViewColumn('c20', 'C20', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c20_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c21 field
            //
            $column = new TextViewColumn('c21', 'C21', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c21_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c22 field
            //
            $column = new TextViewColumn('c22', 'C22', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c22_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for c23 field
            //
            $column = new TextViewColumn('c23', 'C23', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_c23_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for idSet field
            //
            $column = new TextViewColumn('idSet', 'IdSet', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for strSet field
            //
            $column = new TextViewColumn('strSet', 'StrSet', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_strSet_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for strFileName field
            //
            $column = new TextViewColumn('strFileName', 'StrFileName', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_strFileName_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_strPath_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for playCount field
            //
            $column = new TextViewColumn('playCount', 'PlayCount', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for lastPlayed field
            //
            $column = new TextViewColumn('lastPlayed', 'LastPlayed', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_lastPlayed_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for dateAdded field
            //
            $column = new TextViewColumn('dateAdded', 'DateAdded', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('movieviewGrid_dateAdded_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for resumeTimeInSeconds field
            //
            $column = new TextViewColumn('resumeTimeInSeconds', 'ResumeTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for totalTimeInSeconds field
            //
            $column = new TextViewColumn('totalTimeInSeconds', 'TotalTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for idMovie field
            //
            $editor = new TextEdit('idmovie_edit');
            $editColumn = new CustomEditColumn('IdMovie', 'idMovie', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for idFile field
            //
            $editor = new TextEdit('idfile_edit');
            $editColumn = new CustomEditColumn('IdFile', 'idFile', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c00 field
            //
            $editor = new TextAreaEdit('c00_edit', 50, 8);
            $editColumn = new CustomEditColumn('C00', 'c00', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c01 field
            //
            $editor = new TextAreaEdit('c01_edit', 50, 8);
            $editColumn = new CustomEditColumn('C01', 'c01', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c02 field
            //
            $editor = new TextAreaEdit('c02_edit', 50, 8);
            $editColumn = new CustomEditColumn('C02', 'c02', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c03 field
            //
            $editor = new TextAreaEdit('c03_edit', 50, 8);
            $editColumn = new CustomEditColumn('C03', 'c03', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c04 field
            //
            $editor = new TextAreaEdit('c04_edit', 50, 8);
            $editColumn = new CustomEditColumn('C04', 'c04', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c05 field
            //
            $editor = new TextAreaEdit('c05_edit', 50, 8);
            $editColumn = new CustomEditColumn('C05', 'c05', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c06 field
            //
            $editor = new TextAreaEdit('c06_edit', 50, 8);
            $editColumn = new CustomEditColumn('C06', 'c06', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c07 field
            //
            $editor = new TextAreaEdit('c07_edit', 50, 8);
            $editColumn = new CustomEditColumn('C07', 'c07', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c08 field
            //
            $editor = new TextAreaEdit('c08_edit', 50, 8);
            $editColumn = new CustomEditColumn('C08', 'c08', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c09 field
            //
            $editor = new TextAreaEdit('c09_edit', 50, 8);
            $editColumn = new CustomEditColumn('C09', 'c09', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c10 field
            //
            $editor = new TextAreaEdit('c10_edit', 50, 8);
            $editColumn = new CustomEditColumn('C10', 'c10', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c11 field
            //
            $editor = new TextAreaEdit('c11_edit', 50, 8);
            $editColumn = new CustomEditColumn('C11', 'c11', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c12 field
            //
            $editor = new TextAreaEdit('c12_edit', 50, 8);
            $editColumn = new CustomEditColumn('C12', 'c12', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c13 field
            //
            $editor = new TextAreaEdit('c13_edit', 50, 8);
            $editColumn = new CustomEditColumn('C13', 'c13', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c14 field
            //
            $editor = new TextAreaEdit('c14_edit', 50, 8);
            $editColumn = new CustomEditColumn('C14', 'c14', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c15 field
            //
            $editor = new TextAreaEdit('c15_edit', 50, 8);
            $editColumn = new CustomEditColumn('C15', 'c15', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c16 field
            //
            $editor = new TextAreaEdit('c16_edit', 50, 8);
            $editColumn = new CustomEditColumn('C16', 'c16', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c17 field
            //
            $editor = new TextAreaEdit('c17_edit', 50, 8);
            $editColumn = new CustomEditColumn('C17', 'c17', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c18 field
            //
            $editor = new TextAreaEdit('c18_edit', 50, 8);
            $editColumn = new CustomEditColumn('C18', 'c18', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c19 field
            //
            $editor = new TextAreaEdit('c19_edit', 50, 8);
            $editColumn = new CustomEditColumn('C19', 'c19', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c20 field
            //
            $editor = new TextAreaEdit('c20_edit', 50, 8);
            $editColumn = new CustomEditColumn('C20', 'c20', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c21 field
            //
            $editor = new TextAreaEdit('c21_edit', 50, 8);
            $editColumn = new CustomEditColumn('C21', 'c21', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c22 field
            //
            $editor = new TextAreaEdit('c22_edit', 50, 8);
            $editColumn = new CustomEditColumn('C22', 'c22', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for c23 field
            //
            $editor = new TextAreaEdit('c23_edit', 50, 8);
            $editColumn = new CustomEditColumn('C23', 'c23', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for idSet field
            //
            $editor = new TextEdit('idset_edit');
            $editColumn = new CustomEditColumn('IdSet', 'idSet', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for strSet field
            //
            $editor = new TextAreaEdit('strset_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrSet', 'strSet', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for strFileName field
            //
            $editor = new TextAreaEdit('strfilename_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrFileName', 'strFileName', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for strPath field
            //
            $editor = new TextAreaEdit('strpath_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrPath', 'strPath', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for playCount field
            //
            $editor = new TextEdit('playcount_edit');
            $editColumn = new CustomEditColumn('PlayCount', 'playCount', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for lastPlayed field
            //
            $editor = new TextAreaEdit('lastplayed_edit', 50, 8);
            $editColumn = new CustomEditColumn('LastPlayed', 'lastPlayed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for dateAdded field
            //
            $editor = new TextAreaEdit('dateadded_edit', 50, 8);
            $editColumn = new CustomEditColumn('DateAdded', 'dateAdded', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for resumeTimeInSeconds field
            //
            $editor = new TextEdit('resumetimeinseconds_edit');
            $editColumn = new CustomEditColumn('ResumeTimeInSeconds', 'resumeTimeInSeconds', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for totalTimeInSeconds field
            //
            $editor = new TextEdit('totaltimeinseconds_edit');
            $editColumn = new CustomEditColumn('TotalTimeInSeconds', 'totalTimeInSeconds', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for idMovie field
            //
            $editor = new TextEdit('idmovie_edit');
            $editColumn = new CustomEditColumn('IdMovie', 'idMovie', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for idFile field
            //
            $editor = new TextEdit('idfile_edit');
            $editColumn = new CustomEditColumn('IdFile', 'idFile', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c00 field
            //
            $editor = new TextAreaEdit('c00_edit', 50, 8);
            $editColumn = new CustomEditColumn('C00', 'c00', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c01 field
            //
            $editor = new TextAreaEdit('c01_edit', 50, 8);
            $editColumn = new CustomEditColumn('C01', 'c01', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c02 field
            //
            $editor = new TextAreaEdit('c02_edit', 50, 8);
            $editColumn = new CustomEditColumn('C02', 'c02', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c03 field
            //
            $editor = new TextAreaEdit('c03_edit', 50, 8);
            $editColumn = new CustomEditColumn('C03', 'c03', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c04 field
            //
            $editor = new TextAreaEdit('c04_edit', 50, 8);
            $editColumn = new CustomEditColumn('C04', 'c04', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c05 field
            //
            $editor = new TextAreaEdit('c05_edit', 50, 8);
            $editColumn = new CustomEditColumn('C05', 'c05', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c06 field
            //
            $editor = new TextAreaEdit('c06_edit', 50, 8);
            $editColumn = new CustomEditColumn('C06', 'c06', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c07 field
            //
            $editor = new TextAreaEdit('c07_edit', 50, 8);
            $editColumn = new CustomEditColumn('C07', 'c07', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c08 field
            //
            $editor = new TextAreaEdit('c08_edit', 50, 8);
            $editColumn = new CustomEditColumn('C08', 'c08', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c09 field
            //
            $editor = new TextAreaEdit('c09_edit', 50, 8);
            $editColumn = new CustomEditColumn('C09', 'c09', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c10 field
            //
            $editor = new TextAreaEdit('c10_edit', 50, 8);
            $editColumn = new CustomEditColumn('C10', 'c10', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c11 field
            //
            $editor = new TextAreaEdit('c11_edit', 50, 8);
            $editColumn = new CustomEditColumn('C11', 'c11', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c12 field
            //
            $editor = new TextAreaEdit('c12_edit', 50, 8);
            $editColumn = new CustomEditColumn('C12', 'c12', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c13 field
            //
            $editor = new TextAreaEdit('c13_edit', 50, 8);
            $editColumn = new CustomEditColumn('C13', 'c13', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c14 field
            //
            $editor = new TextAreaEdit('c14_edit', 50, 8);
            $editColumn = new CustomEditColumn('C14', 'c14', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c15 field
            //
            $editor = new TextAreaEdit('c15_edit', 50, 8);
            $editColumn = new CustomEditColumn('C15', 'c15', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c16 field
            //
            $editor = new TextAreaEdit('c16_edit', 50, 8);
            $editColumn = new CustomEditColumn('C16', 'c16', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c17 field
            //
            $editor = new TextAreaEdit('c17_edit', 50, 8);
            $editColumn = new CustomEditColumn('C17', 'c17', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c18 field
            //
            $editor = new TextAreaEdit('c18_edit', 50, 8);
            $editColumn = new CustomEditColumn('C18', 'c18', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c19 field
            //
            $editor = new TextAreaEdit('c19_edit', 50, 8);
            $editColumn = new CustomEditColumn('C19', 'c19', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c20 field
            //
            $editor = new TextAreaEdit('c20_edit', 50, 8);
            $editColumn = new CustomEditColumn('C20', 'c20', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c21 field
            //
            $editor = new TextAreaEdit('c21_edit', 50, 8);
            $editColumn = new CustomEditColumn('C21', 'c21', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c22 field
            //
            $editor = new TextAreaEdit('c22_edit', 50, 8);
            $editColumn = new CustomEditColumn('C22', 'c22', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for c23 field
            //
            $editor = new TextAreaEdit('c23_edit', 50, 8);
            $editColumn = new CustomEditColumn('C23', 'c23', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for idSet field
            //
            $editor = new TextEdit('idset_edit');
            $editColumn = new CustomEditColumn('IdSet', 'idSet', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for strSet field
            //
            $editor = new TextAreaEdit('strset_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrSet', 'strSet', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for strFileName field
            //
            $editor = new TextAreaEdit('strfilename_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrFileName', 'strFileName', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for strPath field
            //
            $editor = new TextAreaEdit('strpath_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrPath', 'strPath', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for playCount field
            //
            $editor = new TextEdit('playcount_edit');
            $editColumn = new CustomEditColumn('PlayCount', 'playCount', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for lastPlayed field
            //
            $editor = new TextAreaEdit('lastplayed_edit', 50, 8);
            $editColumn = new CustomEditColumn('LastPlayed', 'lastPlayed', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for dateAdded field
            //
            $editor = new TextAreaEdit('dateadded_edit', 50, 8);
            $editColumn = new CustomEditColumn('DateAdded', 'dateAdded', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for resumeTimeInSeconds field
            //
            $editor = new TextEdit('resumetimeinseconds_edit');
            $editColumn = new CustomEditColumn('ResumeTimeInSeconds', 'resumeTimeInSeconds', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for totalTimeInSeconds field
            //
            $editor = new TextEdit('totaltimeinseconds_edit');
            $editColumn = new CustomEditColumn('TotalTimeInSeconds', 'totalTimeInSeconds', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            if ($this->GetSecurityInfo()->HasAddGrant())
            {
                $grid->SetShowAddButton(true);
                $grid->SetShowInlineAddButton(false);
            }
            else
            {
                $grid->SetShowInlineAddButton(false);
                $grid->SetShowAddButton(false);
            }
        }
    
        protected function AddPrintColumns(Grid $grid)
        {
            //
            // View column for idMovie field
            //
            $column = new TextViewColumn('idMovie', 'IdMovie', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for idFile field
            //
            $column = new TextViewColumn('idFile', 'IdFile', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c00 field
            //
            $column = new TextViewColumn('c00', 'C00', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c01 field
            //
            $column = new TextViewColumn('c01', 'C01', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c02 field
            //
            $column = new TextViewColumn('c02', 'C02', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c03 field
            //
            $column = new TextViewColumn('c03', 'C03', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c04 field
            //
            $column = new TextViewColumn('c04', 'C04', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c05 field
            //
            $column = new TextViewColumn('c05', 'C05', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c06 field
            //
            $column = new TextViewColumn('c06', 'C06', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c07 field
            //
            $column = new TextViewColumn('c07', 'C07', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c08 field
            //
            $column = new TextViewColumn('c08', 'C08', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c09 field
            //
            $column = new TextViewColumn('c09', 'C09', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c10 field
            //
            $column = new TextViewColumn('c10', 'C10', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c11 field
            //
            $column = new TextViewColumn('c11', 'C11', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c12 field
            //
            $column = new TextViewColumn('c12', 'C12', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c13 field
            //
            $column = new TextViewColumn('c13', 'C13', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c14 field
            //
            $column = new TextViewColumn('c14', 'C14', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c15 field
            //
            $column = new TextViewColumn('c15', 'C15', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c16 field
            //
            $column = new TextViewColumn('c16', 'C16', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c17 field
            //
            $column = new TextViewColumn('c17', 'C17', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c18 field
            //
            $column = new TextViewColumn('c18', 'C18', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c19 field
            //
            $column = new TextViewColumn('c19', 'C19', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c20 field
            //
            $column = new TextViewColumn('c20', 'C20', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c21 field
            //
            $column = new TextViewColumn('c21', 'C21', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c22 field
            //
            $column = new TextViewColumn('c22', 'C22', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for c23 field
            //
            $column = new TextViewColumn('c23', 'C23', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for idSet field
            //
            $column = new TextViewColumn('idSet', 'IdSet', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for strSet field
            //
            $column = new TextViewColumn('strSet', 'StrSet', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for strFileName field
            //
            $column = new TextViewColumn('strFileName', 'StrFileName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for playCount field
            //
            $column = new TextViewColumn('playCount', 'PlayCount', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for lastPlayed field
            //
            $column = new TextViewColumn('lastPlayed', 'LastPlayed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for dateAdded field
            //
            $column = new TextViewColumn('dateAdded', 'DateAdded', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for resumeTimeInSeconds field
            //
            $column = new TextViewColumn('resumeTimeInSeconds', 'ResumeTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for totalTimeInSeconds field
            //
            $column = new TextViewColumn('totalTimeInSeconds', 'TotalTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for idMovie field
            //
            $column = new TextViewColumn('idMovie', 'IdMovie', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for idFile field
            //
            $column = new TextViewColumn('idFile', 'IdFile', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c00 field
            //
            $column = new TextViewColumn('c00', 'C00', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c01 field
            //
            $column = new TextViewColumn('c01', 'C01', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c02 field
            //
            $column = new TextViewColumn('c02', 'C02', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c03 field
            //
            $column = new TextViewColumn('c03', 'C03', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c04 field
            //
            $column = new TextViewColumn('c04', 'C04', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c05 field
            //
            $column = new TextViewColumn('c05', 'C05', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c06 field
            //
            $column = new TextViewColumn('c06', 'C06', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c07 field
            //
            $column = new TextViewColumn('c07', 'C07', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c08 field
            //
            $column = new TextViewColumn('c08', 'C08', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c09 field
            //
            $column = new TextViewColumn('c09', 'C09', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c10 field
            //
            $column = new TextViewColumn('c10', 'C10', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c11 field
            //
            $column = new TextViewColumn('c11', 'C11', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c12 field
            //
            $column = new TextViewColumn('c12', 'C12', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c13 field
            //
            $column = new TextViewColumn('c13', 'C13', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c14 field
            //
            $column = new TextViewColumn('c14', 'C14', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c15 field
            //
            $column = new TextViewColumn('c15', 'C15', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c16 field
            //
            $column = new TextViewColumn('c16', 'C16', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c17 field
            //
            $column = new TextViewColumn('c17', 'C17', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c18 field
            //
            $column = new TextViewColumn('c18', 'C18', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c19 field
            //
            $column = new TextViewColumn('c19', 'C19', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c20 field
            //
            $column = new TextViewColumn('c20', 'C20', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c21 field
            //
            $column = new TextViewColumn('c21', 'C21', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c22 field
            //
            $column = new TextViewColumn('c22', 'C22', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for c23 field
            //
            $column = new TextViewColumn('c23', 'C23', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for idSet field
            //
            $column = new TextViewColumn('idSet', 'IdSet', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for strSet field
            //
            $column = new TextViewColumn('strSet', 'StrSet', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for strFileName field
            //
            $column = new TextViewColumn('strFileName', 'StrFileName', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for playCount field
            //
            $column = new TextViewColumn('playCount', 'PlayCount', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for lastPlayed field
            //
            $column = new TextViewColumn('lastPlayed', 'LastPlayed', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for dateAdded field
            //
            $column = new TextViewColumn('dateAdded', 'DateAdded', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for resumeTimeInSeconds field
            //
            $column = new TextViewColumn('resumeTimeInSeconds', 'ResumeTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for totalTimeInSeconds field
            //
            $column = new TextViewColumn('totalTimeInSeconds', 'TotalTimeInSeconds', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
        }
    
        public function GetPageDirection()
        {
            return null;
        }
    
        protected function ApplyCommonColumnEditProperties(CustomEditColumn $column)
        {
            $column->SetDisplaySetToNullCheckBox(false);
            $column->SetDisplaySetToDefaultCheckBox(false);
    		$column->SetVariableContainer($this->GetColumnVariableContainer());
        }
    
        function GetCustomClientScript()
        {
            return ;
        }
        
        function GetOnPageLoadedClientScript()
        {
            return ;
        }
        public function ShowEditButtonHandler(&$show)
        {
            if ($this->GetRecordPermission() != null)
                $show = $this->GetRecordPermission()->HasEditGrant($this->GetDataset());
        }
        public function ShowDeleteButtonHandler(&$show)
        {
            if ($this->GetRecordPermission() != null)
                $show = $this->GetRecordPermission()->HasDeleteGrant($this->GetDataset());
        }
        
        public function GetModalGridDeleteHandler() { return 'movieview_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'movieviewGrid');
            if ($this->GetSecurityInfo()->HasDeleteGrant())
               $result->SetAllowDeleteSelected(false);
            else
               $result->SetAllowDeleteSelected(false);   
            
            ApplyCommonPageSettings($this, $result);
            
            $result->SetUseImagesForActions(false);
            $result->SetUseFixedHeader(false);
            $result->SetShowLineNumbers(false);
            
            $result->SetHighlightRowAtHover(false);
            $result->SetWidth('');
            $this->CreateGridSearchControl($result);
            $this->CreateGridAdvancedSearchControl($result);
            $this->AddOperationsColumns($result);
            $this->AddFieldColumns($result);
            $this->AddSingleRecordViewColumns($result);
            $this->AddEditColumns($result);
            $this->AddInsertColumns($result);
            $this->AddPrintColumns($result);
            $this->AddExportColumns($result);
    
            $this->SetShowPageList(true);
            $this->SetHidePageListByDefault(false);
            $this->SetExportToExcelAvailable(false);
            $this->SetExportToWordAvailable(false);
            $this->SetExportToXmlAvailable(false);
            $this->SetExportToCsvAvailable(false);
            $this->SetExportToPdfAvailable(false);
            $this->SetPrinterFriendlyAvailable(false);
            $this->SetSimpleSearchAvailable(true);
            $this->SetAdvancedSearchAvailable(false);
            $this->SetFilterRowAvailable(false);
            $this->SetVisualEffectsEnabled(true);
            $this->SetShowTopPageNavigator(true);
            $this->SetShowBottomPageNavigator(true);
    
            //
            // Http Handlers
            //
            //
            // View column for c00 field
            //
            $column = new TextViewColumn('c00', 'C00', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c00_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c01 field
            //
            $column = new TextViewColumn('c01', 'C01', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c01_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c02 field
            //
            $column = new TextViewColumn('c02', 'C02', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c02_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c03 field
            //
            $column = new TextViewColumn('c03', 'C03', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c03_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c04 field
            //
            $column = new TextViewColumn('c04', 'C04', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c04_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c05 field
            //
            $column = new TextViewColumn('c05', 'C05', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c05_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c06 field
            //
            $column = new TextViewColumn('c06', 'C06', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c06_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c07 field
            //
            $column = new TextViewColumn('c07', 'C07', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c07_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c08 field
            //
            $column = new TextViewColumn('c08', 'C08', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c08_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c09 field
            //
            $column = new TextViewColumn('c09', 'C09', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c09_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c10 field
            //
            $column = new TextViewColumn('c10', 'C10', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c10_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c11 field
            //
            $column = new TextViewColumn('c11', 'C11', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c11_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c12 field
            //
            $column = new TextViewColumn('c12', 'C12', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c12_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c13 field
            //
            $column = new TextViewColumn('c13', 'C13', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c13_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c14 field
            //
            $column = new TextViewColumn('c14', 'C14', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c14_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c15 field
            //
            $column = new TextViewColumn('c15', 'C15', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c15_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c16 field
            //
            $column = new TextViewColumn('c16', 'C16', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c16_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c17 field
            //
            $column = new TextViewColumn('c17', 'C17', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c17_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c18 field
            //
            $column = new TextViewColumn('c18', 'C18', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c18_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c19 field
            //
            $column = new TextViewColumn('c19', 'C19', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c19_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c20 field
            //
            $column = new TextViewColumn('c20', 'C20', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c20_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c21 field
            //
            $column = new TextViewColumn('c21', 'C21', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c21_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c22 field
            //
            $column = new TextViewColumn('c22', 'C22', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c22_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c23 field
            //
            $column = new TextViewColumn('c23', 'C23', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c23_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strSet field
            //
            $column = new TextViewColumn('strSet', 'StrSet', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_strSet_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strFileName field
            //
            $column = new TextViewColumn('strFileName', 'StrFileName', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_strFileName_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_strPath_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for lastPlayed field
            //
            $column = new TextViewColumn('lastPlayed', 'LastPlayed', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_lastPlayed_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for dateAdded field
            //
            $column = new TextViewColumn('dateAdded', 'DateAdded', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_dateAdded_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for c00 field
            //
            $column = new TextViewColumn('c00', 'C00', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c00_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c01 field
            //
            $column = new TextViewColumn('c01', 'C01', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c01_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c02 field
            //
            $column = new TextViewColumn('c02', 'C02', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c02_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c03 field
            //
            $column = new TextViewColumn('c03', 'C03', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c03_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c04 field
            //
            $column = new TextViewColumn('c04', 'C04', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c04_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c05 field
            //
            $column = new TextViewColumn('c05', 'C05', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c05_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c06 field
            //
            $column = new TextViewColumn('c06', 'C06', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c06_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c07 field
            //
            $column = new TextViewColumn('c07', 'C07', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c07_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c08 field
            //
            $column = new TextViewColumn('c08', 'C08', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c08_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c09 field
            //
            $column = new TextViewColumn('c09', 'C09', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c09_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c10 field
            //
            $column = new TextViewColumn('c10', 'C10', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c10_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c11 field
            //
            $column = new TextViewColumn('c11', 'C11', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c11_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c12 field
            //
            $column = new TextViewColumn('c12', 'C12', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c12_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c13 field
            //
            $column = new TextViewColumn('c13', 'C13', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c13_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c14 field
            //
            $column = new TextViewColumn('c14', 'C14', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c14_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c15 field
            //
            $column = new TextViewColumn('c15', 'C15', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c15_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c16 field
            //
            $column = new TextViewColumn('c16', 'C16', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c16_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c17 field
            //
            $column = new TextViewColumn('c17', 'C17', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c17_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c18 field
            //
            $column = new TextViewColumn('c18', 'C18', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c18_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c19 field
            //
            $column = new TextViewColumn('c19', 'C19', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c19_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c20 field
            //
            $column = new TextViewColumn('c20', 'C20', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c20_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c21 field
            //
            $column = new TextViewColumn('c21', 'C21', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c21_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c22 field
            //
            $column = new TextViewColumn('c22', 'C22', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c22_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for c23 field
            //
            $column = new TextViewColumn('c23', 'C23', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_c23_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strSet field
            //
            $column = new TextViewColumn('strSet', 'StrSet', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_strSet_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strFileName field
            //
            $column = new TextViewColumn('strFileName', 'StrFileName', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_strFileName_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_strPath_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for lastPlayed field
            //
            $column = new TextViewColumn('lastPlayed', 'LastPlayed', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_lastPlayed_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for dateAdded field
            //
            $column = new TextViewColumn('dateAdded', 'DateAdded', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'movieviewGrid_dateAdded_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            return $result;
        }
        
        public function OpenAdvancedSearchByDefault()
        {
            return false;
        }
    
        protected function DoGetGridHeader()
        {
            return '';
        }
    }



    try
    {
        $Page = new movieviewPage("movieview.php", "movieview", GetCurrentUserGrantForDataSource("movieview"), 'UTF-8');
        $Page->SetShortCaption('Movieview');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('Movieview');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("movieview"));
        GetApplication()->SetEnableLessRunTimeCompile(GetEnableLessFilesRunTimeCompilation());
        GetApplication()->SetCanUserChangeOwnPassword(
            !function_exists('CanUserChangeOwnPassword') || CanUserChangeOwnPassword());
        GetApplication()->SetMainPage($Page);
        GetApplication()->Run();
    }
    catch(Exception $e)
    {
        ShowErrorPage($e->getMessage());
    }
	
