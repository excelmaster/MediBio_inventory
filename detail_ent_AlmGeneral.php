<?php
//Include Common Files @1-1DFBE302
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "detail_ent_AlmGeneral.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsEditableGriddetail_ent_alm_general1 { //detail_ent_alm_general1 Class @46-712A751B

//Variables @46-BA09749C

    // Public variables
    public $ComponentType = "EditableGrid";
    public $ComponentName;
    public $HTMLFormAction;
    public $PressedButton;
    public $Errors;
    public $ErrorBlock;
    public $FormSubmitted;
    public $FormParameters;
    public $FormState;
    public $FormEnctype;
    public $CachedColumns;
    public $TotalRows;
    public $UpdatedRows;
    public $EmptyRows;
    public $Visible;
    public $RowsErrors;
    public $ds;
    public $DataSource;
    public $PageSize;
    public $IsEmpty;
    public $SorterName = "";
    public $SorterDirection = "";
    public $PageNumber;
    public $ControlsVisible = array();

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";

    public $InsertAllowed = false;
    public $UpdateAllowed = false;
    public $DeleteAllowed = false;
    public $ReadAllowed   = false;
    public $EditMode;
    public $ValidatingControls;
    public $Controls;
    public $ControlsErrors;
    public $RowNumber;
    public $Attributes;

    // Class variables
    public $Sorter_id;
    public $Sorter_id_producto;
    public $Sorter_cantidad;
    public $Sorter_observacion;
//End Variables

//Class_Initialize Event @46-EDB21578
    function clsEditableGriddetail_ent_alm_general1($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "EditableGrid detail_ent_alm_general1/Error";
        $this->ControlsErrors = array();
        $this->ComponentName = "detail_ent_alm_general1";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->CachedColumns["id"][0] = "id";
        $this->DataSource = new clsdetail_ent_alm_general1DataSource($this);
        $this->ds = & $this->DataSource;
        $this->PageSize = CCGetParam($this->ComponentName . "PageSize", "");
        if(!is_numeric($this->PageSize) || !strlen($this->PageSize))
            $this->PageSize = 20;
        else
            $this->PageSize = intval($this->PageSize);
        if ($this->PageSize > 100)
            $this->PageSize = 100;
        if($this->PageSize == 0)
            $this->Errors->addError("<p>Form: EditableGrid " . $this->ComponentName . "<BR>Error: (CCS06) Invalid page size.</p>");
        $this->PageNumber = intval(CCGetParam($this->ComponentName . "Page", 1));
        if ($this->PageNumber <= 0) $this->PageNumber = 1;

        $this->EmptyRows = 3;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->ReadAllowed = true;
        if(!$this->Visible) return;

        $CCSForm = CCGetFromGet("ccsForm", "");
        $this->FormEnctype = "application/x-www-form-urlencoded";
        $this->FormSubmitted = ($CCSForm == $this->ComponentName);
        if($this->FormSubmitted) {
            $this->FormState = CCGetFromPost("FormState", "");
            $this->SetFormState($this->FormState);
        } else {
            $this->FormState = "";
        }
        $Method = $this->FormSubmitted ? ccsPost : ccsGet;

        $this->SorterName = CCGetParam("detail_ent_alm_general1Order", "");
        $this->SorterDirection = CCGetParam("detail_ent_alm_general1Dir", "");

        $this->detail_ent_alm_general1_TotalRecords = new clsControl(ccsLabel, "detail_ent_alm_general1_TotalRecords", "detail_ent_alm_general1_TotalRecords", ccsText, "", NULL, $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Sorter_id_producto = new clsSorter($this->ComponentName, "Sorter_id_producto", $FileName, $this);
        $this->Sorter_cantidad = new clsSorter($this->ComponentName, "Sorter_cantidad", $FileName, $this);
        $this->Sorter_observacion = new clsSorter($this->ComponentName, "Sorter_observacion", $FileName, $this);
        $this->id = new clsControl(ccsLabel, "id", "id", ccsInteger, "", NULL, $this);
        $this->id_producto = new clsControl(ccsTextBox, "id_producto", $CCSLocales->GetText("id_producto"), ccsInteger, "", NULL, $this);
        $this->cantidad = new clsControl(ccsTextBox, "cantidad", $CCSLocales->GetText("cantidad"), ccsInteger, "", NULL, $this);
        $this->observacion = new clsControl(ccsTextBox, "observacion", $CCSLocales->GetText("observacion"), ccsInteger, "", NULL, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpSimple, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->Button_Submit = new clsButton("Button_Submit", $Method, $this);
    }
//End Class_Initialize Event

//Initialize Method @46-D5D3A64D
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);

        $this->DataSource->Parameters["urlid_ent_alm_general"] = CCGetFromGet("id_ent_alm_general", NULL);
    }
