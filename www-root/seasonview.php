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
    
    
    
    class seasonviewPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new SqlitePDOConnectionFactory(),
                GetConnectionOptions(),
                '"seasonview"');
            $field = new IntegerField('idSeason');
            $this->dataset->AddField($field, true);
            $field = new IntegerField('idShow');
            $this->dataset->AddField($field, true);
            $field = new IntegerField('season');
            $this->dataset->AddField($field, true);
            $field = new StringField('strPath');
            $this->dataset->AddField($field, false);
            $field = new StringField('showTitle');
            $this->dataset->AddField($field, false);
            $field = new StringField('plot');
            $this->dataset->AddField($field, false);
            $field = new StringField('premiered');
            $this->dataset->AddField($field, false);
            $field = new StringField('genre');
            $this->dataset->AddField($field, false);
            $field = new StringField('strStudio');
            $this->dataset->AddField($field, false);
            $field = new StringField('mpaa');
            $this->dataset->AddField($field, false);
            $field = new StringField('episodes');
            $this->dataset->AddField($field, true);
            $field = new StringField('playCount');
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
            $grid->SearchControl = new SimpleSearch('seasonviewssearch', $this->dataset,
                array('idSeason', 'idShow', 'season', 'strPath', 'showTitle', 'plot', 'premiered', 'genre', 'strStudio', 'mpaa', 'episodes', 'playCount'),
                array($this->RenderText('IdSeason'), $this->RenderText('IdShow'), $this->RenderText('Season'), $this->RenderText('StrPath'), $this->RenderText('ShowTitle'), $this->RenderText('Plot'), $this->RenderText('Premiered'), $this->RenderText('Genre'), $this->RenderText('StrStudio'), $this->RenderText('Mpaa'), $this->RenderText('Episodes'), $this->RenderText('PlayCount')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('seasonviewasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('idSeason', $this->RenderText('IdSeason')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('idShow', $this->RenderText('IdShow')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('season', $this->RenderText('Season')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('strPath', $this->RenderText('StrPath')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('showTitle', $this->RenderText('ShowTitle')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('plot', $this->RenderText('Plot')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('premiered', $this->RenderText('Premiered')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('genre', $this->RenderText('Genre')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('strStudio', $this->RenderText('StrStudio')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('mpaa', $this->RenderText('Mpaa')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('episodes', $this->RenderText('Episodes')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('playCount', $this->RenderText('PlayCount')));
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
            // View column for idSeason field
            //
            $column = new TextViewColumn('idSeason', 'IdSeason', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for idShow field
            //
            $column = new TextViewColumn('idShow', 'IdShow', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for season field
            //
            $column = new TextViewColumn('season', 'Season', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_strPath_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for showTitle field
            //
            $column = new TextViewColumn('showTitle', 'ShowTitle', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_showTitle_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for plot field
            //
            $column = new TextViewColumn('plot', 'Plot', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_plot_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for premiered field
            //
            $column = new TextViewColumn('premiered', 'Premiered', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_premiered_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for genre field
            //
            $column = new TextViewColumn('genre', 'Genre', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_genre_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for strStudio field
            //
            $column = new TextViewColumn('strStudio', 'StrStudio', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_strStudio_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for mpaa field
            //
            $column = new TextViewColumn('mpaa', 'Mpaa', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_mpaa_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for episodes field
            //
            $column = new TextViewColumn('episodes', 'Episodes', $this->dataset);
            $column->SetOrderable(true);
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
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for idSeason field
            //
            $column = new TextViewColumn('idSeason', 'IdSeason', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for idShow field
            //
            $column = new TextViewColumn('idShow', 'IdShow', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for season field
            //
            $column = new TextViewColumn('season', 'Season', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_strPath_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for showTitle field
            //
            $column = new TextViewColumn('showTitle', 'ShowTitle', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_showTitle_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for plot field
            //
            $column = new TextViewColumn('plot', 'Plot', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_plot_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for premiered field
            //
            $column = new TextViewColumn('premiered', 'Premiered', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_premiered_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for genre field
            //
            $column = new TextViewColumn('genre', 'Genre', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_genre_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for strStudio field
            //
            $column = new TextViewColumn('strStudio', 'StrStudio', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_strStudio_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for mpaa field
            //
            $column = new TextViewColumn('mpaa', 'Mpaa', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('seasonviewGrid_mpaa_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for episodes field
            //
            $column = new TextViewColumn('episodes', 'Episodes', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for playCount field
            //
            $column = new TextViewColumn('playCount', 'PlayCount', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for idSeason field
            //
            $editor = new TextEdit('idseason_edit');
            $editColumn = new CustomEditColumn('IdSeason', 'idSeason', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for idShow field
            //
            $editor = new TextEdit('idshow_edit');
            $editColumn = new CustomEditColumn('IdShow', 'idShow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for season field
            //
            $editor = new TextEdit('season_edit');
            $editColumn = new CustomEditColumn('Season', 'season', $editor, $this->dataset);
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
            // Edit column for showTitle field
            //
            $editor = new TextAreaEdit('showtitle_edit', 50, 8);
            $editColumn = new CustomEditColumn('ShowTitle', 'showTitle', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for plot field
            //
            $editor = new TextAreaEdit('plot_edit', 50, 8);
            $editColumn = new CustomEditColumn('Plot', 'plot', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for premiered field
            //
            $editor = new TextAreaEdit('premiered_edit', 50, 8);
            $editColumn = new CustomEditColumn('Premiered', 'premiered', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for genre field
            //
            $editor = new TextAreaEdit('genre_edit', 50, 8);
            $editColumn = new CustomEditColumn('Genre', 'genre', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for strStudio field
            //
            $editor = new TextAreaEdit('strstudio_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrStudio', 'strStudio', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for mpaa field
            //
            $editor = new TextAreaEdit('mpaa_edit', 50, 8);
            $editColumn = new CustomEditColumn('Mpaa', 'mpaa', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for episodes field
            //
            $editor = new TextEdit('episodes_edit');
            $editColumn = new CustomEditColumn('Episodes', 'episodes', $editor, $this->dataset);
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
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for idSeason field
            //
            $editor = new TextEdit('idseason_edit');
            $editColumn = new CustomEditColumn('IdSeason', 'idSeason', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for idShow field
            //
            $editor = new TextEdit('idshow_edit');
            $editColumn = new CustomEditColumn('IdShow', 'idShow', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for season field
            //
            $editor = new TextEdit('season_edit');
            $editColumn = new CustomEditColumn('Season', 'season', $editor, $this->dataset);
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
            // Edit column for showTitle field
            //
            $editor = new TextAreaEdit('showtitle_edit', 50, 8);
            $editColumn = new CustomEditColumn('ShowTitle', 'showTitle', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for plot field
            //
            $editor = new TextAreaEdit('plot_edit', 50, 8);
            $editColumn = new CustomEditColumn('Plot', 'plot', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for premiered field
            //
            $editor = new TextAreaEdit('premiered_edit', 50, 8);
            $editColumn = new CustomEditColumn('Premiered', 'premiered', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for genre field
            //
            $editor = new TextAreaEdit('genre_edit', 50, 8);
            $editColumn = new CustomEditColumn('Genre', 'genre', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for strStudio field
            //
            $editor = new TextAreaEdit('strstudio_edit', 50, 8);
            $editColumn = new CustomEditColumn('StrStudio', 'strStudio', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for mpaa field
            //
            $editor = new TextAreaEdit('mpaa_edit', 50, 8);
            $editColumn = new CustomEditColumn('Mpaa', 'mpaa', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for episodes field
            //
            $editor = new TextEdit('episodes_edit');
            $editColumn = new CustomEditColumn('Episodes', 'episodes', $editor, $this->dataset);
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
            // View column for idSeason field
            //
            $column = new TextViewColumn('idSeason', 'IdSeason', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for idShow field
            //
            $column = new TextViewColumn('idShow', 'IdShow', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for season field
            //
            $column = new TextViewColumn('season', 'Season', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for showTitle field
            //
            $column = new TextViewColumn('showTitle', 'ShowTitle', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for plot field
            //
            $column = new TextViewColumn('plot', 'Plot', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for premiered field
            //
            $column = new TextViewColumn('premiered', 'Premiered', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for genre field
            //
            $column = new TextViewColumn('genre', 'Genre', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for strStudio field
            //
            $column = new TextViewColumn('strStudio', 'StrStudio', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for mpaa field
            //
            $column = new TextViewColumn('mpaa', 'Mpaa', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for episodes field
            //
            $column = new TextViewColumn('episodes', 'Episodes', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for playCount field
            //
            $column = new TextViewColumn('playCount', 'PlayCount', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for idSeason field
            //
            $column = new TextViewColumn('idSeason', 'IdSeason', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for idShow field
            //
            $column = new TextViewColumn('idShow', 'IdShow', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for season field
            //
            $column = new TextViewColumn('season', 'Season', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for showTitle field
            //
            $column = new TextViewColumn('showTitle', 'ShowTitle', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for plot field
            //
            $column = new TextViewColumn('plot', 'Plot', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for premiered field
            //
            $column = new TextViewColumn('premiered', 'Premiered', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for genre field
            //
            $column = new TextViewColumn('genre', 'Genre', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for strStudio field
            //
            $column = new TextViewColumn('strStudio', 'StrStudio', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for mpaa field
            //
            $column = new TextViewColumn('mpaa', 'Mpaa', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for episodes field
            //
            $column = new TextViewColumn('episodes', 'Episodes', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for playCount field
            //
            $column = new TextViewColumn('playCount', 'PlayCount', $this->dataset);
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
        
        public function GetModalGridDeleteHandler() { return 'seasonview_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'seasonviewGrid');
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
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_strPath_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for showTitle field
            //
            $column = new TextViewColumn('showTitle', 'ShowTitle', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_showTitle_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for plot field
            //
            $column = new TextViewColumn('plot', 'Plot', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_plot_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for premiered field
            //
            $column = new TextViewColumn('premiered', 'Premiered', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_premiered_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for genre field
            //
            $column = new TextViewColumn('genre', 'Genre', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_genre_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strStudio field
            //
            $column = new TextViewColumn('strStudio', 'StrStudio', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_strStudio_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for mpaa field
            //
            $column = new TextViewColumn('mpaa', 'Mpaa', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_mpaa_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for strPath field
            //
            $column = new TextViewColumn('strPath', 'StrPath', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_strPath_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for showTitle field
            //
            $column = new TextViewColumn('showTitle', 'ShowTitle', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_showTitle_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for plot field
            //
            $column = new TextViewColumn('plot', 'Plot', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_plot_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for premiered field
            //
            $column = new TextViewColumn('premiered', 'Premiered', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_premiered_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for genre field
            //
            $column = new TextViewColumn('genre', 'Genre', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_genre_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for strStudio field
            //
            $column = new TextViewColumn('strStudio', 'StrStudio', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_strStudio_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for mpaa field
            //
            $column = new TextViewColumn('mpaa', 'Mpaa', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'seasonviewGrid_mpaa_handler_view', $column);
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
        $Page = new seasonviewPage("seasonview.php", "seasonview", GetCurrentUserGrantForDataSource("seasonview"), 'UTF-8');
        $Page->SetShortCaption('Seasonview');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('Seasonview');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("seasonview"));
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
	
