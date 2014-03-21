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

class clsGrident_alm_general1 { //ent_alm_general1 class @6-E28534C1

//Variables @6-730AA61D

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
    public $Sorter_fecha_proceso;
    public $Sorter_num_factura;
    public $Sorter_observaciones;
    public $Sorter_activa;
//End Variables

//Class_Initialize Event @6-0EEB2958
    function clsGrident_alm_general1($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "ent_alm_general1";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->IsAltRow = false;
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

        $this->Data_Detail = new clsPanel("Data_Detail", $this);
        $this->Detail = new clsControl(ccsLink, "Detail", "Detail", ccsText, "", CCGetRequestParam("Detail", ccsGet, NULL), $this);
        $this->Detail->Page = "ent_alm_general.php";
        $this->Data_id = new clsPanel("Data_id", $this);
        $this->id = new clsControl(ccsLabel, "id", "id", ccsInteger, "", CCGetRequestParam("id", ccsGet, NULL), $this);
        $this->Data_fecha_proceso = new clsPanel("Data_fecha_proceso", $this);
        $this->fecha_proceso = new clsControl(ccsLabel, "fecha_proceso", "fecha_proceso", ccsDate, $DefaultDateFormat, CCGetRequestParam("fecha_proceso", ccsGet, NULL), $this);
        $this->Data_num_factura = new clsPanel("Data_num_factura", $this);
        $this->num_factura = new clsControl(ccsLabel, "num_factura", "num_factura", ccsText, "", CCGetRequestParam("num_factura", ccsGet, NULL), $this);
        $this->Data_observaciones = new clsPanel("Data_observaciones", $this);
        $this->observaciones = new clsControl(ccsLabel, "observaciones", "observaciones", ccsText, "", CCGetRequestParam("observaciones", ccsGet, NULL), $this);
        $this->Data_activa = new clsPanel("Data_activa", $this);
        $this->activa = new clsControl(ccsLabel, "activa", "activa", ccsText, "", CCGetRequestParam("activa", ccsGet, NULL), $this);
        $this->Data_Alt_Detail = new clsPanel("Data_Alt_Detail", $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "ent_alm_general.php";
        $this->Data_Alt_id = new clsPanel("Data_Alt_id", $this);
        $this->Alt_id = new clsControl(ccsLabel, "Alt_id", "Alt_id", ccsInteger, "", CCGetRequestParam("Alt_id", ccsGet, NULL), $this);
        $this->Data_Alt_fecha_proceso = new clsPanel("Data_Alt_fecha_proceso", $this);
        $this->Alt_fecha_proceso = new clsControl(ccsLabel, "Alt_fecha_proceso", "Alt_fecha_proceso", ccsDate, $DefaultDateFormat, CCGetRequestParam("Alt_fecha_proceso", ccsGet, NULL), $this);
        $this->Data_Alt_num_factura = new clsPanel("Data_Alt_num_factura", $this);
        $this->Alt_num_factura = new clsControl(ccsLabel, "Alt_num_factura", "Alt_num_factura", ccsText, "", CCGetRequestParam("Alt_num_factura", ccsGet, NULL), $this);
        $this->Data_Alt_observaciones = new clsPanel("Data_Alt_observaciones", $this);
        $this->Alt_observaciones = new clsControl(ccsLabel, "Alt_observaciones", "Alt_observaciones", ccsText, "", CCGetRequestParam("Alt_observaciones", ccsGet, NULL), $this);
        $this->Data_Alt_activa = new clsPanel("Data_Alt_activa", $this);
        $this->Alt_activa = new clsControl(ccsLabel, "Alt_activa", "Alt_activa", ccsText, "", CCGetRequestParam("Alt_activa", ccsGet, NULL), $this);
        $this->ent_alm_general1_Insert = new clsControl(ccsLink, "ent_alm_general1_Insert", "ent_alm_general1_Insert", ccsText, "", CCGetRequestParam("ent_alm_general1_Insert", ccsGet, NULL), $this);
        $this->ent_alm_general1_Insert->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->ent_alm_general1_Insert->Page = "ent_alm_general.php";
        $this->ent_alm_general1_TotalRecords = new clsControl(ccsLabel, "ent_alm_general1_TotalRecords", "ent_alm_general1_TotalRecords", ccsText, "", CCGetRequestParam("ent_alm_general1_TotalRecords", ccsGet, NULL), $this);
        $this->Header_Detail = new clsPanel("Header_Detail", $this);
        $this->Header_id = new clsPanel("Header_id", $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Header_fecha_proceso = new clsPanel("Header_fecha_proceso", $this);
        $this->Sorter_fecha_proceso = new clsSorter($this->ComponentName, "Sorter_fecha_proceso", $FileName, $this);
        $this->Header_num_factura = new clsPanel("Header_num_factura", $this);
        $this->Sorter_num_factura = new clsSorter($this->ComponentName, "Sorter_num_factura", $FileName, $this);
        $this->Header_observaciones = new clsPanel("Header_observaciones", $this);
        $this->Sorter_observaciones = new clsSorter($this->ComponentName, "Sorter_observaciones", $FileName, $this);
        $this->Header_activa = new clsPanel("Header_activa", $this);
        $this->Sorter_activa = new clsSorter($this->ComponentName, "Sorter_activa", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->Header_id->AddComponent("Sorter_id", $this->Sorter_id);
        $this->Header_fecha_proceso->AddComponent("Sorter_fecha_proceso", $this->Sorter_fecha_proceso);
        $this->Header_num_factura->AddComponent("Sorter_num_factura", $this->Sorter_num_factura);
        $this->Header_observaciones->AddComponent("Sorter_observaciones", $this->Sorter_observaciones);
        $this->Header_activa->AddComponent("Sorter_activa", $this->Sorter_activa);
        $this->Data_Detail->AddComponent("Detail", $this->Detail);
        $this->Data_id->AddComponent("id", $this->id);
        $this->Data_fecha_proceso->AddComponent("fecha_proceso", $this->fecha_proceso);
        $this->Data_num_factura->AddComponent("num_factura", $this->num_factura);
        $this->Data_observaciones->AddComponent("observaciones", $this->observaciones);
        $this->Data_activa->AddComponent("activa", $this->activa);
        $this->Data_Alt_Detail->AddComponent("Alt_Detail", $this->Alt_Detail);
        $this->Data_Alt_id->AddComponent("Alt_id", $this->Alt_id);
        $this->Data_Alt_fecha_proceso->AddComponent("Alt_fecha_proceso", $this->Alt_fecha_proceso);
        $this->Data_Alt_num_factura->AddComponent("Alt_num_factura", $this->Alt_num_factura);
        $this->Data_Alt_observaciones->AddComponent("Alt_observaciones", $this->Alt_observaciones);
        $this->Data_Alt_activa->AddComponent("Alt_activa", $this->Alt_activa);
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

//Show Method @6-1BCB99F4
    function Show()
    {
        $Tpl = CCGetTemplate($this);
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
            $this->ControlsVisible["Data_fecha_proceso"] = $this->Data_fecha_proceso->Visible;
            $this->ControlsVisible["fecha_proceso"] = $this->fecha_proceso->Visible;
            $this->ControlsVisible["Data_num_factura"] = $this->Data_num_factura->Visible;
            $this->ControlsVisible["num_factura"] = $this->num_factura->Visible;
            $this->ControlsVisible["Data_observaciones"] = $this->Data_observaciones->Visible;
            $this->ControlsVisible["observaciones"] = $this->observaciones->Visible;
            $this->ControlsVisible["Data_activa"] = $this->Data_activa->Visible;
            $this->ControlsVisible["activa"] = $this->activa->Visible;
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
                    $this->fecha_proceso->SetValue($this->DataSource->fecha_proceso->GetValue());
                    $this->num_factura->SetValue($this->DataSource->num_factura->GetValue());
                    $this->observaciones->SetValue($this->DataSource->observaciones->GetValue());
                    $this->activa->SetValue($this->DataSource->activa->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Data_Detail->Show();
                    $this->Data_id->Show();
                    $this->Data_fecha_proceso->Show();
                    $this->Data_num_factura->Show();
                    $this->Data_observaciones->Show();
                    $this->Data_activa->Show();
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                    $Tpl->parse("Row", true);
                }
                else
                {
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/AltRow";
                    $this->Alt_Detail->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                    $this->Alt_Detail->Parameters = CCAddParam($this->Alt_Detail->Parameters, "id", $this->DataSource->f("id"));
                    $this->Alt_id->SetValue($this->DataSource->Alt_id->GetValue());
                    $this->Alt_fecha_proceso->SetValue($this->DataSource->Alt_fecha_proceso->GetValue());
                    $this->Alt_num_factura->SetValue($this->DataSource->Alt_num_factura->GetValue());
                    $this->Alt_observaciones->SetValue($this->DataSource->Alt_observaciones->GetValue());
                    $this->Alt_activa->SetValue($this->DataSource->Alt_activa->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Data_Alt_Detail->Show();
                    $this->Data_Alt_id->Show();
                    $this->Data_Alt_fecha_proceso->Show();
                    $this->Data_Alt_num_factura->Show();
                    $this->Data_Alt_observaciones->Show();
                    $this->Data_Alt_activa->Show();
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
        $this->ent_alm_general1_Insert->Show();
        $this->ent_alm_general1_TotalRecords->Show();
        $this->Header_Detail->Show();
        $this->Header_id->Show();
        $this->Header_fecha_proceso->Show();
        $this->Header_num_factura->Show();
        $this->Header_observaciones->Show();
        $this->Header_activa->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @6-70148850
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->fecha_proceso->Errors->ToString());
        $errors = ComposeStrings($errors, $this->num_factura->Errors->ToString());
        $errors = ComposeStrings($errors, $this->observaciones->Errors->ToString());
        $errors = ComposeStrings($errors, $this->activa->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_fecha_proceso->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_num_factura->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_observaciones->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_activa->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End ent_alm_general1 Class @6-FCB6E20C

class clsent_alm_general1DataSource extends clsDBConnection1 {  //ent_alm_general1DataSource Class @6-E5CF3E7F

//DataSource Variables @6-C42B1E8F
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
    public $num_factura;
    public $observaciones;
    public $activa;
    public $Alt_id;
    public $Alt_fecha_proceso;
    public $Alt_num_factura;
    public $Alt_observaciones;
    public $Alt_activa;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-F2E48352
    function clsent_alm_general1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid ent_alm_general1";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->fecha_proceso = new clsField("fecha_proceso", ccsDate, $this->DateFormat);
        
        $this->num_factura = new clsField("num_factura", ccsText, "");
        
        $this->observaciones = new clsField("observaciones", ccsText, "");
        
        $this->activa = new clsField("activa", ccsText, "");
        
        $this->Alt_id = new clsField("Alt_id", ccsInteger, "");
        
        $this->Alt_fecha_proceso = new clsField("Alt_fecha_proceso", ccsDate, $this->DateFormat);
        
        $this->Alt_num_factura = new clsField("Alt_num_factura", ccsText, "");
        
        $this->Alt_observaciones = new clsField("Alt_observaciones", ccsText, "");
        
        $this->Alt_activa = new clsField("Alt_activa", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @6-405A515C
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_fecha_proceso" => array("fecha_proceso", ""), 
            "Sorter_num_factura" => array("num_factura", ""), 
            "Sorter_observaciones" => array("observaciones", ""), 
            "Sorter_activa" => array("activa", "")));
    }
//End SetOrder Method

//Prepare Method @6-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @6-8DD33B0C
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM ent_alm_general";
        $this->SQL = "SELECT id, fecha_proceso, num_factura, observaciones, activa \n\n" .
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

//SetValues Method @6-0FCB2755
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->fecha_proceso->SetDBValue(trim($this->f("fecha_proceso")));
        $this->num_factura->SetDBValue($this->f("num_factura"));
        $this->observaciones->SetDBValue($this->f("observaciones"));
        $this->activa->SetDBValue($this->f("activa"));
        $this->Alt_id->SetDBValue(trim($this->f("id")));
        $this->Alt_fecha_proceso->SetDBValue(trim($this->f("fecha_proceso")));
        $this->Alt_num_factura->SetDBValue($this->f("num_factura"));
        $this->Alt_observaciones->SetDBValue($this->f("observaciones"));
        $this->Alt_activa->SetDBValue($this->f("activa"));
    }
//End SetValues Method

} //End ent_alm_general1DataSource Class @6-FCB6E20C

class clsRecordent_alm_generalSearch { //ent_alm_generalSearch Class @54-AB7350DC

//Variables @54-9E315808

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

//Class_Initialize Event @54-21C8FF85
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

//Validate Method @54-ED4AD614
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

//CheckErrors Method @54-2D35D81E
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

//Operation Method @54-6A639C47
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

//Show Method @54-80826A38
    function Show()
    {
        global $CCSUseAmp;
        $Tpl = CCGetTemplate($this);
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

} //End ent_alm_generalSearch Class @54-FCB6E20C

class clsRecordent_alm_general2 { //ent_alm_general2 Class @61-E7BB016C

//Variables @61-9E315808

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

//Class_Initialize Event @61-001A8AF0
    function clsRecordent_alm_general2($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record ent_alm_general2/Error";
        $this->DataSource = new clsent_alm_general2DataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "ent_alm_general2";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->EditMode = ($FormMethod == "Edit");
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->Button_Insert = new clsButton("Button_Insert", $Method, $this);
            $this->Button_Cancel = new clsButton("Button_Cancel", $Method, $this);
            $this->fecha_proceso = new clsControl(ccsTextBox, "fecha_proceso", $CCSLocales->GetText("fecha_proceso"), ccsDate, array("ShortDate"), CCGetRequestParam("fecha_proceso", $Method, NULL), $this);
            $this->num_factura = new clsControl(ccsTextBox, "num_factura", $CCSLocales->GetText("num_factura"), ccsText, "", CCGetRequestParam("num_factura", $Method, NULL), $this);
            $this->observaciones = new clsControl(ccsTextBox, "observaciones", $CCSLocales->GetText("observaciones"), ccsText, "", CCGetRequestParam("observaciones", $Method, NULL), $this);
            $this->activa = new clsControl(ccsTextBox, "activa", $CCSLocales->GetText("activa"), ccsText, "", CCGetRequestParam("activa", $Method, NULL), $this);
        }
    }
//End Class_Initialize Event

//Initialize Method @61-2832F4DC
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlid"] = CCGetFromGet("id", NULL);
    }
//End Initialize Method

//Validate Method @61-44ED7346
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->fecha_proceso->Validate() && $Validation);
        $Validation = ($this->num_factura->Validate() && $Validation);
        $Validation = ($this->observaciones->Validate() && $Validation);
        $Validation = ($this->activa->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->fecha_proceso->Errors->Count() == 0);
        $Validation =  $Validation && ($this->num_factura->Errors->Count() == 0);
        $Validation =  $Validation && ($this->observaciones->Errors->Count() == 0);
        $Validation =  $Validation && ($this->activa->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @61-CAFE223C
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->fecha_proceso->Errors->Count());
        $errors = ($errors || $this->num_factura->Errors->Count());
        $errors = ($errors || $this->observaciones->Errors->Count());
        $errors = ($errors || $this->activa->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @61-DEFDCF33
    function Operation()
    {
        if(!$this->Visible)
            return;

        global $Redirect;
        global $FileName;

        $this->DataSource->Prepare();
        if(!$this->FormSubmitted) {
            $this->EditMode = $this->DataSource->AllParametersSet;
            return;
        }

        if($this->FormSubmitted) {
            $this->PressedButton = "Button_Insert";
            if($this->Button_Insert->Pressed) {
                $this->PressedButton = "Button_Insert";
            } else if($this->Button_Cancel->Pressed) {
                $this->PressedButton = "Button_Cancel";
            }
        }
        $Redirect = $FileName . "?" . CCGetQueryString("QueryString", array("ccsForm"));
        if($this->PressedButton == "Button_Cancel") {
            if(!CCGetEvent($this->Button_Cancel->CCSEvents, "OnClick", $this->Button_Cancel)) {
                $Redirect = "";
            }
        } else if($this->Validate()) {
            if($this->PressedButton == "Button_Insert") {
                if(!CCGetEvent($this->Button_Insert->CCSEvents, "OnClick", $this->Button_Insert) || !$this->InsertRow()) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
        if ($Redirect)
            $this->DataSource->close();
    }
//End Operation Method

//InsertRow Method @61-DFAA7CFB
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->fecha_proceso->SetValue($this->fecha_proceso->GetValue(true));
        $this->DataSource->num_factura->SetValue($this->num_factura->GetValue(true));
        $this->DataSource->observaciones->SetValue($this->observaciones->GetValue(true));
        $this->DataSource->activa->SetValue($this->activa->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//Show Method @61-B4D24763
    function Show()
    {
        global $CCSUseAmp;
        $Tpl = CCGetTemplate($this);
        global $FileName;
        global $CCSLocales;
        $Error = "";

        if(!$this->Visible)
            return;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;
        if($this->EditMode) {
            if($this->DataSource->Errors->Count()){
                $this->Errors->AddErrors($this->DataSource->Errors);
                $this->DataSource->Errors->clear();
            }
            $this->DataSource->Open();
            if($this->DataSource->Errors->Count() == 0 && $this->DataSource->next_record()) {
                $this->DataSource->SetValues();
                if(!$this->FormSubmitted){
                    $this->fecha_proceso->SetValue($this->DataSource->fecha_proceso->GetValue());
                    $this->num_factura->SetValue($this->DataSource->num_factura->GetValue());
                    $this->observaciones->SetValue($this->DataSource->observaciones->GetValue());
                    $this->activa->SetValue($this->DataSource->activa->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->fecha_proceso->Errors->ToString());
            $Error = ComposeStrings($Error, $this->num_factura->Errors->ToString());
            $Error = ComposeStrings($Error, $this->observaciones->Errors->ToString());
            $Error = ComposeStrings($Error, $this->activa->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Errors->ToString());
            $Error = ComposeStrings($Error, $this->DataSource->Errors->ToString());
            $Tpl->SetVar("Error", $Error);
            $Tpl->Parse("Error", false);
        }
        $CCSForm = $this->EditMode ? $this->ComponentName . ":" . "Edit" : $this->ComponentName;
        $this->HTMLFormAction = $FileName . "?" . CCAddParam(CCGetQueryString("QueryString", ""), "ccsForm", $CCSForm);
        $Tpl->SetVar("Action", !$CCSUseAmp ? $this->HTMLFormAction : str_replace("&", "&amp;", $this->HTMLFormAction));
        $Tpl->SetVar("HTMLFormName", $this->ComponentName);
        $Tpl->SetVar("HTMLFormEnctype", $this->FormEnctype);
        $this->Button_Insert->Visible = !$this->EditMode && $this->InsertAllowed;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        $this->Attributes->Show();
        if(!$this->Visible) {
            $Tpl->block_path = $ParentPath;
            return;
        }

        $this->Button_Insert->Show();
        $this->Button_Cancel->Show();
        $this->fecha_proceso->Show();
        $this->num_factura->Show();
        $this->observaciones->Show();
        $this->activa->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End ent_alm_general2 Class @61-FCB6E20C

class clsent_alm_general2DataSource extends clsDBConnection1 {  //ent_alm_general2DataSource Class @61-6E1C0066

//DataSource Variables @61-8E8CB52F
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $InsertParameters;
    public $wp;
    public $AllParametersSet;

    public $InsertFields = array();

    // Datasource fields
    public $fecha_proceso;
    public $num_factura;
    public $observaciones;
    public $activa;
//End DataSource Variables

//DataSourceClass_Initialize Event @61-D2251890
    function clsent_alm_general2DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record ent_alm_general2/Error";
        $this->Initialize();
        $this->fecha_proceso = new clsField("fecha_proceso", ccsDate, $this->DateFormat);
        
        $this->num_factura = new clsField("num_factura", ccsText, "");
        
        $this->observaciones = new clsField("observaciones", ccsText, "");
        
        $this->activa = new clsField("activa", ccsText, "");
        

        $this->InsertFields["fecha_proceso"] = array("Name" => "fecha_proceso", "Value" => "", "DataType" => ccsDate, "OmitIfEmpty" => 1);
        $this->InsertFields["num_factura"] = array("Name" => "num_factura", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["observaciones"] = array("Name" => "observaciones", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["activa"] = array("Name" => "activa", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//Prepare Method @61-35B33087
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urlid", ccsInteger, "", "", $this->Parameters["urlid"], "", false);
        $this->AllParametersSet = $this->wp->AllParamsSet();
        $this->wp->Criterion[1] = $this->wp->Operation(opEqual, "id", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsInteger),false);
        $this->Where = 
             $this->wp->Criterion[1];
    }
//End Prepare Method

//Open Method @61-E10C458D
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM ent_alm_general {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @61-DAE4581D
    function SetValues()
    {
        $this->fecha_proceso->SetDBValue(trim($this->f("fecha_proceso")));
        $this->num_factura->SetDBValue($this->f("num_factura"));
        $this->observaciones->SetDBValue($this->f("observaciones"));
        $this->activa->SetDBValue($this->f("activa"));
    }
//End SetValues Method

//Insert Method @61-93F7A85C
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["fecha_proceso"]["Value"] = $this->fecha_proceso->GetDBValue(true);
        $this->InsertFields["num_factura"]["Value"] = $this->num_factura->GetDBValue(true);
        $this->InsertFields["observaciones"]["Value"] = $this->observaciones->GetDBValue(true);
        $this->InsertFields["activa"]["Value"] = $this->activa->GetDBValue(true);
        $this->SQL = CCBuildInsert("ent_alm_general", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

} //End ent_alm_general2DataSource Class @61-FCB6E20C

//Initialize Page @1-665D1330
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
$PathToRootOpt = "";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|js/jquery/ui/jquery.ui.core.js|js/jquery/ui/jquery.ui.widget.js|js/jquery/ui/jquery.ui.datepicker.js|js/jquery/datepicker/ccs-date-timepicker.js|";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-F099944A
include_once("./ent_alm_general_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-EB700A6B
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
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$Content = new clsPanel("Content", $MainPage);
$Content->PlaceholderName = "Content";
$ent_alm_general1 = new clsGrident_alm_general1("", $MainPage);
$ent_alm_generalSearch = new clsRecordent_alm_generalSearch("", $MainPage);
$ent_alm_general2 = new clsRecordent_alm_general2("", $MainPage);
$MainPage->Head = & $Head;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
$MainPage->Content = & $Content;
$MainPage->ent_alm_general1 = & $ent_alm_general1;
$MainPage->ent_alm_generalSearch = & $ent_alm_generalSearch;
$MainPage->ent_alm_general2 = & $ent_alm_general2;
$Content->AddComponent("ent_alm_general1", $ent_alm_general1);
$Content->AddComponent("ent_alm_generalSearch", $ent_alm_generalSearch);
$Content->AddComponent("ent_alm_general2", $ent_alm_general2);
$ent_alm_general1->Initialize();
$ent_alm_general2->Initialize();
$ScriptIncludes = "";
$SList = explode("|", $Scripts);
foreach ($SList as $Script) {
    if ($Script != "") $ScriptIncludes = $ScriptIncludes . "<script src=\"" . $PathToRoot . $Script . "\" type=\"text/javascript\"></script>\n";
}
$Attributes->SetValue("scriptIncludes", $ScriptIncludes);

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

//Execute Components @1-10DCE743
$MasterPage->Operations();
$ent_alm_general2->Operation();
$ent_alm_generalSearch->Operation();
//End Execute Components

//Go to destination page @1-11A0F0F1
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($ent_alm_general1);
    unset($ent_alm_generalSearch);
    unset($ent_alm_general2);
    unset($Tpl);
    exit;
}
//End Go to destination page

//Show Page @1-03CA695E
$Head->Show();
$Menu->Show();
$Sidebar1->Show();
$Content->Show();
$MasterPage->Tpl->SetVar("Head", $Tpl->GetVar("Panel Head"));
$MasterPage->Tpl->SetVar("Menu", $Tpl->GetVar("Panel Menu"));
$MasterPage->Tpl->SetVar("Sidebar1", $Tpl->GetVar("Panel Sidebar1"));
$MasterPage->Tpl->SetVar("Content", $Tpl->GetVar("Panel Content"));
$MasterPage->Show();
if (!isset($main_block)) $main_block = $MasterPage->HTML;
$main_block = CCConvertEncoding($main_block, $FileEncoding, $CCSLocales->GetFormatInfo("Encoding"));
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

//Unload Page @1-E764B732
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($ent_alm_general1);
unset($ent_alm_generalSearch);
unset($ent_alm_general2);
unset($Tpl);
//End Unload Page


?>
