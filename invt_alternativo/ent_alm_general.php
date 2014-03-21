<?php
//Include Common Files @1-4D4D1D62
define("RelativePath", "..");
define("PathToCurrentPage", "/invt_alternativo/");
define("FileName", "ent_alm_general.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
include_once(RelativePath . "/Services.php");
//End Include Common Files

//Master Page implementation @1-07539F59
include_once(RelativePath . "/invt_alternativo/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsRecordent_almc_general { //ent_almc_general Class @6-96F4F23E

//Variables @6-9E315808

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

//Class_Initialize Event @6-07F43B11
    function clsRecordent_almc_general($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record ent_almc_general/Error";
        $this->DataSource = new clsent_almc_generalDataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "ent_almc_general";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->EditMode = ($FormMethod == "Edit");
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->Hide_Panel = new clsPanel("Hide_Panel", $this);
            $this->Button_Insert = new clsButton("Button_Insert", $Method, $this);
            $this->Button_Update = new clsButton("Button_Update", $Method, $this);
            $this->Button_Cancel = new clsButton("Button_Cancel", $Method, $this);
            $this->fecha_registro = new clsControl(ccsTextBox, "fecha_registro", $CCSLocales->GetText("fecha_registro"), ccsDate, array("ShortDate"), CCGetRequestParam("fecha_registro", $Method, NULL), $this);
            $this->id_usuario = new clsControl(ccsTextBox, "id_usuario", $CCSLocales->GetText("id_usuario"), ccsInteger, "", CCGetRequestParam("id_usuario", $Method, NULL), $this);
            $this->id_usuario->Required = true;
            $this->id_producto = new clsControl(ccsTextBox, "id_producto", $CCSLocales->GetText("id_producto"), ccsInteger, "", CCGetRequestParam("id_producto", $Method, NULL), $this);
            $this->cantidad = new clsControl(ccsTextBox, "cantidad", $CCSLocales->GetText("cantidad"), ccsInteger, "", CCGetRequestParam("cantidad", $Method, NULL), $this);
            $this->Hide_Panel->AddComponent("Button_Insert", $this->Button_Insert);
            $this->Hide_Panel->AddComponent("Button_Update", $this->Button_Update);
            $this->Hide_Panel->AddComponent("Button_Cancel", $this->Button_Cancel);
        }
    }
//End Class_Initialize Event

//Initialize Method @6-2832F4DC
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlid"] = CCGetFromGet("id", NULL);
    }
//End Initialize Method