//End Initialize Method

//GetFormParameters Method @46-4E73C7C8
    function GetFormParameters()
    {
        for($RowNumber = 1; $RowNumber <= $this->TotalRows; $RowNumber++)
        {
            $this->FormParameters["id_producto"][$RowNumber] = CCGetFromPost("id_producto_" . $RowNumber, NULL);
            $this->FormParameters["cantidad"][$RowNumber] = CCGetFromPost("cantidad_" . $RowNumber, NULL);
            $this->FormParameters["observacion"][$RowNumber] = CCGetFromPost("observacion_" . $RowNumber, NULL);
        }
    }
//End GetFormParameters Method

//Validate Method @46-D21D72CD
    function Validate()
    {
        $Validation = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);

        for($this->RowNumber = 1; $this->RowNumber <= $this->TotalRows; $this->RowNumber++)
        {
            $this->DataSource->CachedColumns["id"] = $this->CachedColumns["id"][$this->RowNumber];
            $this->DataSource->CurrentRow = $this->RowNumber;
            $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
            $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
            $this->observacion->SetText($this->FormParameters["observacion"][$this->RowNumber], $this->RowNumber);
            if ($this->UpdatedRows >= $this->RowNumber) {
                $Validation = ($this->ValidateRow($this->RowNumber) && $Validation);
            }
            else if($this->CheckInsert())
            {
                $Validation = ($this->ValidateRow() && $Validation);
            }
        }
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//ValidateRow Method @46-D9C36FAC
    function ValidateRow()
    {
        global $CCSLocales;
        $this->id_producto->Validate();
        $this->cantidad->Validate();
        $this->observacion->Validate();
        $this->RowErrors = new clsErrors();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidateRow", $this);
        $errors = "";
        $errors = ComposeStrings($errors, $this->id_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->cantidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->observacion->Errors->ToString());
        $this->id_producto->Errors->Clear();
        $this->cantidad->Errors->Clear();
        $this->observacion->Errors->Clear();
        $errors = ComposeStrings($errors, $this->RowErrors->ToString());
        $this->RowsErrors[$this->RowNumber] = $errors;
        return $errors != "" ? 0 : 1;
    }
//End ValidateRow Method

//CheckInsert Method @46-0034AC85
    function CheckInsert()
    {
        $filed = false;
        $filed = ($filed || (is_array($this->FormParameters["id_producto"][$this->RowNumber]) && count($this->FormParameters["id_producto"][$this->RowNumber])) || strlen($this->FormParameters["id_producto"][$this->RowNumber]));
        $filed = ($filed || (is_array($this->FormParameters["cantidad"][$this->RowNumber]) && count($this->FormParameters["cantidad"][$this->RowNumber])) || strlen($this->FormParameters["cantidad"][$this->RowNumber]));
        $filed = ($filed || (is_array($this->FormParameters["observacion"][$this->RowNumber]) && count($this->FormParameters["observacion"][$this->RowNumber])) || strlen($this->FormParameters["observacion"][$this->RowNumber]));
        return $filed;
    }
//End CheckInsert Method

