<?php
//Include Common Files @1-BAC41A3A
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "ent_alm_general.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsGrident_alm_general1 { //ent_alm_general1 class @76-E28534C1

//Variables @76-2729BFFE

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
    public $Sorter_id;
    public $Sorter_fecha_proceso;
    public $Sorter_Orden_compra;
    public $Sorter_observaciones;
    public $Sorter_activa;
//End Variables

//Class_Initialize Event @76-8777C08B
    function clsGrident_alm_general1($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "ent_alm_general1";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid ent_alm_general1";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsent_alm_general1DataSource($this);
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
        $this->SorterName = CCGetParam("ent_alm_general1Order", "");
        $this->SorterDirection = CCGetParam("ent_alm_general1Dir", "");

        $this->Data_id = new clsPanel("Data_id", $this);
        $this->id = new clsControl(ccsLink, "id", "id", ccsText, "", CCGetRequestParam("id", ccsGet, NULL), $this);
        $this->id->Page = "Crud_entAlmGeneral.php";
        $this->Data_fecha_proceso = new clsPanel("Data_fecha_proceso", $this);
        $this->fecha_proceso = new clsControl(ccsLabel, "fecha_proceso", "fecha_proceso", ccsDate, $DefaultDateFormat, CCGetRequestParam("fecha_proceso", ccsGet, NULL), $this);
        $this->Data_Orden_compra = new clsPanel("Data_Orden_compra", $this);
        $this->Orden_compra = new clsControl(ccsLabel, "Orden_compra", "Orden_compra", ccsInteger, "", CCGetRequestParam("Orden_compra", ccsGet, NULL), $this);
        $this->Data_observaciones = new clsPanel("Data_observaciones", $this);
        $this->observaciones = new clsControl(ccsLabel, "observaciones", "observaciones", ccsText, "", CCGetRequestParam("observaciones", ccsGet, NULL), $this);
        $this->Data_activa = new clsPanel("Data_activa", $this);
        $this->activa = new clsControl(ccsLabel, "activa", "activa", ccsText, "", CCGetRequestParam("activa", ccsGet, NULL), $this);
        $this->ent_alm_general1_Insert = new clsControl(ccsLink, "ent_alm_general1_Insert", "ent_alm_general1_Insert", ccsText, "", CCGetRequestParam("ent_alm_general1_Insert", ccsGet, NULL), $this);
        $this->ent_alm_general1_Insert->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->ent_alm_general1_Insert->Page = "Crud_entAlmGeneral.php";
        $this->ent_alm_general1_TotalRecords = new clsControl(ccsLabel, "ent_alm_general1_TotalRecords", "ent_alm_general1_TotalRecords", ccsText, "", CCGetRequestParam("ent_alm_general1_TotalRecords", ccsGet, NULL), $this);
        $this->Header_id = new clsPanel("Header_id", $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Header_fecha_proceso = new clsPanel("Header_fecha_proceso", $this);
        $this->Sorter_fecha_proceso = new clsSorter($this->ComponentName, "Sorter_fecha_proceso", $FileName, $this);
        $this->Header_Orden_compra = new clsPanel("Header_Orden_compra", $this);
        $this->Sorter_Orden_compra = new clsSorter($this->ComponentName, "Sorter_Orden_compra", $FileName, $this);
        $this->Header_observaciones = new clsPanel("Header_observaciones", $this);
        $this->Sorter_observaciones = new clsSorter($this->ComponentName, "Sorter_observaciones", $FileName, $this);
        $this->Header_activa = new clsPanel("Header_activa", $this);
        $this->Sorter_activa = new clsSorter($this->ComponentName, "Sorter_activa", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->Header_id->AddComponent("Sorter_id", $this->Sorter_id);
        $this->Header_fecha_proceso->AddComponent("Sorter_fecha_proceso", $this->Sorter_fecha_proceso);
        $this->Header_Orden_compra->AddComponent("Sorter_Orden_compra", $this->Sorter_Orden_compra);
        $this->Header_observaciones->AddComponent("Sorter_observaciones", $this->Sorter_observaciones);
        $this->Header_activa->AddComponent("Sorter_activa", $this->Sorter_activa);
        $this->Data_id->AddComponent("id", $this->id);
        $this->Data_fecha_proceso->AddComponent("fecha_proceso", $this->fecha_proceso);
        $this->Data_Orden_compra->AddComponent("Orden_compra", $this->Orden_compra);
        $this->Data_observaciones->AddComponent("observaciones", $this->observaciones);
        $this->Data_activa->AddComponent("activa", $this->activa);
    }
//End Class_Initialize Event

//Initialize Method @76-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @76-A19AF771
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
            $this->ControlsVisible["Data_id"] = $this->Data_id->Visible;
            $this->ControlsVisible["id"] = $this->id->Visible;
            $this->ControlsVisible["Data_fecha_proceso"] = $this->Data_fecha_proceso->Visible;
            $this->ControlsVisible["fecha_proceso"] = $this->fecha_proceso->Visible;
            $this->ControlsVisible["Data_Orden_compra"] = $this->Data_Orden_compra->Visible;
            $this->ControlsVisible["Orden_compra"] = $this->Orden_compra->Visible;
            $this->ControlsVisible["Data_observaciones"] = $this->Data_observaciones->Visible;
            $this->ControlsVisible["observaciones"] = $this->observaciones->Visible;
            $this->ControlsVisible["Data_activa"] = $this->Data_activa->Visible;
            $this->ControlsVisible["activa"] = $this->activa->Visible;
            while ($this->ForceIteration || (($this->RowNumber < $this->PageSize) &&  ($this->HasRecord = $this->DataSource->has_next_record()))) {
                $this->RowNumber++;
                if ($this->HasRecord) {
                    $this->DataSource->next_record();
                    $this->DataSource->SetValues();
                }
                $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/Row";
                $this->id->SetValue($this->DataSource->id->GetValue());
                $this->id->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                $this->id->Parameters = CCAddParam($this->id->Parameters, "id", $this->DataSource->f("id"));
                $this->fecha_proceso->SetValue($this->DataSource->fecha_proceso->GetValue());
                $this->Orden_compra->SetValue($this->DataSource->Orden_compra->GetValue());
                $this->observaciones->SetValue($this->DataSource->observaciones->GetValue());
                $this->activa->SetValue($this->DataSource->activa->GetValue());
                $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                $this->Attributes->Show();
                $this->Data_id->Show();
                $this->Data_fecha_proceso->Show();
                $this->Data_Orden_compra->Show();
                $this->Data_observaciones->Show();
                $this->Data_activa->Show();
                $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                $Tpl->parse("Row", true);
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
        $this->ent_alm_general1_Insert->Show();
        $this->ent_alm_general1_TotalRecords->Show();
        $this->Header_id->Show();
        $this->Header_fecha_proceso->Show();
        $this->Header_Orden_compra->Show();
        $this->Header_observaciones->Show();
        $this->Header_activa->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @76-1CA5536E
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->fecha_proceso->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Orden_compra->Errors->ToString());
        $errors = ComposeStrings($errors, $this->observaciones->Errors->ToString());
        $errors = ComposeStrings($errors, $this->activa->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End ent_alm_general1 Class @76-FCB6E20C

class clsent_alm_general1DataSource extends clsDBConnection1 {  //ent_alm_general1DataSource Class @76-E5CF3E7F

//DataSource Variables @76-55078219
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $id;
    public $fecha_proceso;
    public $Orden_compra;
    public $observaciones;
    public $activa;
//End DataSource Variables

//DataSourceClass_Initialize Event @76-6F8816A4
    function clsent_alm_general1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid ent_alm_general1";
        $this->Initialize();
        $this->id = new clsField("id", ccsText, "");
        
        $this->fecha_proceso = new clsField("fecha_proceso", ccsDate, array("yyyy", "-", "mm", "-", "dd", " ", "HH", ":", "nn", ":", "ss"));
        
        $this->Orden_compra = new clsField("Orden_compra", ccsInteger, "");
        
        $this->observaciones = new clsField("observaciones", ccsText, "");
        
        $this->activa = new clsField("activa", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @76-97CA6FFA
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "id";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_fecha_proceso" => array("fecha_proceso", ""), 
            "Sorter_Orden_compra" => array("Orden_compra", ""), 
            "Sorter_observaciones" => array("observaciones", ""), 
            "Sorter_activa" => array("activa", "")));
    }
//End SetOrder Method

//Prepare Method @76-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @76-C956809C
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM ent_alm_general";
        $this->SQL = "SELECT id, fecha_proceso, Orden_compra, observaciones, activa \n\n" .
        "FROM ent_alm_general {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @76-977C80FE
    function SetValues()
    {
        $this->id->SetDBValue($this->f("id"));
        $this->fecha_proceso->SetDBValue(trim($this->f("fecha_proceso")));
        $this->Orden_compra->SetDBValue(trim($this->f("Orden_compra")));
        $this->observaciones->SetDBValue($this->f("observaciones"));
        $this->activa->SetDBValue($this->f("activa"));
    }
//End SetValues Method

} //End ent_alm_general1DataSource Class @76-FCB6E20C

class clsRecordent_alm_generalSearch { //ent_alm_generalSearch Class @109-AB7350DC

//Variables @109-9E315808

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

//Class_Initialize Event @109-21C8FF85
    function clsRecordent_alm_generalSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record ent_alm_generalSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "ent_alm_generalSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "ent_alm_generalPageSize", "ccsForm"));
            $this->ClearParameters->Page = "ent_alm_general.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->ent_alm_generalPageSize = new clsControl(ccsListBox, "ent_alm_generalPageSize", "ent_alm_generalPageSize", ccsText, "", CCGetRequestParam("ent_alm_generalPageSize", $Method, NULL), $this);
            $this->ent_alm_generalPageSize->DSType = dsListOfValues;
            $this->ent_alm_generalPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @109-ED4AD614
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->ent_alm_generalPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ent_alm_generalPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @109-2D35D81E
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->ent_alm_generalPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @109-6A639C47
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
        $Redirect = "ent_alm_general.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "ent_alm_general.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @109-34517E60
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
        $this->ent_alm_generalPageSize->Prepare();

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
            $Error = ComposeStrings($Error, $this->ent_alm_generalPageSize->Errors->ToString());
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
        $this->ent_alm_generalPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End ent_alm_generalSearch Class @109-FCB6E20C

//Initialize Page @1-018C381F
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
$TemplateFileName = "ent_alm_general.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-F099944A
include_once("./ent_alm_general_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-53E796E5
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
$ent_alm_general1 = new clsGrident_alm_general1("", $MainPage);
$ent_alm_generalSearch = new clsRecordent_alm_generalSearch("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Logout = new clsControl(ccsLink, "Logout", "Logout", ccsText, "", CCGetRequestParam("Logout", ccsGet, NULL), $MainPage);
$Logout->Page = "login.php";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "almacen_main.php";
$Link2 = new clsControl(ccsLink, "Link2", "Link2", ccsText, "", CCGetRequestParam("Link2", ccsGet, NULL), $MainPage);
$Link2->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link2->Page = "ent_alm_detalle.php";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->ent_alm_general1 = & $ent_alm_general1;
$MainPage->ent_alm_generalSearch = & $ent_alm_generalSearch;
$MainPage->Menu = & $Menu;
$MainPage->Logout = & $Logout;
$MainPage->Sidebar1 = & $Sidebar1;
$MainPage->Link1 = & $Link1;
$MainPage->Link2 = & $Link2;
$Content->AddComponent("ent_alm_general1", $ent_alm_general1);
$Content->AddComponent("ent_alm_generalSearch", $ent_alm_generalSearch);
$Menu->AddComponent("Logout", $Logout);
$Sidebar1->AddComponent("Link1", $Link1);
$Sidebar1->AddComponent("Link2", $Link2);
$Logout->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Logout->Parameters = CCAddParam($Logout->Parameters, "Logout", "True");
$ent_alm_general1->Initialize();

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

//Execute Components @1-ECFA790B
$MasterPage->Operations();
$ent_alm_generalSearch->Operation();
//End Execute Components

//Go to destination page @1-E37E66D7
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($ent_alm_general1);
    unset($ent_alm_generalSearch);
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

//Unload Page @1-864B9D46
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($ent_alm_general1);
unset($ent_alm_generalSearch);
unset($Tpl);
//End Unload Page


?>
