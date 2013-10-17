<?php
//Include Common Files @1-E54E4140
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "unimed_mant.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsGridunidadesmedida { //unidadesmedida class @6-18E9FB7D

//Variables @6-30462EB5

    // Public variables
    public $ComponentType = "Grid";
    public $ComponentName;
    public $Visible;
    public $Errors;
    public $ErrorBlock;
    public $ds;
    public $DataSource;
    public $PageSize;
    public $IsEmpty;
    public $ForceIteration = false;
    public $HasRecord = false;
    public $SorterName = "";
    public $SorterDirection = "";
    public $PageNumber;
    public $RowNumber;
    public $ControlsVisible = array();

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";
    public $Attributes;

    // Grid Controls
    public $StaticControls;
    public $RowControls;
    public $AltRowControls;
    public $IsAltRow;
    public $Sorter_id;
    public $Sorter_descrp_unidad;
    public $Sorter_obsv_unidad;
//End Variables

//Class_Initialize Event @6-72074B55
    function clsGridunidadesmedida($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "unidadesmedida";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->IsAltRow = false;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid unidadesmedida";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsunidadesmedidaDataSource($this);
        $this->ds = & $this->DataSource;
        $this->PageSize = CCGetParam($this->ComponentName . "PageSize", "");
        if(!is_numeric($this->PageSize) || !strlen($this->PageSize))
            $this->PageSize = 20;
        else
            $this->PageSize = intval($this->PageSize);
        if ($this->PageSize > 100)
            $this->PageSize = 100;
        if($this->PageSize == 0)
            $this->Errors->addError("<p>Form: Grid " . $this->ComponentName . "<BR>Error: (CCS06) Invalid page size.</p>");
        $this->PageNumber = intval(CCGetParam($this->ComponentName . "Page", 1));
        if ($this->PageNumber <= 0) $this->PageNumber = 1;
        $this->SorterName = CCGetParam("unidadesmedidaOrder", "");
        $this->SorterDirection = CCGetParam("unidadesmedidaDir", "");

        $this->Data_Detail = new clsPanel("Data_Detail", $this);
        $this->Detail = new clsControl(ccsLink, "Detail", "Detail", ccsText, "", CCGetRequestParam("Detail", ccsGet, NULL), $this);
        $this->Detail->Page = "crud_unimed.php";
        $this->Data_id = new clsPanel("Data_id", $this);
        $this->id = new clsControl(ccsLabel, "id", "id", ccsInteger, "", CCGetRequestParam("id", ccsGet, NULL), $this);
        $this->Data_descrp_unidad = new clsPanel("Data_descrp_unidad", $this);
        $this->descrp_unidad = new clsControl(ccsLabel, "descrp_unidad", "descrp_unidad", ccsText, "", CCGetRequestParam("descrp_unidad", ccsGet, NULL), $this);
        $this->Data_obsv_unidad = new clsPanel("Data_obsv_unidad", $this);
        $this->obsv_unidad = new clsControl(ccsLabel, "obsv_unidad", "obsv_unidad", ccsText, "", CCGetRequestParam("obsv_unidad", ccsGet, NULL), $this);
        $this->Data_Alt_Detail = new clsPanel("Data_Alt_Detail", $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "crud_unimed.php";
        $this->Data_Alt_id = new clsPanel("Data_Alt_id", $this);
        $this->Alt_id = new clsControl(ccsLabel, "Alt_id", "Alt_id", ccsInteger, "", CCGetRequestParam("Alt_id", ccsGet, NULL), $this);
        $this->Data_Alt_descrp_unidad = new clsPanel("Data_Alt_descrp_unidad", $this);
        $this->Alt_descrp_unidad = new clsControl(ccsLabel, "Alt_descrp_unidad", "Alt_descrp_unidad", ccsText, "", CCGetRequestParam("Alt_descrp_unidad", ccsGet, NULL), $this);
        $this->Data_Alt_obsv_unidad = new clsPanel("Data_Alt_obsv_unidad", $this);
        $this->Alt_obsv_unidad = new clsControl(ccsLabel, "Alt_obsv_unidad", "Alt_obsv_unidad", ccsText, "", CCGetRequestParam("Alt_obsv_unidad", ccsGet, NULL), $this);
        $this->unidadesmedida_Insert = new clsControl(ccsLink, "unidadesmedida_Insert", "unidadesmedida_Insert", ccsText, "", CCGetRequestParam("unidadesmedida_Insert", ccsGet, NULL), $this);
        $this->unidadesmedida_Insert->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->unidadesmedida_Insert->Page = "crud_unimed.php";
        $this->unidadesmedida_TotalRecords = new clsControl(ccsLabel, "unidadesmedida_TotalRecords", "unidadesmedida_TotalRecords", ccsText, "", CCGetRequestParam("unidadesmedida_TotalRecords", ccsGet, NULL), $this);
        $this->Header_Detail = new clsPanel("Header_Detail", $this);
        $this->Header_id = new clsPanel("Header_id", $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Header_descrp_unidad = new clsPanel("Header_descrp_unidad", $this);
        $this->Sorter_descrp_unidad = new clsSorter($this->ComponentName, "Sorter_descrp_unidad", $FileName, $this);
        $this->Header_obsv_unidad = new clsPanel("Header_obsv_unidad", $this);
        $this->Sorter_obsv_unidad = new clsSorter($this->ComponentName, "Sorter_obsv_unidad", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->Header_id->AddComponent("Sorter_id", $this->Sorter_id);
        $this->Header_descrp_unidad->AddComponent("Sorter_descrp_unidad", $this->Sorter_descrp_unidad);
        $this->Header_obsv_unidad->AddComponent("Sorter_obsv_unidad", $this->Sorter_obsv_unidad);
        $this->Data_Detail->AddComponent("Detail", $this->Detail);
        $this->Data_id->AddComponent("id", $this->id);
        $this->Data_descrp_unidad->AddComponent("descrp_unidad", $this->descrp_unidad);
        $this->Data_obsv_unidad->AddComponent("obsv_unidad", $this->obsv_unidad);
        $this->Data_Alt_Detail->AddComponent("Alt_Detail", $this->Alt_Detail);
        $this->Data_Alt_id->AddComponent("Alt_id", $this->Alt_id);
        $this->Data_Alt_descrp_unidad->AddComponent("Alt_descrp_unidad", $this->Alt_descrp_unidad);
        $this->Data_Alt_obsv_unidad->AddComponent("Alt_obsv_unidad", $this->Alt_obsv_unidad);
    }
//End Class_Initialize Event

//Initialize Method @6-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @6-84ACFC06
    function Show()
    {
        $Tpl = & CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $this->RowNumber = 0;


        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->Prepare();
        $this->DataSource->Open();
        $this->HasRecord = $this->DataSource->has_next_record();
        $this->IsEmpty = ! $this->HasRecord;
        $this->Attributes->Show();

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        if(!$this->Visible) return;

        $GridBlock = "Grid " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $GridBlock;


        if (!$this->IsEmpty) {
            $this->ControlsVisible["Data_Detail"] = $this->Data_Detail->Visible;
            $this->ControlsVisible["Detail"] = $this->Detail->Visible;
            $this->ControlsVisible["Data_id"] = $this->Data_id->Visible;
            $this->ControlsVisible["id"] = $this->id->Visible;
            $this->ControlsVisible["Data_descrp_unidad"] = $this->Data_descrp_unidad->Visible;
            $this->ControlsVisible["descrp_unidad"] = $this->descrp_unidad->Visible;
            $this->ControlsVisible["Data_obsv_unidad"] = $this->Data_obsv_unidad->Visible;
            $this->ControlsVisible["obsv_unidad"] = $this->obsv_unidad->Visible;
            while ($this->ForceIteration || (($this->RowNumber < $this->PageSize) &&  ($this->HasRecord = $this->DataSource->has_next_record()))) {
                // Parse Separator
                if($this->RowNumber) {
                    $this->Attributes->Show();
                    $Tpl->parseto("Separator", true, "Row");
                }
                $this->RowNumber++;
                if ($this->HasRecord) {
                    $this->DataSource->next_record();
                    $this->DataSource->SetValues();
                }
                if(!$this->IsAltRow)
                {
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/Row";
                    $this->Detail->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                    $this->Detail->Parameters = CCAddParam($this->Detail->Parameters, "id", $this->DataSource->f("id"));
                    $this->id->SetValue($this->DataSource->id->GetValue());
                    $this->descrp_unidad->SetValue($this->DataSource->descrp_unidad->GetValue());
                    $this->obsv_unidad->SetValue($this->DataSource->obsv_unidad->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Data_Detail->Show();
                    $this->Data_id->Show();
                    $this->Data_descrp_unidad->Show();
                    $this->Data_obsv_unidad->Show();
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                    $Tpl->parse("Row", true);
                }
                else
                {
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/AltRow";
                    $this->Alt_Detail->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                    $this->Alt_Detail->Parameters = CCAddParam($this->Alt_Detail->Parameters, "id", $this->DataSource->f("id"));
                    $this->Alt_id->SetValue($this->DataSource->Alt_id->GetValue());
                    $this->Alt_descrp_unidad->SetValue($this->DataSource->Alt_descrp_unidad->GetValue());
                    $this->Alt_obsv_unidad->SetValue($this->DataSource->Alt_obsv_unidad->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Data_Alt_Detail->Show();
                    $this->Data_Alt_id->Show();
                    $this->Data_Alt_descrp_unidad->Show();
                    $this->Data_Alt_obsv_unidad->Show();
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                    $Tpl->parseto("AltRow", true, "Row");
                }
                $this->IsAltRow = (!$this->IsAltRow);
            }
        }
        else { // Show NoRecords block if no records are found
            $this->Attributes->Show();
            $Tpl->parse("NoRecords", false);
        }

        $errors = $this->GetErrors();
        if(strlen($errors))
        {
            $Tpl->replaceblock("", $errors);
            $Tpl->block_path = $ParentPath;
            return;
        }
        $this->Navigator->PageNumber = $this->DataSource->AbsolutePage;
        $this->Navigator->PageSize = $this->PageSize;
        if ($this->DataSource->RecordsCount == "CCS not counted")
            $this->Navigator->TotalPages = $this->DataSource->AbsolutePage + ($this->DataSource->next_record() ? 1 : 0);
        else
            $this->Navigator->TotalPages = $this->DataSource->PageCount();
        if (($this->Navigator->TotalPages <= 1 && $this->Navigator->PageNumber == 1) || $this->Navigator->PageSize == "") {
            $this->Navigator->Visible = false;
        }
        $this->unidadesmedida_Insert->Show();
        $this->unidadesmedida_TotalRecords->Show();
        $this->Header_Detail->Show();
        $this->Header_id->Show();
        $this->Header_descrp_unidad->Show();
        $this->Header_obsv_unidad->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @6-21C9CF4F
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->descrp_unidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->obsv_unidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_descrp_unidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_obsv_unidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End unidadesmedida Class @6-FCB6E20C

class clsunidadesmedidaDataSource extends clsDBConnection1 {  //unidadesmedidaDataSource Class @6-292E388D

//DataSource Variables @6-EF7B10C7
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $id;
    public $descrp_unidad;
    public $obsv_unidad;
    public $Alt_id;
    public $Alt_descrp_unidad;
    public $Alt_obsv_unidad;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-BDA9DDF3
    function clsunidadesmedidaDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid unidadesmedida";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->descrp_unidad = new clsField("descrp_unidad", ccsText, "");
        
        $this->obsv_unidad = new clsField("obsv_unidad", ccsText, "");
        
        $this->Alt_id = new clsField("Alt_id", ccsInteger, "");
        
        $this->Alt_descrp_unidad = new clsField("Alt_descrp_unidad", ccsText, "");
        
        $this->Alt_obsv_unidad = new clsField("Alt_obsv_unidad", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @6-D170D5C9
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "id";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_descrp_unidad" => array("descrp_unidad", ""), 
            "Sorter_obsv_unidad" => array("obsv_unidad", "")));
    }
//End SetOrder Method

//Prepare Method @6-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @6-293601F2
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM unidadesmedida";
        $this->SQL = "SELECT id, descrp_unidad, obsv_unidad \n\n" .
        "FROM unidadesmedida {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        if ($this->CountSQL) 
            $this->RecordsCount = CCGetDBValue(CCBuildSQL($this->CountSQL, $this->Where, ""), $this);
        else
            $this->RecordsCount = "CCS not counted";
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
        $this->MoveToPage($this->AbsolutePage);
    }
//End Open Method

//SetValues Method @6-BEC4B075
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->descrp_unidad->SetDBValue($this->f("descrp_unidad"));
        $this->obsv_unidad->SetDBValue($this->f("obsv_unidad"));
        $this->Alt_id->SetDBValue(trim($this->f("id")));
        $this->Alt_descrp_unidad->SetDBValue($this->f("descrp_unidad"));
        $this->Alt_obsv_unidad->SetDBValue($this->f("obsv_unidad"));
    }
//End SetValues Method

} //End unidadesmedidaDataSource Class @6-FCB6E20C

class clsRecordunidadesmedidaSearch { //unidadesmedidaSearch Class @40-4B2FBAEF

//Variables @40-9E315808

    // Public variables
    public $ComponentType = "Record";
    public $ComponentName;
    public $Parent;
    public $HTMLFormAction;
    public $PressedButton;
    public $Errors;
    public $ErrorBlock;
    public $FormSubmitted;
    public $FormEnctype;
    public $Visible;
    public $IsEmpty;

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";

    public $InsertAllowed = false;
    public $UpdateAllowed = false;
    public $DeleteAllowed = false;
    public $ReadAllowed   = false;
    public $EditMode      = false;
    public $ds;
    public $DataSource;
    public $ValidatingControls;
    public $Controls;
    public $Attributes;

    // Class variables
//End Variables

//Class_Initialize Event @40-C6A30703
    function clsRecordunidadesmedidaSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record unidadesmedidaSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "unidadesmedidaSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "unidadesmedidaOrder", "unidadesmedidaDir", "unidadesmedidaPageSize", "ccsForm"));
            $this->ClearParameters->Page = "unimed_mant.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->unidadesmedidaOrder = new clsControl(ccsListBox, "unidadesmedidaOrder", "unidadesmedidaOrder", ccsText, "", CCGetRequestParam("unidadesmedidaOrder", $Method, NULL), $this);
            $this->unidadesmedidaOrder->DSType = dsListOfValues;
            $this->unidadesmedidaOrder->Values = array(array("", $CCSLocales->GetText("CCS_SelectField")), array("Sorter_id", $CCSLocales->GetText("id")), array("Sorter_descrp_unidad", $CCSLocales->GetText("descrp_unidad")), array("Sorter_obsv_unidad", $CCSLocales->GetText("obsv_unidad")));
            $this->unidadesmedidaDir = new clsControl(ccsListBox, "unidadesmedidaDir", "unidadesmedidaDir", ccsText, "", CCGetRequestParam("unidadesmedidaDir", $Method, NULL), $this);
            $this->unidadesmedidaDir->DSType = dsListOfValues;
            $this->unidadesmedidaDir->Values = array(array("", $CCSLocales->GetText("CCS_SelectOrder")), array("ASC", $CCSLocales->GetText("CCS_ASC")), array("DESC", $CCSLocales->GetText("CCS_DESC")));
            $this->unidadesmedidaPageSize = new clsControl(ccsListBox, "unidadesmedidaPageSize", "unidadesmedidaPageSize", ccsText, "", CCGetRequestParam("unidadesmedidaPageSize", $Method, NULL), $this);
            $this->unidadesmedidaPageSize->DSType = dsListOfValues;
            $this->unidadesmedidaPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @40-DAAE2D07
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->unidadesmedidaOrder->Validate() && $Validation);
        $Validation = ($this->unidadesmedidaDir->Validate() && $Validation);
        $Validation = ($this->unidadesmedidaPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->unidadesmedidaOrder->Errors->Count() == 0);
        $Validation =  $Validation && ($this->unidadesmedidaDir->Errors->Count() == 0);
        $Validation =  $Validation && ($this->unidadesmedidaPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @40-1585BD6C
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->unidadesmedidaOrder->Errors->Count());
        $errors = ($errors || $this->unidadesmedidaDir->Errors->Count());
        $errors = ($errors || $this->unidadesmedidaPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @40-7772F11A
    function Operation()
    {
        if(!$this->Visible)
            return;

        global $Redirect;
        global $FileName;

        if(!$this->FormSubmitted) {
            return;
        }

        if($this->FormSubmitted) {
            $this->PressedButton = "Button_DoSearch";
            if($this->Button_DoSearch->Pressed) {
                $this->PressedButton = "Button_DoSearch";
            }
        }
        $Redirect = "unimed_mant.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "unimed_mant.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @40-5D604C20
    function Show()
    {
        global $CCSUseAmp;
        $Tpl = & CCGetTemplate($this);
        global $FileName;
        global $CCSLocales;
        $Error = "";

        if(!$this->Visible)
            return;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);

        $this->searchConditions->Prepare();
        $this->unidadesmedidaOrder->Prepare();
        $this->unidadesmedidaDir->Prepare();
        $this->unidadesmedidaPageSize->Prepare();

        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;
        if (!$this->FormSubmitted) {
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->ClearParameters->Errors->ToString());
            $Error = ComposeStrings($Error, $this->s_keyword->Errors->ToString());
            $Error = ComposeStrings($Error, $this->searchConditions->Errors->ToString());
            $Error = ComposeStrings($Error, $this->unidadesmedidaOrder->Errors->ToString());
            $Error = ComposeStrings($Error, $this->unidadesmedidaDir->Errors->ToString());
            $Error = ComposeStrings($Error, $this->unidadesmedidaPageSize->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Errors->ToString());
            $Tpl->SetVar("Error", $Error);
            $Tpl->Parse("Error", false);
        }
        $CCSForm = $this->EditMode ? $this->ComponentName . ":" . "Edit" : $this->ComponentName;
        $this->HTMLFormAction = $FileName . "?" . CCAddParam(CCGetQueryString("QueryString", ""), "ccsForm", $CCSForm);
        $Tpl->SetVar("Action", !$CCSUseAmp ? $this->HTMLFormAction : str_replace("&", "&amp;", $this->HTMLFormAction));
        $Tpl->SetVar("HTMLFormName", $this->ComponentName);
        $Tpl->SetVar("HTMLFormEnctype", $this->FormEnctype);

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        $this->Attributes->Show();
        if(!$this->Visible) {
            $Tpl->block_path = $ParentPath;
            return;
        }

        $this->ClearParameters->Show();
        $this->Button_DoSearch->Show();
        $this->s_keyword->Show();
        $this->searchConditions->Show();
        $this->unidadesmedidaOrder->Show();
        $this->unidadesmedidaDir->Show();
        $this->unidadesmedidaPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End unidadesmedidaSearch Class @40-FCB6E20C



//Initialize Page @1-827CA7AA
// Variables
$FileName = "";
$Redirect = "";
$Tpl = "";
$TemplateFileName = "";
$BlockToParse = "";
$ComponentName = "";
$Attributes = "";
$PathToCurrentMasterPage = "";
$TemplatePathValue = "";

// Events;
$CCSEvents = "";
$CCSEventResult = "";
$MasterPage = null;
$TemplateSource = "";

$FileName = FileName;
$Redirect = "";
$TemplateFileName = "unimed_mant.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-F3787CBB
include_once("./unimed_mant_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-56BD9451
$DBConnection1 = new clsDBConnection1();
$MainPage->Connections["Connection1"] = & $DBConnection1;
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
$MasterPage = new clsMasterPage("/Designs/medibio_template/medibio_template/", "MasterPage", $MainPage);
$MasterPage->Attributes = $Attributes;
$MasterPage->Initialize();
$Head = new clsPanel("Head", $MainPage);
$Head->PlaceholderName = "Head";
$Content = new clsPanel("Content", $MainPage);
$Content->PlaceholderName = "Content";
$unidadesmedida = new clsGridunidadesmedida("", $MainPage);
$unidadesmedidaSearch = new clsRecordunidadesmedidaSearch("", $MainPage);
$Panel1 = new clsPanel("Panel1", $MainPage);
$Label1 = new clsControl(ccsLabel, "Label1", "Label1", ccsText, "", CCGetRequestParam("Label1", ccsGet, NULL), $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Logout = new clsControl(ccsLink, "Logout", "Logout", ccsText, "", CCGetRequestParam("Logout", ccsGet, NULL), $MainPage);
$Logout->Page = "login.php";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->unidadesmedida = & $unidadesmedida;
$MainPage->unidadesmedidaSearch = & $unidadesmedidaSearch;
$MainPage->Panel1 = & $Panel1;
$MainPage->Label1 = & $Label1;
$MainPage->Menu = & $Menu;
$MainPage->Logout = & $Logout;
$MainPage->Sidebar1 = & $Sidebar1;
$Content->AddComponent("unidadesmedida", $unidadesmedida);
$Content->AddComponent("unidadesmedidaSearch", $unidadesmedidaSearch);
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("Label1", $Label1);
$Menu->AddComponent("Logout", $Logout);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("Unidades de medida");
$Logout->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Logout->Parameters = CCAddParam($Logout->Parameters, "Logout", "True");
$unidadesmedida->Initialize();

BindEvents();

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

//Initialize HTML Template @1-554B8835
$CCSEventResult = CCGetEvent($CCSEvents, "OnInitializeView", $MainPage);
$Tpl = new clsTemplate($FileEncoding, $TemplateEncoding);
if (strlen($TemplateSource)) {
    $Tpl->LoadTemplateFromStr($TemplateSource, $BlockToParse, "CP1252", "replace");
} else {
    $Tpl->LoadTemplate(PathToCurrentPage . $TemplateFileName, $BlockToParse, "CP1252", "replace");
}
$Tpl->SetVar("CCS_PathToRoot", $PathToRoot);
$Tpl->SetVar("CCS_PathToMasterPage", RelativePath . $PathToCurrentMasterPage);
$Tpl->block_path = "/$BlockToParse";
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeShow", $MainPage);
$Attributes->SetValue("pathToRoot", "");
$Attributes->Show();
//End Initialize HTML Template

//Execute Components @1-8B786F7A
$MasterPage->Operations();
$unidadesmedidaSearch->Operation();
//End Execute Components

//Go to destination page @1-82C7411B
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($unidadesmedida);
    unset($unidadesmedidaSearch);
    unset($Tpl);
    exit;
}
//End Go to destination page

//Show Page @1-F6C60005
$Head->Show();
$Content->Show();
$Menu->Show();
$Sidebar1->Show();
$MasterPage->Tpl->SetVar("Head", $Tpl->GetVar("Panel Head"));
$MasterPage->Tpl->SetVar("Content", $Tpl->GetVar("Panel Content"));
$MasterPage->Tpl->SetVar("Menu", $Tpl->GetVar("Panel Menu"));
$MasterPage->Tpl->SetVar("Sidebar1", $Tpl->GetVar("Panel Sidebar1"));
$MasterPage->Show();
if (!isset($main_block)) $main_block = $MasterPage->HTML;
$main_block = CCConvertEncoding($main_block, $FileEncoding, $CCSLocales->GetFormatInfo("Encoding"));
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

//Unload Page @1-715F4715
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($unidadesmedida);
unset($unidadesmedidaSearch);
unset($Tpl);
//End Unload Page


?>