//CheckErrors Method @46-F5A3B433
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @46-909F269B
    function Operation()
    {
        if(!$this->Visible)
            return;

        global $Redirect;
        global $FileName;

        $this->DataSource->Prepare();
        if(!$this->FormSubmitted)
            return;

        $this->GetFormParameters();
        $this->PressedButton = "Button_Submit";
        if($this->Button_Submit->Pressed) {
            $this->PressedButton = "Button_Submit";
        }

        $Redirect = $FileName . "?" . CCGetQueryString("QueryString", array("ccsForm"));
        if($this->PressedButton == "Button_Submit") {
            if(!CCGetEvent($this->Button_Submit->CCSEvents, "OnClick", $this->Button_Submit) || !$this->UpdateGrid()) {
                $Redirect = "";
            }
        } else {
            $Redirect = "";
        }
        if ($Redirect)
            $this->DataSource->close();
    }
//End Operation Method

//UpdateGrid Method @46-3F8D6EF8
    function UpdateGrid()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSubmit", $this);
        if(!$this->Validate()) return;
        $Validation = true;
        for($this->RowNumber = 1; $this->RowNumber <= $this->TotalRows; $this->RowNumber++)
        {
            $this->DataSource->CachedColumns["id"] = $this->CachedColumns["id"][$this->RowNumber];
            $this->DataSource->CurrentRow = $this->RowNumber;
            $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
            $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
            $this->observacion->SetText($this->FormParameters["observacion"][$this->RowNumber], $this->RowNumber);
            if ($this->UpdatedRows >= $this->RowNumber) {
                if($this->UpdateAllowed) { $Validation = ($this->UpdateRow() && $Validation); }
            }
            else if($this->CheckInsert() && $this->InsertAllowed)
            {
                $Validation = ($Validation && $this->InsertRow());
            }
        }
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterSubmit", $this);
        if ($this->Errors->Count() == 0 && $Validation){
            $this->DataSource->close();
            return true;
        }
        return false;
    }
//End UpdateGrid Method

//InsertRow Method @46-74C38213
    function InsertRow()
    {
        if(!$this->InsertAllowed) return false;
        $this->DataSource->id_producto->SetValue($this->id_producto->GetValue(true));
        $this->DataSource->cantidad->SetValue($this->cantidad->GetValue(true));
        $this->DataSource->observacion->SetValue($this->observacion->GetValue(true));
        $this->DataSource->Insert();
        $errors = "";
        if($this->DataSource->Errors->Count() > 0) {
            $errors = $this->DataSource->Errors->ToString();
            $this->RowsErrors[$this->RowNumber] = $errors;
            $this->DataSource->Errors->Clear();
        }
        return (($this->Errors->Count() == 0) && !strlen($errors));
    }
//End InsertRow Method

//UpdateRow Method @46-5DAD9C72
    function UpdateRow()
    {
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->id->SetValue($this->id->GetValue(true));
        $this->DataSource->id_producto->SetValue($this->id_producto->GetValue(true));
        $this->DataSource->cantidad->SetValue($this->cantidad->GetValue(true));
        $this->DataSource->observacion->SetValue($this->observacion->GetValue(true));
        $this->DataSource->Update();
        $errors = "";
        if($this->DataSource->Errors->Count() > 0) {
            $errors = $this->DataSource->Errors->ToString();
            $this->RowsErrors[$this->RowNumber] = $errors;
            $this->DataSource->Errors->Clear();
        }
        return (($this->Errors->Count() == 0) && !strlen($errors));
    }
//End UpdateRow Method

//FormScript Method @46-59800DB5
    function FormScript($TotalRows)
    {
        $script = "";
        return $script;
    }
//End FormScript Method

