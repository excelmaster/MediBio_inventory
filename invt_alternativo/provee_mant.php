<?php
//Include Common Files @1-E39167FA
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "provee_mant.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsGridproveedores { //proveedores class @6-73383A95

//Variables @6-26A4E3EE

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
    public $Sorter_razon_social;
    public $Sorter_nombre;
    public $Sorter_nit;
//End Variables

//Class_Initialize Event @6-836C7E71
    function clsGridproveedores($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "proveedores";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->IsAltRow = false;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid proveedores";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsproveedoresDataSource($this);
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
        $this->SorterName = CCGetParam("proveedoresOrder", "");
        $this->SorterDirection = CCGetParam("proveedoresDir", "");

        $this->Detail = new clsControl(ccsLink, "Detail", "Detail", ccsText, "", CCGetRequestParam("Detail", ccsGet, NULL), $this);
        $this->Detail->Page = "crud_provee.php";
        $this->id = new clsControl(ccsLabel, "id", "id", ccsInteger, "", CCGetRequestParam("id", ccsGet, NULL), $this);
        $this->razon_social = new clsControl(ccsLabel, "razon_social", "razon_social", ccsText, "", CCGetRequestParam("razon_social", ccsGet, NULL), $this);
        $this->nombre = new clsControl(ccsLabel, "nombre", "nombre", ccsText, "", CCGetRequestParam("nombre", ccsGet, NULL), $this);
        $this->nit = new clsControl(ccsLabel, "nit", "nit", ccsText, "", CCGetRequestParam("nit", ccsGet, NULL), $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "crud_provee.php";
        $this->Alt_id = new clsControl(ccsLabel, "Alt_id", "Alt_id", ccsInteger, "", CCGetRequestParam("Alt_id", ccsGet, NULL), $this);
        $this->Alt_razon_social = new clsControl(ccsLabel, "Alt_razon_social", "Alt_razon_social", ccsText, "", CCGetRequestParam("Alt_razon_social", ccsGet, NULL), $this);
        $this->Alt_nombre = new clsControl(ccsLabel, "Alt_nombre", "Alt_nombre", ccsText, "", CCGetRequestParam("Alt_nombre", ccsGet, NULL), $this);
        $this->Alt_nit = new clsControl(ccsLabel, "Alt_nit", "Alt_nit", ccsText, "", CCGetRequestParam("Alt_nit", ccsGet, NULL), $this);
        $this->proveedores_Insert = new clsControl(ccsLink, "proveedores_Insert", "proveedores_Insert", ccsText, "", CCGetRequestParam("proveedores_Insert", ccsGet, NULL), $this);
        $this->proveedores_Insert->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->proveedores_Insert->Page = "crud_provee.php";
        $this->proveedores_TotalRecords = new clsControl(ccsLabel, "proveedores_TotalRecords", "proveedores_TotalRecords", ccsText, "", CCGetRequestParam("proveedores_TotalRecords", ccsGet, NULL), $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Sorter_razon_social = new clsSorter($this->ComponentName, "Sorter_razon_social", $FileName, $this);
        $this->Sorter_nombre = new clsSorter($this->ComponentName, "Sorter_nombre", $FileName, $this);
        $this->Sorter_nit = new clsSorter($this->ComponentName, "Sorter_nit", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
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

//Show Method @6-099E15F3
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
            $this->ControlsVisible["Detail"] = $this->Detail->Visible;
            $this->ControlsVisible["id"] = $this->id->Visible;
            $this->ControlsVisible["razon_social"] = $this->razon_social->Visible;
            $this->ControlsVisible["nombre"] = $this->nombre->Visible;
            $this->ControlsVisible["nit"] = $this->nit->Visible;
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
                    $this->razon_social->SetValue($this->DataSource->razon_social->GetValue());
                    $this->nombre->SetValue($this->DataSource->nombre->GetValue());
                    $this->nit->SetValue($this->DataSource->nit->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Detail->Show();
                    $this->id->Show();
                    $this->razon_social->Show();
                    $this->nombre->Show();
                    $this->nit->Show();
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                    $Tpl->parse("Row", true);
                }
                else
                {
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/AltRow";
                    $this->Alt_Detail->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                    $this->Alt_Detail->Parameters = CCAddParam($this->Alt_Detail->Parameters, "id", $this->DataSource->f("id"));
                    $this->Alt_id->SetValue($this->DataSource->Alt_id->GetValue());
                    $this->Alt_razon_social->SetValue($this->DataSource->Alt_razon_social->GetValue());
                    $this->Alt_nombre->SetValue($this->DataSource->Alt_nombre->GetValue());
                    $this->Alt_nit->SetValue($this->DataSource->Alt_nit->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Alt_Detail->Show();
                    $this->Alt_id->Show();
                    $this->Alt_razon_social->Show();
                    $this->Alt_nombre->Show();
                    $this->Alt_nit->Show();
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
        $this->proveedores_Insert->Show();
        $this->proveedores_TotalRecords->Show();
        $this->Sorter_id->Show();
        $this->Sorter_razon_social->Show();
        $this->Sorter_nombre->Show();
        $this->Sorter_nit->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @6-3B44E084
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->razon_social->Errors->ToString());
        $errors = ComposeStrings($errors, $this->nombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->nit->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_razon_social->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_nombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_nit->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End proveedores Class @6-FCB6E20C

class clsproveedoresDataSource extends clsDBConnection1 {  //proveedoresDataSource Class @6-BE3F4A6C

//DataSource Variables @6-089B56C9
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $id;
    public $razon_social;
    public $nombre;
    public $nit;
    public $Alt_id;
    public $Alt_razon_social;
    public $Alt_nombre;
    public $Alt_nit;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-E65D3E41
    function clsproveedoresDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid proveedores";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->razon_social = new clsField("razon_social", ccsText, "");
        
        $this->nombre = new clsField("nombre", ccsText, "");
        
        $this->nit = new clsField("nit", ccsText, "");
        
        $this->Alt_id = new clsField("Alt_id", ccsInteger, "");
        
        $this->Alt_razon_social = new clsField("Alt_razon_social", ccsText, "");
        
        $this->Alt_nombre = new clsField("Alt_nombre", ccsText, "");
        
        $this->Alt_nit = new clsField("Alt_nit", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @6-462525ED
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "razon_social";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_razon_social" => array("razon_social", ""), 
            "Sorter_nombre" => array("nombre", ""), 
            "Sorter_nit" => array("nit", "")));
    }
//End SetOrder Method

//Prepare Method @6-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @6-05AD74C8
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM proveedores";
        $this->SQL = "SELECT id, razon_social, nombre, nit \n\n" .
        "FROM proveedores {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @6-36BCA4FC
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->razon_social->SetDBValue($this->f("razon_social"));
        $this->nombre->SetDBValue($this->f("nombre"));
        $this->nit->SetDBValue($this->f("nit"));
        $this->Alt_id->SetDBValue(trim($this->f("id")));
        $this->Alt_razon_social->SetDBValue($this->f("razon_social"));
        $this->Alt_nombre->SetDBValue($this->f("nombre"));
        $this->Alt_nit->SetDBValue($this->f("nit"));
    }
//End SetValues Method

} //End proveedoresDataSource Class @6-FCB6E20C

class clsRecordproveedoresSearch { //proveedoresSearch Class @32-3F993C90

//Variables @32-9E315808

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

//Class_Initialize Event @32-C8342B0A
    function clsRecordproveedoresSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record proveedoresSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "proveedoresSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "proveedoresOrder", "proveedoresDir", "proveedoresPageSize", "ccsForm"));
            $this->ClearParameters->Page = "provee_mant.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->proveedoresOrder = new clsControl(ccsListBox, "proveedoresOrder", "proveedoresOrder", ccsText, "", CCGetRequestParam("proveedoresOrder", $Method, NULL), $this);
            $this->proveedoresOrder->DSType = dsListOfValues;
            $this->proveedoresOrder->Values = array(array("", $CCSLocales->GetText("CCS_SelectField")), array("Sorter_id", $CCSLocales->GetText("id")), array("Sorter_razon_social", $CCSLocales->GetText("razon_social")), array("Sorter_nombre", $CCSLocales->GetText("nombre")), array("Sorter_nit", $CCSLocales->GetText("nit")));
            $this->proveedoresDir = new clsControl(ccsListBox, "proveedoresDir", "proveedoresDir", ccsText, "", CCGetRequestParam("proveedoresDir", $Method, NULL), $this);
            $this->proveedoresDir->DSType = dsListOfValues;
            $this->proveedoresDir->Values = array(array("", $CCSLocales->GetText("CCS_SelectOrder")), array("ASC", $CCSLocales->GetText("CCS_ASC")), array("DESC", $CCSLocales->GetText("CCS_DESC")));
            $this->proveedoresPageSize = new clsControl(ccsListBox, "proveedoresPageSize", "proveedoresPageSize", ccsText, "", CCGetRequestParam("proveedoresPageSize", $Method, NULL), $this);
            $this->proveedoresPageSize->DSType = dsListOfValues;
            $this->proveedoresPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @32-C01700C6
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->proveedoresOrder->Validate() && $Validation);
        $Validation = ($this->proveedoresDir->Validate() && $Validation);
        $Validation = ($this->proveedoresPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->proveedoresOrder->Errors->Count() == 0);
        $Validation =  $Validation && ($this->proveedoresDir->Errors->Count() == 0);
        $Validation =  $Validation && ($this->proveedoresPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @32-F436FEBC
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->proveedoresOrder->Errors->Count());
        $errors = ($errors || $this->proveedoresDir->Errors->Count());
        $errors = ($errors || $this->proveedoresPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @32-C7735477
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
        $Redirect = "provee_mant.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "provee_mant.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @32-13E07DC8
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
        $this->proveedoresOrder->Prepare();
        $this->proveedoresDir->Prepare();
        $this->proveedoresPageSize->Prepare();

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
            $Error = ComposeStrings($Error, $this->proveedoresOrder->Errors->ToString());
            $Error = ComposeStrings($Error, $this->proveedoresDir->Errors->ToString());
            $Error = ComposeStrings($Error, $this->proveedoresPageSize->Errors->ToString());
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
        $this->proveedoresOrder->Show();
        $this->proveedoresDir->Show();
        $this->proveedoresPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End proveedoresSearch Class @32-FCB6E20C

//Initialize Page @1-CC650D1A
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
$TemplateFileName = "provee_mant.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-C84FF3AF
include_once("./provee_mant_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-F4AC1337
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
$proveedores = new clsGridproveedores("", $MainPage);
$proveedoresSearch = new clsRecordproveedoresSearch("", $MainPage);
$Panel1 = new clsPanel("Panel1", $MainPage);
$Label1 = new clsControl(ccsLabel, "Label1", "Label1", ccsText, "", CCGetRequestParam("Label1", ccsGet, NULL), $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "admin.php";
$Link2 = new clsControl(ccsLink, "Link2", "Link2", ccsText, "", CCGetRequestParam("Link2", ccsGet, NULL), $MainPage);
$Link2->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link2->Page = "rpt_provee.php";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->proveedores = & $proveedores;
$MainPage->proveedoresSearch = & $proveedoresSearch;
$MainPage->Panel1 = & $Panel1;
$MainPage->Label1 = & $Label1;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
$MainPage->Link1 = & $Link1;
$MainPage->Link2 = & $Link2;
$Content->AddComponent("proveedores", $proveedores);
$Content->AddComponent("proveedoresSearch", $proveedoresSearch);
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("Label1", $Label1);
$Sidebar1->AddComponent("Link1", $Link1);
$Sidebar1->AddComponent("Link2", $Link2);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("MANTENIMIENTO DE PROVEEDORES");
$proveedores->Initialize();

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

//Execute Components @1-C56530BB
$MasterPage->Operations();
$proveedoresSearch->Operation();
//End Execute Components

//Go to destination page @1-7ECBF775
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($proveedores);
    unset($proveedoresSearch);
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

//Unload Page @1-CD1319E3
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($proveedores);
unset($proveedoresSearch);
unset($Tpl);
//End Unload Page


?>