//Validate Method @6-63DDD35D
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->fecha_registro->Validate() && $Validation);
        $Validation = ($this->id_usuario->Validate() && $Validation);
        $Validation = ($this->id_producto->Validate() && $Validation);
        $Validation = ($this->cantidad->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->fecha_registro->Errors->Count() == 0);
        $Validation =  $Validation && ($this->id_usuario->Errors->Count() == 0);
        $Validation =  $Validation && ($this->id_producto->Errors->Count() == 0);
        $Validation =  $Validation && ($this->cantidad->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @6-EA225A76
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->fecha_registro->Errors->Count());
        $errors = ($errors || $this->id_usuario->Errors->Count());
        $errors = ($errors || $this->id_producto->Errors->Count());
        $errors = ($errors || $this->cantidad->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @6-0BF2B389
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
            $this->PressedButton = $this->EditMode ? "Button_Update" : "Button_Insert";
            if($this->Button_Insert->Pressed) {
                $this->PressedButton = "Button_Insert";
            } else if($this->Button_Update->Pressed) {
                $this->PressedButton = "Button_Update";
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
            } else if($this->PressedButton == "Button_Update") {
                if(!CCGetEvent($this->Button_Update->CCSEvents, "OnClick", $this->Button_Update) || !$this->UpdateRow()) {
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

//InsertRow Method @6-7E67A646
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->fecha_registro->SetValue($this->fecha_registro->GetValue(true));
        $this->DataSource->id_usuario->SetValue($this->id_usuario->GetValue(true));
        $this->DataSource->id_producto->SetValue($this->id_producto->GetValue(true));
        $this->DataSource->cantidad->SetValue($this->cantidad->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//UpdateRow Method @6-A45A4BA6
    function UpdateRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeUpdate", $this);
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->fecha_registro->SetValue($this->fecha_registro->GetValue(true));
        $this->DataSource->id_usuario->SetValue($this->id_usuario->GetValue(true));
        $this->DataSource->id_producto->SetValue($this->id_producto->GetValue(true));
        $this->DataSource->cantidad->SetValue($this->cantidad->GetValue(true));
        $this->DataSource->Update();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterUpdate", $this);
        return (!$this->CheckErrors());
    }
//End UpdateRow Method

//Show Method @6-DE2229D4
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
                    $this->fecha_registro->SetValue($this->DataSource->fecha_registro->GetValue());
                    $this->id_usuario->SetValue($this->DataSource->id_usuario->GetValue());
                    $this->id_producto->SetValue($this->DataSource->id_producto->GetValue());
                    $this->cantidad->SetValue($this->DataSource->cantidad->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->fecha_registro->Errors->ToString());
            $Error = ComposeStrings($Error, $this->id_usuario->Errors->ToString());
            $Error = ComposeStrings($Error, $this->id_producto->Errors->ToString());
            $Error = ComposeStrings($Error, $this->cantidad->Errors->ToString());
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
        $this->Button_Update->Visible = $this->EditMode && $this->UpdateAllowed;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        $this->Attributes->Show();
        if(!$this->Visible) {
            $Tpl->block_path = $ParentPath;
            return;
        }

        $this->Hide_Panel->Show();
        $this->fecha_registro->Show();
        $this->id_usuario->Show();
        $this->id_producto->Show();
        $this->cantidad->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End ent_almc_general Class @6-FCB6E20C

class clsent_almc_generalDataSource extends clsDBConnection1 {  //ent_almc_generalDataSource Class @6-9FA3E22A

//DataSource Variables @6-9C21E5B2
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $InsertParameters;
    public $UpdateParameters;
    public $wp;
    public $AllParametersSet;

    public $InsertFields = array();
    public $UpdateFields = array();

    // Datasource fields
    public $fecha_registro;
    public $id_usuario;
    public $id_producto;
    public $cantidad;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-775D913E
    function clsent_almc_generalDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record ent_almc_general/Error";
        $this->Initialize();
        $this->fecha_registro = new clsField("fecha_registro", ccsDate, $this->DateFormat);
        
        $this->id_usuario = new clsField("id_usuario", ccsInteger, "");
        
        $this->id_producto = new clsField("id_producto", ccsInteger, "");
        
        $this->cantidad = new clsField("cantidad", ccsInteger, "");
        

        $this->InsertFields["fecha_registro"] = array("Name" => "fecha_registro", "Value" => "", "DataType" => ccsDate, "OmitIfEmpty" => 1);
        $this->InsertFields["id_usuario"] = array("Name" => "id_usuario", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["id_producto"] = array("Name" => "id_producto", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["cantidad"] = array("Name" => "cantidad", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["fecha_registro"] = array("Name" => "fecha_registro", "Value" => "", "DataType" => ccsDate, "OmitIfEmpty" => 1);
        $this->UpdateFields["id_usuario"] = array("Name" => "id_usuario", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["id_producto"] = array("Name" => "id_producto", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["cantidad"] = array("Name" => "cantidad", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//Prepare Method @6-35B33087
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

//Open Method @6-26D987B7
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM ent_almc_general {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @6-8A7B460E
    function SetValues()
    {
        $this->fecha_registro->SetDBValue(trim($this->f("fecha_registro")));
        $this->id_usuario->SetDBValue(trim($this->f("id_usuario")));
        $this->id_producto->SetDBValue(trim($this->f("id_producto")));
        $this->cantidad->SetDBValue(trim($this->f("cantidad")));
    }
//End SetValues Method

//Insert Method @6-F1166081
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["fecha_registro"]["Value"] = $this->fecha_registro->GetDBValue(true);
        $this->InsertFields["id_usuario"]["Value"] = $this->id_usuario->GetDBValue(true);
        $this->InsertFields["id_producto"]["Value"] = $this->id_producto->GetDBValue(true);
        $this->InsertFields["cantidad"]["Value"] = $this->cantidad->GetDBValue(true);
        $this->SQL = CCBuildInsert("ent_almc_general", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @6-4028753A
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $this->UpdateFields["fecha_registro"]["Value"] = $this->fecha_registro->GetDBValue(true);
        $this->UpdateFields["id_usuario"]["Value"] = $this->id_usuario->GetDBValue(true);
        $this->UpdateFields["id_producto"]["Value"] = $this->id_producto->GetDBValue(true);
        $this->UpdateFields["cantidad"]["Value"] = $this->cantidad->GetDBValue(true);
        $this->SQL = CCBuildUpdate("ent_almc_general", $this->UpdateFields, $this);
        $this->SQL .= strlen($this->Where) ? " WHERE " . $this->Where : $this->Where;
        if (!strlen($this->Where) && $this->Errors->Count() == 0) 
            $this->Errors->addError($CCSLocales->GetText("CCS_CustomOperationError_MissingParameters"));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteUpdate", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteUpdate", $this->Parent);
        }
    }
//End Update Method

} //End ent_almc_generalDataSource Class @6-FCB6E20C

class clsEditableGriddetail_entalmgeneral { //detail_entalmgeneral Class @19-7EC56230

//Variables @19-11E9772E

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
    public $Sorter_id_EntAlmGeneral;
    public $Sorter_id_producto;
    public $Sorter_cantidad;
//End Variables

//Class_Initialize Event @19-1C9189A0
    function clsEditableGriddetail_entalmgeneral($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "EditableGrid detail_entalmgeneral/Error";
        $this->ControlsErrors = array();
        $this->ComponentName = "detail_entalmgeneral";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->CachedColumns["id"][0] = "id";
        $this->DataSource = new clsdetail_entalmgeneralDataSource($this);
        $this->ds = & $this->DataSource;
        $this->PageSize = CCGetParam($this->ComponentName . "PageSize", "");
        if(!is_numeric($this->PageSize) || !strlen($this->PageSize))
            $this->PageSize = 10;
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

        $this->SorterName = CCGetParam("detail_entalmgeneralOrder", "");
        $this->SorterDirection = CCGetParam("detail_entalmgeneralDir", "");

        $this->detail_entalmgeneral_TotalRecords = new clsControl(ccsLabel, "detail_entalmgeneral_TotalRecords", "detail_entalmgeneral_TotalRecords", ccsText, "", NULL, $this);
        $this->Sorter_id_EntAlmGeneral = new clsSorter($this->ComponentName, "Sorter_id_EntAlmGeneral", $FileName, $this);
        $this->Sorter_id_producto = new clsSorter($this->ComponentName, "Sorter_id_producto", $FileName, $this);
        $this->Sorter_cantidad = new clsSorter($this->ComponentName, "Sorter_cantidad", $FileName, $this);
        $this->id_EntAlmGeneral = new clsControl(ccsTextBox, "id_EntAlmGeneral", $CCSLocales->GetText("id_EntAlmGeneral"), ccsInteger, "", NULL, $this);
        $this->id_producto = new clsControl(ccsTextBox, "id_producto", $CCSLocales->GetText("id_producto"), ccsInteger, "", NULL, $this);
        $this->cantidad = new clsControl(ccsTextBox, "cantidad", $CCSLocales->GetText("cantidad"), ccsInteger, "", NULL, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpSimple, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->Button_Submit = new clsButton("Button_Submit", $Method, $this);
    }
//End Class_Initialize Event

//Initialize Method @19-48BE527E
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);

        $this->DataSource->Parameters["urlid"] = CCGetFromGet("id", NULL);
    }
//End Initialize Method

//GetFormParameters Method @19-34FC1CA6
    function GetFormParameters()
    {
        for($RowNumber = 1; $RowNumber <= $this->TotalRows; $RowNumber++)
        {
            $this->FormParameters["id_EntAlmGeneral"][$RowNumber] = CCGetFromPost("id_EntAlmGeneral_" . $RowNumber, NULL);
            $this->FormParameters["id_producto"][$RowNumber] = CCGetFromPost("id_producto_" . $RowNumber, NULL);
            $this->FormParameters["cantidad"][$RowNumber] = CCGetFromPost("cantidad_" . $RowNumber, NULL);
        }
    }
//End GetFormParameters Method

//Validate Method @19-3A53A536
    function Validate()
    {
        $Validation = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);

        for($this->RowNumber = 1; $this->RowNumber <= $this->TotalRows; $this->RowNumber++)
        {
            $this->DataSource->CachedColumns["id"] = $this->CachedColumns["id"][$this->RowNumber];
            $this->DataSource->CurrentRow = $this->RowNumber;
            $this->id_EntAlmGeneral->SetText($this->FormParameters["id_EntAlmGeneral"][$this->RowNumber], $this->RowNumber);
            $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
            $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
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

//ValidateRow Method @19-1A2CC821
    function ValidateRow()
    {
        global $CCSLocales;
        $this->id_EntAlmGeneral->Validate();
        $this->id_producto->Validate();
        $this->cantidad->Validate();
        $this->RowErrors = new clsErrors();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidateRow", $this);
        $errors = "";
        $errors = ComposeStrings($errors, $this->id_EntAlmGeneral->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->cantidad->Errors->ToString());
        $this->id_EntAlmGeneral->Errors->Clear();
        $this->id_producto->Errors->Clear();
        $this->cantidad->Errors->Clear();
        $errors = ComposeStrings($errors, $this->RowErrors->ToString());
        $this->RowsErrors[$this->RowNumber] = $errors;
        return $errors != "" ? 0 : 1;
    }
//End ValidateRow Method

//CheckInsert Method @19-D87E0D7F
    function CheckInsert()
    {
        $filed = false;
        $filed = ($filed || (is_array($this->FormParameters["id_EntAlmGeneral"][$this->RowNumber]) && count($this->FormParameters["id_EntAlmGeneral"][$this->RowNumber])) || strlen($this->FormParameters["id_EntAlmGeneral"][$this->RowNumber]));
        $filed = ($filed || (is_array($this->FormParameters["id_producto"][$this->RowNumber]) && count($this->FormParameters["id_producto"][$this->RowNumber])) || strlen($this->FormParameters["id_producto"][$this->RowNumber]));
        $filed = ($filed || (is_array($this->FormParameters["cantidad"][$this->RowNumber]) && count($this->FormParameters["cantidad"][$this->RowNumber])) || strlen($this->FormParameters["cantidad"][$this->RowNumber]));
        return $filed;
    }
//End CheckInsert Method

//CheckErrors Method @19-F5A3B433
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @19-909F269B
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

//UpdateGrid Method @19-12EC0102
    function UpdateGrid()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSubmit", $this);
        if(!$this->Validate()) return;
        $Validation = true;
        for($this->RowNumber = 1; $this->RowNumber <= $this->TotalRows; $this->RowNumber++)
        {
            $this->DataSource->CachedColumns["id"] = $this->CachedColumns["id"][$this->RowNumber];
            $this->DataSource->CurrentRow = $this->RowNumber;
            $this->id_EntAlmGeneral->SetText($this->FormParameters["id_EntAlmGeneral"][$this->RowNumber], $this->RowNumber);
            $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
            $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
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

//InsertRow Method @19-42978A96
    function InsertRow()
    {
        if(!$this->InsertAllowed) return false;
        $this->DataSource->id_EntAlmGeneral->SetValue($this->id_EntAlmGeneral->GetValue(true));
        $this->DataSource->id_producto->SetValue($this->id_producto->GetValue(true));
        $this->DataSource->cantidad->SetValue($this->cantidad->GetValue(true));
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

//UpdateRow Method @19-21381CF1
    function UpdateRow()
    {
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->id_EntAlmGeneral->SetValue($this->id_EntAlmGeneral->GetValue(true));
        $this->DataSource->id_producto->SetValue($this->id_producto->GetValue(true));
        $this->DataSource->cantidad->SetValue($this->cantidad->GetValue(true));
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

//FormScript Method @19-59800DB5
    function FormScript($TotalRows)
    {
        $script = "";
        return $script;
    }
//End FormScript Method

//SetFormState Method @19-0EEA5586
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

//GetFormState Method @19-692238C5
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

//Show Method @19-B5F4D52D
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
        $this->ControlsVisible["id_EntAlmGeneral"] = $this->id_EntAlmGeneral->Visible;
        $this->ControlsVisible["id_producto"] = $this->id_producto->Visible;
        $this->ControlsVisible["cantidad"] = $this->cantidad->Visible;
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
                    $this->id_EntAlmGeneral->SetValue($this->DataSource->id_EntAlmGeneral->GetValue());
                    $this->id_producto->SetValue($this->DataSource->id_producto->GetValue());
                    $this->cantidad->SetValue($this->DataSource->cantidad->GetValue());
                } elseif ($this->FormSubmitted && $is_next_record) {
                    $this->id_EntAlmGeneral->SetText($this->FormParameters["id_EntAlmGeneral"][$this->RowNumber], $this->RowNumber);
                    $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
                    $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
                } elseif (!$this->FormSubmitted) {
                    $this->CachedColumns["id"][$this->RowNumber] = "";
                    $this->id_EntAlmGeneral->SetText("");
                    $this->id_producto->SetText("");
                    $this->cantidad->SetText("");
                } else {
                    $this->id_EntAlmGeneral->SetText($this->FormParameters["id_EntAlmGeneral"][$this->RowNumber], $this->RowNumber);
                    $this->id_producto->SetText($this->FormParameters["id_producto"][$this->RowNumber], $this->RowNumber);
                    $this->cantidad->SetText($this->FormParameters["cantidad"][$this->RowNumber], $this->RowNumber);
                }
                $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                $this->Attributes->Show();
                $this->id_EntAlmGeneral->Show($this->RowNumber);
                $this->id_producto->Show($this->RowNumber);
                $this->cantidad->Show($this->RowNumber);
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
        $this->detail_entalmgeneral_TotalRecords->Show();
        $this->Sorter_id_EntAlmGeneral->Show();
        $this->Sorter_id_producto->Show();
        $this->Sorter_cantidad->Show();
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

} //End detail_entalmgeneral Class @19-FCB6E20C

class clsdetail_entalmgeneralDataSource extends clsDBConnection1 {  //detail_entalmgeneralDataSource Class @19-428F21DF

//DataSource Variables @19-158650EE
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
    public $id_EntAlmGeneral;
    public $id_producto;
    public $cantidad;
//End DataSource Variables

//DataSourceClass_Initialize Event @19-ED6B136A
    function clsdetail_entalmgeneralDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "EditableGrid detail_entalmgeneral/Error";
        $this->Initialize();
        $this->id_EntAlmGeneral = new clsField("id_EntAlmGeneral", ccsInteger, "");
        
        $this->id_producto = new clsField("id_producto", ccsInteger, "");
        
        $this->cantidad = new clsField("cantidad", ccsInteger, "");
        

        $this->InsertFields["id_EntAlmGeneral"] = array("Name" => "id_EntAlmGeneral", "Value" => "", "DataType" => ccsInteger);
        $this->InsertFields["id_producto"] = array("Name" => "id_producto", "Value" => "", "DataType" => ccsInteger);
        $this->InsertFields["cantidad"] = array("Name" => "cantidad", "Value" => "", "DataType" => ccsInteger);
        $this->InsertFields["id"] = array("Name" => "id", "Value" => "", "DataType" => ccsInteger);
        $this->UpdateFields["id_EntAlmGeneral"] = array("Name" => "id_EntAlmGeneral", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["id_producto"] = array("Name" => "id_producto", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["cantidad"] = array("Name" => "cantidad", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//SetOrder Method @19-3C3DBDC2
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id_EntAlmGeneral" => array("id_EntAlmGeneral", ""), 
            "Sorter_id_producto" => array("id_producto", ""), 
            "Sorter_cantidad" => array("cantidad", "")));
    }
//End SetOrder Method

//Prepare Method @19-9CF5CC21
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urlid", ccsInteger, "", "", $this->Parameters["urlid"], 0, false);
        $this->AllParametersSet = $this->wp->AllParamsSet();
        $this->wp->Criterion[1] = $this->wp->Operation(opEqual, "id", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsInteger),false);
        $this->Where = 
             $this->wp->Criterion[1];
    }
//End Prepare Method

//Open Method @19-BEAA6FEF
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM detail_entalmgeneral";
        $this->SQL = "SELECT * \n\n" .
        "FROM detail_entalmgeneral {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @19-F6292A27
    function SetValues()
    {
        $this->CachedColumns["id"] = $this->f("id");
        $this->id_EntAlmGeneral->SetDBValue(trim($this->f("id_EntAlmGeneral")));
        $this->id_producto->SetDBValue(trim($this->f("id_producto")));
        $this->cantidad->SetDBValue(trim($this->f("cantidad")));
    }
//End SetValues Method

//Insert Method @19-5BD7CA99
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->cp["id_EntAlmGeneral"] = new clsSQLParameter("ctrlid_EntAlmGeneral", ccsInteger, "", "", $this->id_EntAlmGeneral->GetValue(true), "", false, $this->ErrorBlock);
        $this->cp["id_producto"] = new clsSQLParameter("ctrlid_producto", ccsInteger, "", "", $this->id_producto->GetValue(true), "", false, $this->ErrorBlock);
        $this->cp["cantidad"] = new clsSQLParameter("ctrlcantidad", ccsInteger, "", "", $this->cantidad->GetValue(true), "", false, $this->ErrorBlock);
        $this->cp["id"] = new clsSQLParameter("urlid", ccsInteger, "", "", CCGetFromGet("id", NULL), "", false, $this->ErrorBlock);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        if (!is_null($this->cp["id_EntAlmGeneral"]->GetValue()) and !strlen($this->cp["id_EntAlmGeneral"]->GetText()) and !is_bool($this->cp["id_EntAlmGeneral"]->GetValue())) 
            $this->cp["id_EntAlmGeneral"]->SetValue($this->id_EntAlmGeneral->GetValue(true));
        if (!is_null($this->cp["id_producto"]->GetValue()) and !strlen($this->cp["id_producto"]->GetText()) and !is_bool($this->cp["id_producto"]->GetValue())) 
            $this->cp["id_producto"]->SetValue($this->id_producto->GetValue(true));
        if (!is_null($this->cp["cantidad"]->GetValue()) and !strlen($this->cp["cantidad"]->GetText()) and !is_bool($this->cp["cantidad"]->GetValue())) 
            $this->cp["cantidad"]->SetValue($this->cantidad->GetValue(true));
        if (!is_null($this->cp["id"]->GetValue()) and !strlen($this->cp["id"]->GetText()) and !is_bool($this->cp["id"]->GetValue())) 
            $this->cp["id"]->SetText(CCGetFromGet("id", NULL));
        $this->InsertFields["id_EntAlmGeneral"]["Value"] = $this->cp["id_EntAlmGeneral"]->GetDBValue(true);
        $this->InsertFields["id_producto"]["Value"] = $this->cp["id_producto"]->GetDBValue(true);
        $this->InsertFields["cantidad"]["Value"] = $this->cp["cantidad"]->GetDBValue(true);
        $this->InsertFields["id"]["Value"] = $this->cp["id"]->GetDBValue(true);
        $this->SQL = CCBuildInsert("detail_entalmgeneral", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @19-E5584579
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $SelectWhere = $this->Where;
        $this->Where = "id=" . $this->ToSQL($this->CachedColumns["id"], ccsInteger);
        $this->UpdateFields["id_EntAlmGeneral"]["Value"] = $this->id_EntAlmGeneral->GetDBValue(true);
        $this->UpdateFields["id_producto"]["Value"] = $this->id_producto->GetDBValue(true);
        $this->UpdateFields["cantidad"]["Value"] = $this->cantidad->GetDBValue(true);
        $this->SQL = CCBuildUpdate("detail_entalmgeneral", $this->UpdateFields, $this);
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

} //End detail_entalmgeneralDataSource Class @19-FCB6E20C

//Initialize Page @1-3EA110F0
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
$PathToRoot = "../";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-F099944A
include_once("./ent_alm_general_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-94731FAF
$DBConnection1 = new clsDBConnection1();
$MainPage->Connections["Connection1"] = & $DBConnection1;
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
$MasterPage = new clsMasterPage("/invt_alternativo/Designs/medibio_template/medibio_template/", "MasterPage", $MainPage);
$MasterPage->Attributes = $Attributes;
$MasterPage->Initialize();
$Head = new clsPanel("Head", $MainPage);
$Head->PlaceholderName = "Head";
$Content = new clsPanel("Content", $MainPage);
$Content->PlaceholderName = "Content";
$ent_almc_general = new clsRecordent_almc_general("", $MainPage);
$detail_entalmgeneral = new clsEditableGriddetail_entalmgeneral("", $MainPage);
$Insert = new clsButton("Insert", ccsGet, $MainPage);
$Update = new clsButton("Update", ccsGet, $MainPage);
$Cancel = new clsButton("Cancel", ccsGet, $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->ent_almc_general = & $ent_almc_general;
$MainPage->detail_entalmgeneral = & $detail_entalmgeneral;
$MainPage->Insert = & $Insert;
$MainPage->Update = & $Update;
$MainPage->Cancel = & $Cancel;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
$Content->AddComponent("ent_almc_general", $ent_almc_general);
$Content->AddComponent("detail_entalmgeneral", $detail_entalmgeneral);
$Content->AddComponent("Insert", $Insert);
$Content->AddComponent("Update", $Update);
$Content->AddComponent("Cancel", $Cancel);
$ent_almc_general->Initialize();
$detail_entalmgeneral->Initialize();

BindEvents();

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

//Initialize HTML Template @1-21B65862
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
$Attributes->SetValue("pathToRoot", "../");
$Attributes->Show();
//End Initialize HTML Template

//Execute Components @1-F6E06EBA
$MasterPage->Operations();
$ent_almc_general->Operation();
$detail_entalmgeneral->Operation();
//End Execute Components

//Go to destination page @1-A35EDCFE
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($ent_almc_general);
    unset($detail_entalmgeneral);
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

//Unload Page @1-067D99C1
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($ent_almc_general);
unset($detail_entalmgeneral);
unset($Tpl);
//End Unload Page


?>