//SetFormState Method @46-0EEA5586
    function SetFormState($FormState)
    {
        if(strlen($FormState)) {
            $FormState = str_replace("\\\\", "\\" . ord("\\"), $FormState);
            $FormState = str_replace("\\;", "\\" . ord(";"), $FormState);
            $pieces = explode(";", $FormState);
            $this->UpdatedRows = $pieces[0];
            $this->EmptyRows   = $pieces[1];
            $this->TotalRows = $this->UpdatedRows + $this->EmptyRows;
            $RowNumber = 0;
            for($i = 2; $i < sizeof($pieces); $i = $i + 1)  {
                $piece = $pieces[$i + 0];
                $piece = str_replace("\\" . ord("\\"), "\\", $piece);
                $piece = str_replace("\\" . ord(";"), ";", $piece);
                $this->CachedColumns["id"][$RowNumber] = $piece;
                $RowNumber++;
            }

            if(!$RowNumber) { $RowNumber = 1; }
            for($i = 1; $i <= $this->EmptyRows; $i++) {
                $this->CachedColumns["id"][$RowNumber] = "";
                $RowNumber++;
            }
        }
    }
//End SetFormState Method

//GetFormState Method @46-692238C5
    function GetFormState($NonEmptyRows)
    {
        if(!$this->FormSubmitted) {
            $this->FormState  = $NonEmptyRows . ";";
            $this->FormState .= $this->InsertAllowed ? $this->EmptyRows : "0";
            if($NonEmptyRows) {
                for($i = 0; $i <= $NonEmptyRows; $i++) {
                    $this->FormState .= ";" . str_replace(";", "\\;", str_replace("\\", "\\\\", $this->CachedColumns["id"][$i]));
                }
            }
        }
        return $this->FormState;
    }
//End GetFormState Method

