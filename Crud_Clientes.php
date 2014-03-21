<?php
//Include Common Files @1-03DC76ED
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "Crud_Clientes.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsRecordclientes1 { //clientes1 Class @6-7A5F99DF

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

//Class_Initialize Event @6-A666B621
    function clsRecordclientes1($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record clientes1/Error";
        $this->DataSource = new clsclientes1DataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "clientes1";
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
            $this->Button_Update = new clsButton("Button_Update", $Method, $this);
            $this->Button_Cancel = new clsButton("Button_Cancel", $Method, $this);
            $this->prinombre = new clsControl(ccsTextBox, "prinombre", $CCSLocales->GetText("prinombre"), ccsText, "", CCGetRequestParam("prinombre", $Method, NULL), $this);
            $this->prinombre->Required = true;
            $this->demasnombres = new clsControl(ccsTextBox, "demasnombres", $CCSLocales->GetText("demasnombres"), ccsText, "", CCGetRequestParam("demasnombres", $Method, NULL), $this);
            $this->priapellido = new clsControl(ccsTextBox, "priapellido", $CCSLocales->GetText("priapellido"), ccsText, "", CCGetRequestParam("priapellido", $Method, NULL), $this);
            $this->priapellido->Required = true;
            $this->segapellido = new clsControl(ccsTextBox, "segapellido", $CCSLocales->GetText("segapellido"), ccsText, "", CCGetRequestParam("segapellido", $Method, NULL), $this);
            $this->tipo_documento = new clsControl(ccsListBox, "tipo_documento", $CCSLocales->GetText("tipo_documento"), ccsText, "", CCGetRequestParam("tipo_documento", $Method, NULL), $this);
            $this->tipo_documento->DSType = dsTable;
            $this->tipo_documento->DataSource = new clsDBConnection1();
            $this->tipo_documento->ds = & $this->tipo_documento->DataSource;
            $this->tipo_documento->DataSource->SQL = "SELECT * \n" .
"FROM tipo_doc {SQL_Where} {SQL_OrderBy}";
            list($this->tipo_documento->BoundColumn, $this->tipo_documento->TextColumn, $this->tipo_documento->DBFormat) = array("id_tip_doc", "sigla_tipDoc", "");
            $this->tipo_documento->Required = true;
            $this->num_documento = new clsControl(ccsTextBox, "num_documento", $CCSLocales->GetText("num_documento"), ccsText, "", CCGetRequestParam("num_documento", $Method, NULL), $this);
            $this->lugar_nacimiento = new clsControl(ccsListBox, "lugar_nacimiento", $CCSLocales->GetText("lugar_nacimiento"), ccsInteger, "", CCGetRequestParam("lugar_nacimiento", $Method, NULL), $this);
            $this->lugar_nacimiento->DSType = dsTable;
            $this->lugar_nacimiento->DataSource = new clsDBConnection1();
            $this->lugar_nacimiento->ds = & $this->lugar_nacimiento->DataSource;
            $this->lugar_nacimiento->DataSource->SQL = "SELECT * \n" .
"FROM munc_dane {SQL_Where} {SQL_OrderBy}";
            list($this->lugar_nacimiento->BoundColumn, $this->lugar_nacimiento->TextColumn, $this->lugar_nacimiento->DBFormat) = array("Id", "Munc_Depto", "");
            $this->lugar_nacimiento->Required = true;
            $this->fecha_nacimiento = new clsControl(ccsTextBox, "fecha_nacimiento", $CCSLocales->GetText("fecha_nacimiento"), ccsDate, array("yyyy", "/", "mm", "/", "dd"), CCGetRequestParam("fecha_nacimiento", $Method, NULL), $this);
            $this->lugar_residencia = new clsControl(ccsListBox, "lugar_residencia", $CCSLocales->GetText("lugar_residencia"), ccsInteger, "", CCGetRequestParam("lugar_residencia", $Method, NULL), $this);
            $this->lugar_residencia->DSType = dsTable;
            $this->lugar_residencia->DataSource = new clsDBConnection1();
            $this->lugar_residencia->ds = & $this->lugar_residencia->DataSource;
            $this->lugar_residencia->DataSource->SQL = "SELECT * \n" .
"FROM munc_dane {SQL_Where} {SQL_OrderBy}";
            list($this->lugar_residencia->BoundColumn, $this->lugar_residencia->TextColumn, $this->lugar_residencia->DBFormat) = array("Id", "Munc_Depto", "");
            $this->direccion_residencia = new clsControl(ccsTextBox, "direccion_residencia", $CCSLocales->GetText("direccion_residencia"), ccsText, "", CCGetRequestParam("direccion_residencia", $Method, NULL), $this);
            $this->telfijo_cliente_1 = new clsControl(ccsTextBox, "telfijo_cliente_1", $CCSLocales->GetText("telfijo_cliente_1"), ccsText, "", CCGetRequestParam("telfijo_cliente_1", $Method, NULL), $this);
            $this->telfijo_cliente_2 = new clsControl(ccsTextBox, "telfijo_cliente_2", $CCSLocales->GetText("telfijo_cliente_2"), ccsText, "", CCGetRequestParam("telfijo_cliente_2", $Method, NULL), $this);
            $this->telfijo_cliente_3 = new clsControl(ccsTextBox, "telfijo_cliente_3", $CCSLocales->GetText("telfijo_cliente_3"), ccsText, "", CCGetRequestParam("telfijo_cliente_3", $Method, NULL), $this);
            $this->celular_cliente_1 = new clsControl(ccsTextBox, "celular_cliente_1", $CCSLocales->GetText("celular_cliente_1"), ccsText, "", CCGetRequestParam("celular_cliente_1", $Method, NULL), $this);
            $this->celular_cliente_2 = new clsControl(ccsTextBox, "celular_cliente_2", $CCSLocales->GetText("celular_cliente_2"), ccsText, "", CCGetRequestParam("celular_cliente_2", $Method, NULL), $this);
            $this->celular_cliente_3 = new clsControl(ccsTextBox, "celular_cliente_3", $CCSLocales->GetText("celular_cliente_3"), ccsText, "", CCGetRequestParam("celular_cliente_3", $Method, NULL), $this);
            $this->email_cliente_1 = new clsControl(ccsTextBox, "email_cliente_1", $CCSLocales->GetText("email_cliente_1"), ccsText, "", CCGetRequestParam("email_cliente_1", $Method, NULL), $this);
            $this->email_cliente_2 = new clsControl(ccsTextBox, "email_cliente_2", $CCSLocales->GetText("email_cliente_2"), ccsText, "", CCGetRequestParam("email_cliente_2", $Method, NULL), $this);
            $this->email_cliente_3 = new clsControl(ccsTextBox, "email_cliente_3", $CCSLocales->GetText("email_cliente_3"), ccsText, "", CCGetRequestParam("email_cliente_3", $Method, NULL), $this);
            $this->DatePicker_fecha_nacimiento1 = new clsDatePicker("DatePicker_fecha_nacimiento1", "clientes1", "fecha_nacimiento", $this);
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

//Validate Method @6-5CE70BDB
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->prinombre->Validate() && $Validation);
        $Validation = ($this->demasnombres->Validate() && $Validation);
        $Validation = ($this->priapellido->Validate() && $Validation);
        $Validation = ($this->segapellido->Validate() && $Validation);
        $Validation = ($this->tipo_documento->Validate() && $Validation);
        $Validation = ($this->num_documento->Validate() && $Validation);
        $Validation = ($this->lugar_nacimiento->Validate() && $Validation);
        $Validation = ($this->fecha_nacimiento->Validate() && $Validation);
        $Validation = ($this->lugar_residencia->Validate() && $Validation);
        $Validation = ($this->direccion_residencia->Validate() && $Validation);
        $Validation = ($this->telfijo_cliente_1->Validate() && $Validation);
        $Validation = ($this->telfijo_cliente_2->Validate() && $Validation);
        $Validation = ($this->telfijo_cliente_3->Validate() && $Validation);
        $Validation = ($this->celular_cliente_1->Validate() && $Validation);
        $Validation = ($this->celular_cliente_2->Validate() && $Validation);
        $Validation = ($this->celular_cliente_3->Validate() && $Validation);
        $Validation = ($this->email_cliente_1->Validate() && $Validation);
        $Validation = ($this->email_cliente_2->Validate() && $Validation);
        $Validation = ($this->email_cliente_3->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->prinombre->Errors->Count() == 0);
        $Validation =  $Validation && ($this->demasnombres->Errors->Count() == 0);
        $Validation =  $Validation && ($this->priapellido->Errors->Count() == 0);
        $Validation =  $Validation && ($this->segapellido->Errors->Count() == 0);
        $Validation =  $Validation && ($this->tipo_documento->Errors->Count() == 0);
        $Validation =  $Validation && ($this->num_documento->Errors->Count() == 0);
        $Validation =  $Validation && ($this->lugar_nacimiento->Errors->Count() == 0);
        $Validation =  $Validation && ($this->fecha_nacimiento->Errors->Count() == 0);
        $Validation =  $Validation && ($this->lugar_residencia->Errors->Count() == 0);
        $Validation =  $Validation && ($this->direccion_residencia->Errors->Count() == 0);
        $Validation =  $Validation && ($this->telfijo_cliente_1->Errors->Count() == 0);
        $Validation =  $Validation && ($this->telfijo_cliente_2->Errors->Count() == 0);
        $Validation =  $Validation && ($this->telfijo_cliente_3->Errors->Count() == 0);
        $Validation =  $Validation && ($this->celular_cliente_1->Errors->Count() == 0);
        $Validation =  $Validation && ($this->celular_cliente_2->Errors->Count() == 0);
        $Validation =  $Validation && ($this->celular_cliente_3->Errors->Count() == 0);
        $Validation =  $Validation && ($this->email_cliente_1->Errors->Count() == 0);
        $Validation =  $Validation && ($this->email_cliente_2->Errors->Count() == 0);
        $Validation =  $Validation && ($this->email_cliente_3->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @6-020BCE9A
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->prinombre->Errors->Count());
        $errors = ($errors || $this->demasnombres->Errors->Count());
        $errors = ($errors || $this->priapellido->Errors->Count());
        $errors = ($errors || $this->segapellido->Errors->Count());
        $errors = ($errors || $this->tipo_documento->Errors->Count());
        $errors = ($errors || $this->num_documento->Errors->Count());
        $errors = ($errors || $this->lugar_nacimiento->Errors->Count());
        $errors = ($errors || $this->fecha_nacimiento->Errors->Count());
        $errors = ($errors || $this->lugar_residencia->Errors->Count());
        $errors = ($errors || $this->direccion_residencia->Errors->Count());
        $errors = ($errors || $this->telfijo_cliente_1->Errors->Count());
        $errors = ($errors || $this->telfijo_cliente_2->Errors->Count());
        $errors = ($errors || $this->telfijo_cliente_3->Errors->Count());
        $errors = ($errors || $this->celular_cliente_1->Errors->Count());
        $errors = ($errors || $this->celular_cliente_2->Errors->Count());
        $errors = ($errors || $this->celular_cliente_3->Errors->Count());
        $errors = ($errors || $this->email_cliente_1->Errors->Count());
        $errors = ($errors || $this->email_cliente_2->Errors->Count());
        $errors = ($errors || $this->email_cliente_3->Errors->Count());
        $errors = ($errors || $this->DatePicker_fecha_nacimiento1->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @6-36515C7E
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
            $Redirect = "Clientes_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
            if(!CCGetEvent($this->Button_Cancel->CCSEvents, "OnClick", $this->Button_Cancel)) {
                $Redirect = "";
            }
        } else if($this->Validate()) {
            if($this->PressedButton == "Button_Insert") {
                $Redirect = "Clientes_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
                if(!CCGetEvent($this->Button_Insert->CCSEvents, "OnClick", $this->Button_Insert) || !$this->InsertRow()) {
                    $Redirect = "";
                }
            } else if($this->PressedButton == "Button_Update") {
                $Redirect = "Clientes_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
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

//InsertRow Method @6-3E17C2F8
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->prinombre->SetValue($this->prinombre->GetValue(true));
        $this->DataSource->demasnombres->SetValue($this->demasnombres->GetValue(true));
        $this->DataSource->priapellido->SetValue($this->priapellido->GetValue(true));
        $this->DataSource->segapellido->SetValue($this->segapellido->GetValue(true));
        $this->DataSource->tipo_documento->SetValue($this->tipo_documento->GetValue(true));
        $this->DataSource->num_documento->SetValue($this->num_documento->GetValue(true));
        $this->DataSource->lugar_nacimiento->SetValue($this->lugar_nacimiento->GetValue(true));
        $this->DataSource->fecha_nacimiento->SetValue($this->fecha_nacimiento->GetValue(true));
        $this->DataSource->lugar_residencia->SetValue($this->lugar_residencia->GetValue(true));
        $this->DataSource->direccion_residencia->SetValue($this->direccion_residencia->GetValue(true));
        $this->DataSource->telfijo_cliente_1->SetValue($this->telfijo_cliente_1->GetValue(true));
        $this->DataSource->telfijo_cliente_2->SetValue($this->telfijo_cliente_2->GetValue(true));
        $this->DataSource->telfijo_cliente_3->SetValue($this->telfijo_cliente_3->GetValue(true));
        $this->DataSource->celular_cliente_1->SetValue($this->celular_cliente_1->GetValue(true));
        $this->DataSource->celular_cliente_2->SetValue($this->celular_cliente_2->GetValue(true));
        $this->DataSource->celular_cliente_3->SetValue($this->celular_cliente_3->GetValue(true));
        $this->DataSource->email_cliente_1->SetValue($this->email_cliente_1->GetValue(true));
        $this->DataSource->email_cliente_2->SetValue($this->email_cliente_2->GetValue(true));
        $this->DataSource->email_cliente_3->SetValue($this->email_cliente_3->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//UpdateRow Method @6-E99FB6BD
    function UpdateRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeUpdate", $this);
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->prinombre->SetValue($this->prinombre->GetValue(true));
        $this->DataSource->demasnombres->SetValue($this->demasnombres->GetValue(true));
        $this->DataSource->priapellido->SetValue($this->priapellido->GetValue(true));
        $this->DataSource->segapellido->SetValue($this->segapellido->GetValue(true));
        $this->DataSource->tipo_documento->SetValue($this->tipo_documento->GetValue(true));
        $this->DataSource->num_documento->SetValue($this->num_documento->GetValue(true));
        $this->DataSource->lugar_nacimiento->SetValue($this->lugar_nacimiento->GetValue(true));
        $this->DataSource->fecha_nacimiento->SetValue($this->fecha_nacimiento->GetValue(true));
        $this->DataSource->lugar_residencia->SetValue($this->lugar_residencia->GetValue(true));
        $this->DataSource->direccion_residencia->SetValue($this->direccion_residencia->GetValue(true));
        $this->DataSource->telfijo_cliente_1->SetValue($this->telfijo_cliente_1->GetValue(true));
        $this->DataSource->telfijo_cliente_2->SetValue($this->telfijo_cliente_2->GetValue(true));
        $this->DataSource->telfijo_cliente_3->SetValue($this->telfijo_cliente_3->GetValue(true));
        $this->DataSource->celular_cliente_1->SetValue($this->celular_cliente_1->GetValue(true));
        $this->DataSource->celular_cliente_2->SetValue($this->celular_cliente_2->GetValue(true));
        $this->DataSource->celular_cliente_3->SetValue($this->celular_cliente_3->GetValue(true));
        $this->DataSource->email_cliente_1->SetValue($this->email_cliente_1->GetValue(true));
        $this->DataSource->email_cliente_2->SetValue($this->email_cliente_2->GetValue(true));
        $this->DataSource->email_cliente_3->SetValue($this->email_cliente_3->GetValue(true));
        $this->DataSource->Update();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterUpdate", $this);
        return (!$this->CheckErrors());
    }
//End UpdateRow Method

//Show Method @6-8B2D8DF2
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

        $this->tipo_documento->Prepare();
        $this->lugar_nacimiento->Prepare();
        $this->lugar_residencia->Prepare();

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
                    $this->prinombre->SetValue($this->DataSource->prinombre->GetValue());
                    $this->demasnombres->SetValue($this->DataSource->demasnombres->GetValue());
                    $this->priapellido->SetValue($this->DataSource->priapellido->GetValue());
                    $this->segapellido->SetValue($this->DataSource->segapellido->GetValue());
                    $this->tipo_documento->SetValue($this->DataSource->tipo_documento->GetValue());
                    $this->num_documento->SetValue($this->DataSource->num_documento->GetValue());
                    $this->lugar_nacimiento->SetValue($this->DataSource->lugar_nacimiento->GetValue());
                    $this->fecha_nacimiento->SetValue($this->DataSource->fecha_nacimiento->GetValue());
                    $this->lugar_residencia->SetValue($this->DataSource->lugar_residencia->GetValue());
                    $this->direccion_residencia->SetValue($this->DataSource->direccion_residencia->GetValue());
                    $this->telfijo_cliente_1->SetValue($this->DataSource->telfijo_cliente_1->GetValue());
                    $this->telfijo_cliente_2->SetValue($this->DataSource->telfijo_cliente_2->GetValue());
                    $this->telfijo_cliente_3->SetValue($this->DataSource->telfijo_cliente_3->GetValue());
                    $this->celular_cliente_1->SetValue($this->DataSource->celular_cliente_1->GetValue());
                    $this->celular_cliente_2->SetValue($this->DataSource->celular_cliente_2->GetValue());
                    $this->celular_cliente_3->SetValue($this->DataSource->celular_cliente_3->GetValue());
                    $this->email_cliente_1->SetValue($this->DataSource->email_cliente_1->GetValue());
                    $this->email_cliente_2->SetValue($this->DataSource->email_cliente_2->GetValue());
                    $this->email_cliente_3->SetValue($this->DataSource->email_cliente_3->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->prinombre->Errors->ToString());
            $Error = ComposeStrings($Error, $this->demasnombres->Errors->ToString());
            $Error = ComposeStrings($Error, $this->priapellido->Errors->ToString());
            $Error = ComposeStrings($Error, $this->segapellido->Errors->ToString());
            $Error = ComposeStrings($Error, $this->tipo_documento->Errors->ToString());
            $Error = ComposeStrings($Error, $this->num_documento->Errors->ToString());
            $Error = ComposeStrings($Error, $this->lugar_nacimiento->Errors->ToString());
            $Error = ComposeStrings($Error, $this->fecha_nacimiento->Errors->ToString());
            $Error = ComposeStrings($Error, $this->lugar_residencia->Errors->ToString());
            $Error = ComposeStrings($Error, $this->direccion_residencia->Errors->ToString());
            $Error = ComposeStrings($Error, $this->telfijo_cliente_1->Errors->ToString());
            $Error = ComposeStrings($Error, $this->telfijo_cliente_2->Errors->ToString());
            $Error = ComposeStrings($Error, $this->telfijo_cliente_3->Errors->ToString());
            $Error = ComposeStrings($Error, $this->celular_cliente_1->Errors->ToString());
            $Error = ComposeStrings($Error, $this->celular_cliente_2->Errors->ToString());
            $Error = ComposeStrings($Error, $this->celular_cliente_3->Errors->ToString());
            $Error = ComposeStrings($Error, $this->email_cliente_1->Errors->ToString());
            $Error = ComposeStrings($Error, $this->email_cliente_2->Errors->ToString());
            $Error = ComposeStrings($Error, $this->email_cliente_3->Errors->ToString());
            $Error = ComposeStrings($Error, $this->DatePicker_fecha_nacimiento1->Errors->ToString());
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

        $this->Button_Insert->Show();
        $this->Button_Update->Show();
        $this->Button_Cancel->Show();
        $this->prinombre->Show();
        $this->demasnombres->Show();
        $this->priapellido->Show();
        $this->segapellido->Show();
        $this->tipo_documento->Show();
        $this->num_documento->Show();
        $this->lugar_nacimiento->Show();
        $this->fecha_nacimiento->Show();
        $this->lugar_residencia->Show();
        $this->direccion_residencia->Show();
        $this->telfijo_cliente_1->Show();
        $this->telfijo_cliente_2->Show();
        $this->telfijo_cliente_3->Show();
        $this->celular_cliente_1->Show();
        $this->celular_cliente_2->Show();
        $this->celular_cliente_3->Show();
        $this->email_cliente_1->Show();
        $this->email_cliente_2->Show();
        $this->email_cliente_3->Show();
        $this->DatePicker_fecha_nacimiento1->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End clientes1 Class @6-FCB6E20C

class clsclientes1DataSource extends clsDBConnection1 {  //clientes1DataSource Class @6-187F925B

//DataSource Variables @6-908727F6
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
    public $prinombre;
    public $demasnombres;
    public $priapellido;
    public $segapellido;
    public $tipo_documento;
    public $num_documento;
    public $lugar_nacimiento;
    public $fecha_nacimiento;
    public $lugar_residencia;
    public $direccion_residencia;
    public $telfijo_cliente_1;
    public $telfijo_cliente_2;
    public $telfijo_cliente_3;
    public $celular_cliente_1;
    public $celular_cliente_2;
    public $celular_cliente_3;
    public $email_cliente_1;
    public $email_cliente_2;
    public $email_cliente_3;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-31D7894A
    function clsclientes1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record clientes1/Error";
        $this->Initialize();
        $this->prinombre = new clsField("prinombre", ccsText, "");
        
        $this->demasnombres = new clsField("demasnombres", ccsText, "");
        
        $this->priapellido = new clsField("priapellido", ccsText, "");
        
        $this->segapellido = new clsField("segapellido", ccsText, "");
        
        $this->tipo_documento = new clsField("tipo_documento", ccsText, "");
        
        $this->num_documento = new clsField("num_documento", ccsText, "");
        
        $this->lugar_nacimiento = new clsField("lugar_nacimiento", ccsInteger, "");
        
        $this->fecha_nacimiento = new clsField("fecha_nacimiento", ccsDate, $this->DateFormat);
        
        $this->lugar_residencia = new clsField("lugar_residencia", ccsInteger, "");
        
        $this->direccion_residencia = new clsField("direccion_residencia", ccsText, "");
        
        $this->telfijo_cliente_1 = new clsField("telfijo_cliente_1", ccsText, "");
        
        $this->telfijo_cliente_2 = new clsField("telfijo_cliente_2", ccsText, "");
        
        $this->telfijo_cliente_3 = new clsField("telfijo_cliente_3", ccsText, "");
        
        $this->celular_cliente_1 = new clsField("celular_cliente_1", ccsText, "");
        
        $this->celular_cliente_2 = new clsField("celular_cliente_2", ccsText, "");
        
        $this->celular_cliente_3 = new clsField("celular_cliente_3", ccsText, "");
        
        $this->email_cliente_1 = new clsField("email_cliente_1", ccsText, "");
        
        $this->email_cliente_2 = new clsField("email_cliente_2", ccsText, "");
        
        $this->email_cliente_3 = new clsField("email_cliente_3", ccsText, "");
        

        $this->InsertFields["prinombre"] = array("Name" => "prinombre", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["demasnombres"] = array("Name" => "demasnombres", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["priapellido"] = array("Name" => "priapellido", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["segapellido"] = array("Name" => "segapellido", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["tipo_documento"] = array("Name" => "tipo_documento", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["num_documento"] = array("Name" => "num_documento", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["lugar_nacimiento"] = array("Name" => "lugar_nacimiento", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["fecha_nacimiento"] = array("Name" => "fecha_nacimiento", "Value" => "", "DataType" => ccsDate, "OmitIfEmpty" => 1);
        $this->InsertFields["lugar_residencia"] = array("Name" => "lugar_residencia", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["direccion_residencia"] = array("Name" => "direccion_residencia", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["telfijo_cliente_1"] = array("Name" => "telfijo_cliente_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["telfijo_cliente_2"] = array("Name" => "telfijo_cliente_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["telfijo_cliente_3"] = array("Name" => "telfijo_cliente_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["celular_cliente_1"] = array("Name" => "celular_cliente_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["celular_cliente_2"] = array("Name" => "celular_cliente_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["celular_cliente_3"] = array("Name" => "celular_cliente_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["email_cliente_1"] = array("Name" => "email_cliente_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["email_cliente_2"] = array("Name" => "email_cliente_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["email_cliente_3"] = array("Name" => "email_cliente_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["prinombre"] = array("Name" => "prinombre", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["demasnombres"] = array("Name" => "demasnombres", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["priapellido"] = array("Name" => "priapellido", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["segapellido"] = array("Name" => "segapellido", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["tipo_documento"] = array("Name" => "tipo_documento", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["num_documento"] = array("Name" => "num_documento", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["lugar_nacimiento"] = array("Name" => "lugar_nacimiento", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["fecha_nacimiento"] = array("Name" => "fecha_nacimiento", "Value" => "", "DataType" => ccsDate, "OmitIfEmpty" => 1);
        $this->UpdateFields["lugar_residencia"] = array("Name" => "lugar_residencia", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["direccion_residencia"] = array("Name" => "direccion_residencia", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["telfijo_cliente_1"] = array("Name" => "telfijo_cliente_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["telfijo_cliente_2"] = array("Name" => "telfijo_cliente_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["telfijo_cliente_3"] = array("Name" => "telfijo_cliente_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["celular_cliente_1"] = array("Name" => "celular_cliente_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["celular_cliente_2"] = array("Name" => "celular_cliente_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["celular_cliente_3"] = array("Name" => "celular_cliente_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["email_cliente_1"] = array("Name" => "email_cliente_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["email_cliente_2"] = array("Name" => "email_cliente_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["email_cliente_3"] = array("Name" => "email_cliente_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
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

//Open Method @6-07B99F3C
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM clientes {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @6-68F733D0
    function SetValues()
    {
        $this->prinombre->SetDBValue($this->f("prinombre"));
        $this->demasnombres->SetDBValue($this->f("demasnombres"));
        $this->priapellido->SetDBValue($this->f("priapellido"));
        $this->segapellido->SetDBValue($this->f("segapellido"));
        $this->tipo_documento->SetDBValue($this->f("tipo_documento"));
        $this->num_documento->SetDBValue($this->f("num_documento"));
        $this->lugar_nacimiento->SetDBValue(trim($this->f("lugar_nacimiento")));
        $this->fecha_nacimiento->SetDBValue(trim($this->f("fecha_nacimiento")));
        $this->lugar_residencia->SetDBValue(trim($this->f("lugar_residencia")));
        $this->direccion_residencia->SetDBValue($this->f("direccion_residencia"));
        $this->telfijo_cliente_1->SetDBValue($this->f("telfijo_cliente_1"));
        $this->telfijo_cliente_2->SetDBValue($this->f("telfijo_cliente_2"));
        $this->telfijo_cliente_3->SetDBValue($this->f("telfijo_cliente_3"));
        $this->celular_cliente_1->SetDBValue($this->f("celular_cliente_1"));
        $this->celular_cliente_2->SetDBValue($this->f("celular_cliente_2"));
        $this->celular_cliente_3->SetDBValue($this->f("celular_cliente_3"));
        $this->email_cliente_1->SetDBValue($this->f("email_cliente_1"));
        $this->email_cliente_2->SetDBValue($this->f("email_cliente_2"));
        $this->email_cliente_3->SetDBValue($this->f("email_cliente_3"));
    }
//End SetValues Method

//Insert Method @6-9C3F39A9
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["prinombre"]["Value"] = $this->prinombre->GetDBValue(true);
        $this->InsertFields["demasnombres"]["Value"] = $this->demasnombres->GetDBValue(true);
        $this->InsertFields["priapellido"]["Value"] = $this->priapellido->GetDBValue(true);
        $this->InsertFields["segapellido"]["Value"] = $this->segapellido->GetDBValue(true);
        $this->InsertFields["tipo_documento"]["Value"] = $this->tipo_documento->GetDBValue(true);
        $this->InsertFields["num_documento"]["Value"] = $this->num_documento->GetDBValue(true);
        $this->InsertFields["lugar_nacimiento"]["Value"] = $this->lugar_nacimiento->GetDBValue(true);
        $this->InsertFields["fecha_nacimiento"]["Value"] = $this->fecha_nacimiento->GetDBValue(true);
        $this->InsertFields["lugar_residencia"]["Value"] = $this->lugar_residencia->GetDBValue(true);
        $this->InsertFields["direccion_residencia"]["Value"] = $this->direccion_residencia->GetDBValue(true);
        $this->InsertFields["telfijo_cliente_1"]["Value"] = $this->telfijo_cliente_1->GetDBValue(true);
        $this->InsertFields["telfijo_cliente_2"]["Value"] = $this->telfijo_cliente_2->GetDBValue(true);
        $this->InsertFields["telfijo_cliente_3"]["Value"] = $this->telfijo_cliente_3->GetDBValue(true);
        $this->InsertFields["celular_cliente_1"]["Value"] = $this->celular_cliente_1->GetDBValue(true);
        $this->InsertFields["celular_cliente_2"]["Value"] = $this->celular_cliente_2->GetDBValue(true);
        $this->InsertFields["celular_cliente_3"]["Value"] = $this->celular_cliente_3->GetDBValue(true);
        $this->InsertFields["email_cliente_1"]["Value"] = $this->email_cliente_1->GetDBValue(true);
        $this->InsertFields["email_cliente_2"]["Value"] = $this->email_cliente_2->GetDBValue(true);
        $this->InsertFields["email_cliente_3"]["Value"] = $this->email_cliente_3->GetDBValue(true);
        $this->SQL = CCBuildInsert("clientes", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @6-155461AA
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $this->UpdateFields["prinombre"]["Value"] = $this->prinombre->GetDBValue(true);
        $this->UpdateFields["demasnombres"]["Value"] = $this->demasnombres->GetDBValue(true);
        $this->UpdateFields["priapellido"]["Value"] = $this->priapellido->GetDBValue(true);
        $this->UpdateFields["segapellido"]["Value"] = $this->segapellido->GetDBValue(true);
        $this->UpdateFields["tipo_documento"]["Value"] = $this->tipo_documento->GetDBValue(true);
        $this->UpdateFields["num_documento"]["Value"] = $this->num_documento->GetDBValue(true);
        $this->UpdateFields["lugar_nacimiento"]["Value"] = $this->lugar_nacimiento->GetDBValue(true);
        $this->UpdateFields["fecha_nacimiento"]["Value"] = $this->fecha_nacimiento->GetDBValue(true);
        $this->UpdateFields["lugar_residencia"]["Value"] = $this->lugar_residencia->GetDBValue(true);
        $this->UpdateFields["direccion_residencia"]["Value"] = $this->direccion_residencia->GetDBValue(true);
        $this->UpdateFields["telfijo_cliente_1"]["Value"] = $this->telfijo_cliente_1->GetDBValue(true);
        $this->UpdateFields["telfijo_cliente_2"]["Value"] = $this->telfijo_cliente_2->GetDBValue(true);
        $this->UpdateFields["telfijo_cliente_3"]["Value"] = $this->telfijo_cliente_3->GetDBValue(true);
        $this->UpdateFields["celular_cliente_1"]["Value"] = $this->celular_cliente_1->GetDBValue(true);
        $this->UpdateFields["celular_cliente_2"]["Value"] = $this->celular_cliente_2->GetDBValue(true);
        $this->UpdateFields["celular_cliente_3"]["Value"] = $this->celular_cliente_3->GetDBValue(true);
        $this->UpdateFields["email_cliente_1"]["Value"] = $this->email_cliente_1->GetDBValue(true);
        $this->UpdateFields["email_cliente_2"]["Value"] = $this->email_cliente_2->GetDBValue(true);
        $this->UpdateFields["email_cliente_3"]["Value"] = $this->email_cliente_3->GetDBValue(true);
        $this->SQL = CCBuildUpdate("clientes", $this->UpdateFields, $this);
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

} //End clientes1DataSource Class @6-FCB6E20C

//Initialize Page @1-AF23E785
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
$TemplateFileName = "Crud_Clientes.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$PathToRootOpt = "";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|js/jquery/ui/jquery.ui.core.js|js/jquery/ui/jquery.ui.widget.js|js/jquery/ui/jquery.ui.datepicker.js|js/jquery/datepicker/ccs-date-timepicker.js|";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-F059728D
include_once("./Crud_Clientes_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-43FC0634
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
$clientes1 = new clsRecordclientes1("", $MainPage);
$Panel1 = new clsPanel("Panel1", $MainPage);
$Label1 = new clsControl(ccsLabel, "Label1", "Label1", ccsText, "", CCGetRequestParam("Label1", ccsGet, NULL), $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Logout = new clsControl(ccsLink, "Logout", "Logout", ccsText, "", CCGetRequestParam("Logout", ccsGet, NULL), $MainPage);
$Logout->Page = "login.php";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "Clientes_mant.php";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->clientes1 = & $clientes1;
$MainPage->Panel1 = & $Panel1;
$MainPage->Label1 = & $Label1;
$MainPage->Menu = & $Menu;
$MainPage->Logout = & $Logout;
$MainPage->Sidebar1 = & $Sidebar1;
$MainPage->Link1 = & $Link1;
$Content->AddComponent("clientes1", $clientes1);
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("Label1", $Label1);
$Menu->AddComponent("Logout", $Logout);
$Sidebar1->AddComponent("Link1", $Link1);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("Registro y edición de clientes");
$Logout->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Logout->Parameters = CCAddParam($Logout->Parameters, "Logout", "True");
$clientes1->Initialize();
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

//Execute Components @1-9DB60E2F
$MasterPage->Operations();
$clientes1->Operation();
//End Execute Components

//Go to destination page @1-43D0C670
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($clientes1);
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

//Unload Page @1-46056472
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($clientes1);
unset($Tpl);
//End Unload Page


?>