//Show Method @46-2357BA91
    function Show()
    {
        $Tpl = & CCGetTemplate($this);
        global $FileName;
        global $CCSLocales;
        global $CCSUseAmp;
        $Error = "";

        if(!$this->Visible) { return; }

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->open();
        $is_next_record = ($this->ReadAllowed && $this->DataSource->next_record());
        $this->IsEmpty = ! $is_next_record;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        if(!$this->Visible) { return; }

        $this->Attributes->Show();
        $this->Button_Submit->Visible = $this->Button_Submit->Visible && ($this->InsertAllowed || $this->UpdateAllowed || $this->DeleteAllowed);
        $ParentPath = $Tpl->block_path;
        $EditableGridPath = $ParentPath . "/EditableGrid " . $this->ComponentName;
        $EditableGridRowPath = $ParentPath . "/EditableGrid " . $this->ComponentName . "/Row";
        $Tpl->block_path = $EditableGridRowPath;
        $this->RowNumber = 0;
        $NonEmptyRows = 0;
        $EmptyRowsLeft = $this->EmptyRows;
        $this->ControlsVisible["id"] = $this->id->Visible;
        $this->ControlsVisible["id_producto"] = $this->id_producto->Visible;
        $this->ControlsVisible["cantidad"] = $this->cantidad->Visible;
        $this->ControlsVisible["observacion"] = $this->observacion->Visible;
        if ($is_next_record || ($EmptyRowsLeft && $this->InsertAllowed)) {
            do {
                // Parse Separator
                if($this->RowNumber) {
                    $Tpl->block_path = $EditableGridPath;
                    $this->Attributes->Show();
                    $Tpl->parseto("Separator", true, "Row");
                    $Tpl->block_path = $EditableGridRowPath;
                }
                $this->RowNumber++;
                if($is_next_record) {
                    $NonEmptyRows++;
                    $this->DataSource->SetValues();
                }
                if (!($this->FormSubmitted) && $is_next_record) {
                    $this->CachedColumns["id"][$this->RowNumber] = $this->DataSource->CachedColumns["id"];
                    $this->id->SetValue($this->DataSource->id->GetValue());
                    $this->id_producto->SetValue($this->DataSource->id_producto->GetValue());
                    $this->cantidad->SetValue($this->DataSource->cantidad->GetValue());
                    $this->observacion->SetValue($this->DataSource->observacion->GetValue());
                } elseif ($this->FormSubmitted && $is_next_record) {
                    $this->id->SetText("");
                    $this->id->SetValue($this->DataSource->id->GetValue());
                    $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
                    $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
                    $this->observacion->SetText($this->FormParameters["observacion"][$this->RowNumber], $this->RowNumber);
                } elseif (!$this->FormSubmitted) {
                    $this->CachedColumns["id"][$this->RowNumber] = "";
                    $this->id->SetText("");
                    $this->id_producto->SetText("");
                    $this->cantidad->SetText("");
                    $this->observacion->SetText("");
                } else {
                    $this->id->SetText("");
                    $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
                    $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
                    $this->observacion->SetText($this->FormParameters["observacion"][$this->RowNumber], $this->RowNumber);
                }
                $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                $this->Attributes->Show();
                $this->id->Show($this->RowNumber);
                $this->id_producto->Show($this->RowNumber);
                $this->cantidad->Show($this->RowNumber);
                $this->observacion->Show($this->RowNumber);
                if (isset($this->RowsErrors[$this->RowNumber]) && ($this->RowsErrors[$this->RowNumber] != "")) {
                    $Tpl->setblockvar("RowError", "");
                    $Tpl->setvar("Error", $this->RowsErrors[$this->RowNumber]);
                    $this->Attributes->Show();
                    $Tpl->parse("RowError", false);
                } else {
                    $Tpl->setblockvar("RowError", "");
                }
                $Tpl->setvar("FormScript", $this->FormScript($this->RowNumber));
                $Tpl->parse();
                if ($is_next_record) {
                    if ($this->FormSubmitted) {
                        $is_next_record = $this->RowNumber < $this->UpdatedRows;
                        if (($this->DataSource->CachedColumns["id"] == $this->CachedColumns["id"][$this->RowNumber])) {
                            if ($this->ReadAllowed) $this->DataSource->next_record();
                        }
                    }else{
                        $is_next_record = ($this->RowNumber < $this->PageSize) &&  $this->ReadAllowed && $this->DataSource->next_record();
                    }
                } else { 
                    $EmptyRowsLeft--;
                }
            } while($is_next_record || ($EmptyRowsLeft && $this->InsertAllowed));
        } else {
            $Tpl->block_path = $EditableGridPath;
            $this->Attributes->Show();
            $Tpl->parse("NoRecords", false);
        }

        $Tpl->block_path = $EditableGridPath;
        $this->Navigator->PageNumber = $this->DataSource->AbsolutePage;
        $this->Navigator->PageSize = $this->PageSize;
        if ($this->DataSource->RecordsCount == "CCS not counted")
            $this->Navigator->TotalPages = $this->DataSource->AbsolutePage + ($this->DataSource->next_record() ? 1 : 0);
        else
            $this->Navigator->TotalPages = $this->DataSource->PageCount();
        if (($this->Navigator->TotalPages <= 1 && $this->Navigator->PageNumber == 1) || $this->Navigator->PageSize == "") {
            $this->Navigator->Visible = false;
        }
        $this->detail_ent_alm_general1_TotalRecords->Show();
        $this->Sorter_id->Show();
        $this->Sorter_id_producto->Show();
        $this->Sorter_cantidad->Show();
        $this->Sorter_observacion->Show();
        $this->Navigator->Show();
        $this->Button_Submit->Show();

        if($this->CheckErrors()) {
            $Error = ComposeStrings($Error, $this->Errors->ToString());
            $Error = ComposeStrings($Error, $this->DataSource->Errors->ToString());
            $Tpl->SetVar("Error", $Error);
            $Tpl->Parse("Error", false);
        }
        $CCSForm = $this->ComponentName;
        $this->HTMLFormAction = $FileName . "?" . CCAddParam(CCGetQueryString("QueryString", ""), "ccsForm", $CCSForm);
        $Tpl->SetVar("Action", !$CCSUseAmp ? $this->HTMLFormAction : str_replace("&", "&amp;", $this->HTMLFormAction));
        $Tpl->SetVar("HTMLFormName", $this->ComponentName);
        $Tpl->SetVar("HTMLFormEnctype", $this->FormEnctype);
        if (!$CCSUseAmp) {
            $Tpl->SetVar("HTMLFormProperties", "method=\"POST\" action=\"" . $this->HTMLFormAction . "\" name=\"" . $this->ComponentName . "\"");
        } else {
            $Tpl->SetVar("HTMLFormProperties", "method=\"post\" action=\"" . str_replace("&", "&amp;", $this->HTMLFormAction) . "\" id=\"" . $this->ComponentName . "\"");
        }
        $Tpl->SetVar("FormState", CCToHTML($this->GetFormState($NonEmptyRows)));
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End detail_ent_alm_general1 Class @46-FCB6E20C

class clsdetail_ent_alm_general1DataSource extends clsDBConnection1 {  //detail_ent_alm_general1DataSource Class @46-670AB73A

//DataSource Variables @46-B1B631B8
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $InsertParameters;
    public $UpdateParameters;
    public $CountSQL;
    public $wp;
    public $AllParametersSet;

    public $CachedColumns;
    public $CurrentRow;
    public $InsertFields = array();
    public $UpdateFields = array();

    // Datasource fields
    public $id;
    public $id_producto;
    public $cantidad;
    public $observacion;
//End DataSource Variables

//DataSourceClass_Initialize Event @46-D5093F54
    function clsdetail_ent_alm_general1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "EditableGrid detail_ent_alm_general1/Error";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->id_producto = new clsField("id_producto", ccsInteger, "");
        
        $this->cantidad = new clsField("cantidad", ccsInteger, "");
        
        $this->observacion = new clsField("observacion", ccsInteger, "");
        

        $this->InsertFields["id_producto"] = array("Name" => "id_producto", "Value" => "", "DataType" => ccsInteger);
        $this->InsertFields["cantidad"] = array("Name" => "cantidad", "Value" => "", "DataType" => ccsInteger);
        $this->InsertFields["observacion"] = array("Name" => "observacion", "Value" => "", "DataType" => ccsInteger);
        $this->InsertFields["id_ent_alm_general"] = array("Name" => "id_ent_alm_general", "Value" => "", "DataType" => ccsInteger);
        $this->UpdateFields["id_producto"] = array("Name" => "id_producto", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["cantidad"] = array("Name" => "cantidad", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["observacion"] = array("Name" => "observacion", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//SetOrder Method @46-EFAFFEFD
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_id_producto" => array("id_producto", ""), 
            "Sorter_cantidad" => array("cantidad", ""), 
            "Sorter_observacion" => array("observacion", "")));
    }
//End SetOrder Method

//Prepare Method @46-E75D42AE
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urlid_ent_alm_general", ccsInteger, "", "", $this->Parameters["urlid_ent_alm_general"], 0, false);
        $this->AllParametersSet = $this->wp->AllParamsSet();
        $this->wp->Criterion[1] = $this->wp->Operation(opEqual, "id_ent_alm_general", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsInteger),false);
        $this->Where = 
             $this->wp->Criterion[1];
    }
//End Prepare Method

//Open Method @46-CD891DAD
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM detail_ent_alm_general";
        $this->SQL = "SELECT * \n\n" .
        "FROM detail_ent_alm_general {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @46-C258D348
    function SetValues()
    {
        $this->CachedColumns["id"] = $this->f("id");
        $this->id->SetDBValue(trim($this->f("id")));
        $this->id_producto->SetDBValue(trim($this->f("id_producto")));
        $this->cantidad->SetDBValue(trim($this->f("cantidad")));
        $this->observacion->SetDBValue(trim($this->f("observacion")));
    }
//End SetValues Method

//Insert Method @46-759006AA
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->cp["id_producto"] = new clsSQLParameter("ctrlid_producto", ccsInteger, "", "", $this->id_producto->GetValue(true), "", false, $this->ErrorBlock);
        $this->cp["cantidad"] = new clsSQLParameter("ctrlcantidad", ccsInteger, "", "", $this->cantidad->GetValue(true), "", false, $this->ErrorBlock);
        $this->cp["observacion"] = new clsSQLParameter("ctrlobservacion", ccsInteger, "", "", $this->observacion->GetValue(true), "", false, $this->ErrorBlock);
        $this->cp["id_ent_alm_general"] = new clsSQLParameter("urlid_ent_alm_general", ccsInteger, "", "", CCGetFromGet("id_ent_alm_general", NULL), "", false, $this->ErrorBlock);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        if (!is_null($this->cp["id_producto"]->GetValue()) and !strlen($this->cp["id_producto"]->GetText()) and !is_bool($this->cp["id_producto"]->GetValue())) 
            $this->cp["id_producto"]->SetValue($this->id_producto->GetValue(true));
        if (!is_null($this->cp["cantidad"]->GetValue()) and !strlen($this->cp["cantidad"]->GetText()) and !is_bool($this->cp["cantidad"]->GetValue())) 
            $this->cp["cantidad"]->SetValue($this->cantidad->GetValue(true));
        if (!is_null($this->cp["observacion"]->GetValue()) and !strlen($this->cp["observacion"]->GetText()) and !is_bool($this->cp["observacion"]->GetValue())) 
            $this->cp["observacion"]->SetValue($this->observacion->GetValue(true));
        if (!is_null($this->cp["id_ent_alm_general"]->GetValue()) and !strlen($this->cp["id_ent_alm_general"]->GetText()) and !is_bool($this->cp["id_ent_alm_general"]->GetValue())) 
            $this->cp["id_ent_alm_general"]->SetText(CCGetFromGet("id_ent_alm_general", NULL));
        $this->InsertFields["id_producto"]["Value"] = $this->cp["id_producto"]->GetDBValue(true);
        $this->InsertFields["cantidad"]["Value"] = $this->cp["cantidad"]->GetDBValue(true);
        $this->InsertFields["observacion"]["Value"] = $this->cp["observacion"]->GetDBValue(true);
        $this->InsertFields["id_ent_alm_general"]["Value"] = $this->cp["id_ent_alm_general"]->GetDBValue(true);
        $this->SQL = CCBuildInsert("detail_ent_alm_general", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @46-C2EA5E0E
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $SelectWhere = $this->Where;
        $this->Where = "id=" . $this->ToSQL($this->CachedColumns["id"], ccsInteger);
        $this->UpdateFields["id_producto"]["Value"] = $this->id_producto->GetDBValue(true);
        $this->UpdateFields["cantidad"]["Value"] = $this->cantidad->GetDBValue(true);
        $this->UpdateFields["observacion"]["Value"] = $this->observacion->GetDBValue(true);
        $this->SQL = CCBuildUpdate("detail_ent_alm_general", $this->UpdateFields, $this);
        $this->SQL .= strlen($this->Where) ? " WHERE " . $this->Where : $this->Where;
        if (!strlen($this->Where) && $this->Errors->Count() == 0) 
            $this->Errors->addError($CCSLocales->GetText("CCS_CustomOperationError_MissingParameters"));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteUpdate", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteUpdate", $this->Parent);
        }
        $this->Where = $SelectWhere;
    }
//End Update Method

} //End detail_ent_alm_general1DataSource Class @46-FCB6E20C

//Initialize Page @1-9CA80621
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
$TemplateFileName = "detail_ent_AlmGeneral.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-01AF30B0
include_once("./detail_ent_AlmGeneral_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-2DD156DC
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
$detail_ent_alm_general1 = new clsEditableGriddetail_ent_alm_general1("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->detail_ent_alm_general1 = & $detail_ent_alm_general1;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
$Content->AddComponent("detail_ent_alm_general1", $detail_ent_alm_general1);
$detail_ent_alm_general1->Initialize();

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

//Execute Components @1-C6150C7D
$MasterPage->Operations();
$detail_ent_alm_general1->Operation();
//End Execute Components

//Go to destination page @1-8BFDD23E
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($detail_ent_alm_general1);
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

//Unload Page @1-7F8A646E
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($detail_ent_alm_general1);
unset($Tpl);
//End Unload Page


?>
