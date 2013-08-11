<?php
//Include Common Files @1-85C597E4
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "crud_provee.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsRecordproveedores1 { //proveedores1 Class @6-F284CF0B

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

//Class_Initialize Event @6-1C456E4B
    function clsRecordproveedores1($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record proveedores1/Error";
        $this->DataSource = new clsproveedores1DataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "proveedores1";
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
            $this->razon_social = new clsControl(ccsTextBox, "razon_social", $CCSLocales->GetText("razon_social"), ccsText, "", CCGetRequestParam("razon_social", $Method, NULL), $this);
            $this->nombre = new clsControl(ccsTextBox, "nombre", $CCSLocales->GetText("nombre"), ccsText, "", CCGetRequestParam("nombre", $Method, NULL), $this);
            $this->nit = new clsControl(ccsTextBox, "nit", $CCSLocales->GetText("nit"), ccsText, "", CCGetRequestParam("nit", $Method, NULL), $this);
            $this->slogan = new clsControl(ccsTextBox, "slogan", $CCSLocales->GetText("slogan"), ccsText, "", CCGetRequestParam("slogan", $Method, NULL), $this);
            $this->direccion_1 = new clsControl(ccsTextBox, "direccion_1", $CCSLocales->GetText("direccion_1"), ccsText, "", CCGetRequestParam("direccion_1", $Method, NULL), $this);
            $this->direccion_2 = new clsControl(ccsTextBox, "direccion_2", $CCSLocales->GetText("direccion_2"), ccsText, "", CCGetRequestParam("direccion_2", $Method, NULL), $this);
            $this->direccion_3 = new clsControl(ccsTextBox, "direccion_3", $CCSLocales->GetText("direccion_3"), ccsText, "", CCGetRequestParam("direccion_3", $Method, NULL), $this);
            $this->telfijo_1 = new clsControl(ccsTextBox, "telfijo_1", $CCSLocales->GetText("telfijo_1"), ccsText, "", CCGetRequestParam("telfijo_1", $Method, NULL), $this);
            $this->telfijo_2 = new clsControl(ccsTextBox, "telfijo_2", $CCSLocales->GetText("telfijo_2"), ccsText, "", CCGetRequestParam("telfijo_2", $Method, NULL), $this);
            $this->telfijo_3 = new clsControl(ccsTextBox, "telfijo_3", $CCSLocales->GetText("telfijo_3"), ccsText, "", CCGetRequestParam("telfijo_3", $Method, NULL), $this);
            $this->celular_1 = new clsControl(ccsTextBox, "celular_1", $CCSLocales->GetText("celular_1"), ccsText, "", CCGetRequestParam("celular_1", $Method, NULL), $this);
            $this->celular_2 = new clsControl(ccsTextBox, "celular_2", $CCSLocales->GetText("celular_2"), ccsText, "", CCGetRequestParam("celular_2", $Method, NULL), $this);
            $this->celular_3 = new clsControl(ccsTextBox, "celular_3", $CCSLocales->GetText("celular_3"), ccsText, "", CCGetRequestParam("celular_3", $Method, NULL), $this);
            $this->representante_legal = new clsControl(ccsTextBox, "representante_legal", $CCSLocales->GetText("representante_legal"), ccsText, "", CCGetRequestParam("representante_legal", $Method, NULL), $this);
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

//Validate Method @6-7AF6A844
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->razon_social->Validate() && $Validation);
        $Validation = ($this->nombre->Validate() && $Validation);
        $Validation = ($this->nit->Validate() && $Validation);
        $Validation = ($this->slogan->Validate() && $Validation);
        $Validation = ($this->direccion_1->Validate() && $Validation);
        $Validation = ($this->direccion_2->Validate() && $Validation);
        $Validation = ($this->direccion_3->Validate() && $Validation);
        $Validation = ($this->telfijo_1->Validate() && $Validation);
        $Validation = ($this->telfijo_2->Validate() && $Validation);
        $Validation = ($this->telfijo_3->Validate() && $Validation);
        $Validation = ($this->celular_1->Validate() && $Validation);
        $Validation = ($this->celular_2->Validate() && $Validation);
        $Validation = ($this->celular_3->Validate() && $Validation);
        $Validation = ($this->representante_legal->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->razon_social->Errors->Count() == 0);
        $Validation =  $Validation && ($this->nombre->Errors->Count() == 0);
        $Validation =  $Validation && ($this->nit->Errors->Count() == 0);
        $Validation =  $Validation && ($this->slogan->Errors->Count() == 0);
        $Validation =  $Validation && ($this->direccion_1->Errors->Count() == 0);
        $Validation =  $Validation && ($this->direccion_2->Errors->Count() == 0);
        $Validation =  $Validation && ($this->direccion_3->Errors->Count() == 0);
        $Validation =  $Validation && ($this->telfijo_1->Errors->Count() == 0);
        $Validation =  $Validation && ($this->telfijo_2->Errors->Count() == 0);
        $Validation =  $Validation && ($this->telfijo_3->Errors->Count() == 0);
        $Validation =  $Validation && ($this->celular_1->Errors->Count() == 0);
        $Validation =  $Validation && ($this->celular_2->Errors->Count() == 0);
        $Validation =  $Validation && ($this->celular_3->Errors->Count() == 0);
        $Validation =  $Validation && ($this->representante_legal->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @6-493E6AAD
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->razon_social->Errors->Count());
        $errors = ($errors || $this->nombre->Errors->Count());
        $errors = ($errors || $this->nit->Errors->Count());
        $errors = ($errors || $this->slogan->Errors->Count());
        $errors = ($errors || $this->direccion_1->Errors->Count());
        $errors = ($errors || $this->direccion_2->Errors->Count());
        $errors = ($errors || $this->direccion_3->Errors->Count());
        $errors = ($errors || $this->telfijo_1->Errors->Count());
        $errors = ($errors || $this->telfijo_2->Errors->Count());
        $errors = ($errors || $this->telfijo_3->Errors->Count());
        $errors = ($errors || $this->celular_1->Errors->Count());
        $errors = ($errors || $this->celular_2->Errors->Count());
        $errors = ($errors || $this->celular_3->Errors->Count());
        $errors = ($errors || $this->representante_legal->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @6-E56E67A4
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
            $Redirect = "provee_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
            if(!CCGetEvent($this->Button_Cancel->CCSEvents, "OnClick", $this->Button_Cancel)) {
                $Redirect = "";
            }
        } else if($this->Validate()) {
            if($this->PressedButton == "Button_Insert") {
                $Redirect = "provee_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
                if(!CCGetEvent($this->Button_Insert->CCSEvents, "OnClick", $this->Button_Insert) || !$this->InsertRow()) {
                    $Redirect = "";
                }
            } else if($this->PressedButton == "Button_Update") {
                $Redirect = "provee_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
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

//InsertRow Method @6-82DB568C
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->razon_social->SetValue($this->razon_social->GetValue(true));
        $this->DataSource->nombre->SetValue($this->nombre->GetValue(true));
        $this->DataSource->nit->SetValue($this->nit->GetValue(true));
        $this->DataSource->slogan->SetValue($this->slogan->GetValue(true));
        $this->DataSource->direccion_1->SetValue($this->direccion_1->GetValue(true));
        $this->DataSource->direccion_2->SetValue($this->direccion_2->GetValue(true));
        $this->DataSource->direccion_3->SetValue($this->direccion_3->GetValue(true));
        $this->DataSource->telfijo_1->SetValue($this->telfijo_1->GetValue(true));
        $this->DataSource->telfijo_2->SetValue($this->telfijo_2->GetValue(true));
        $this->DataSource->telfijo_3->SetValue($this->telfijo_3->GetValue(true));
        $this->DataSource->celular_1->SetValue($this->celular_1->GetValue(true));
        $this->DataSource->celular_2->SetValue($this->celular_2->GetValue(true));
        $this->DataSource->celular_3->SetValue($this->celular_3->GetValue(true));
        $this->DataSource->representante_legal->SetValue($this->representante_legal->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//UpdateRow Method @6-9739F0FD
    function UpdateRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeUpdate", $this);
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->razon_social->SetValue($this->razon_social->GetValue(true));
        $this->DataSource->nombre->SetValue($this->nombre->GetValue(true));
        $this->DataSource->nit->SetValue($this->nit->GetValue(true));
        $this->DataSource->slogan->SetValue($this->slogan->GetValue(true));
        $this->DataSource->direccion_1->SetValue($this->direccion_1->GetValue(true));
        $this->DataSource->direccion_2->SetValue($this->direccion_2->GetValue(true));
        $this->DataSource->direccion_3->SetValue($this->direccion_3->GetValue(true));
        $this->DataSource->telfijo_1->SetValue($this->telfijo_1->GetValue(true));
        $this->DataSource->telfijo_2->SetValue($this->telfijo_2->GetValue(true));
        $this->DataSource->telfijo_3->SetValue($this->telfijo_3->GetValue(true));
        $this->DataSource->celular_1->SetValue($this->celular_1->GetValue(true));
        $this->DataSource->celular_2->SetValue($this->celular_2->GetValue(true));
        $this->DataSource->celular_3->SetValue($this->celular_3->GetValue(true));
        $this->DataSource->representante_legal->SetValue($this->representante_legal->GetValue(true));
        $this->DataSource->Update();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterUpdate", $this);
        return (!$this->CheckErrors());
    }
//End UpdateRow Method

//Show Method @6-E56236A1
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
                    $this->razon_social->SetValue($this->DataSource->razon_social->GetValue());
                    $this->nombre->SetValue($this->DataSource->nombre->GetValue());
                    $this->nit->SetValue($this->DataSource->nit->GetValue());
                    $this->slogan->SetValue($this->DataSource->slogan->GetValue());
                    $this->direccion_1->SetValue($this->DataSource->direccion_1->GetValue());
                    $this->direccion_2->SetValue($this->DataSource->direccion_2->GetValue());
                    $this->direccion_3->SetValue($this->DataSource->direccion_3->GetValue());
                    $this->telfijo_1->SetValue($this->DataSource->telfijo_1->GetValue());
                    $this->telfijo_2->SetValue($this->DataSource->telfijo_2->GetValue());
                    $this->telfijo_3->SetValue($this->DataSource->telfijo_3->GetValue());
                    $this->celular_1->SetValue($this->DataSource->celular_1->GetValue());
                    $this->celular_2->SetValue($this->DataSource->celular_2->GetValue());
                    $this->celular_3->SetValue($this->DataSource->celular_3->GetValue());
                    $this->representante_legal->SetValue($this->DataSource->representante_legal->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->razon_social->Errors->ToString());
            $Error = ComposeStrings($Error, $this->nombre->Errors->ToString());
            $Error = ComposeStrings($Error, $this->nit->Errors->ToString());
            $Error = ComposeStrings($Error, $this->slogan->Errors->ToString());
            $Error = ComposeStrings($Error, $this->direccion_1->Errors->ToString());
            $Error = ComposeStrings($Error, $this->direccion_2->Errors->ToString());
            $Error = ComposeStrings($Error, $this->direccion_3->Errors->ToString());
            $Error = ComposeStrings($Error, $this->telfijo_1->Errors->ToString());
            $Error = ComposeStrings($Error, $this->telfijo_2->Errors->ToString());
            $Error = ComposeStrings($Error, $this->telfijo_3->Errors->ToString());
            $Error = ComposeStrings($Error, $this->celular_1->Errors->ToString());
            $Error = ComposeStrings($Error, $this->celular_2->Errors->ToString());
            $Error = ComposeStrings($Error, $this->celular_3->Errors->ToString());
            $Error = ComposeStrings($Error, $this->representante_legal->Errors->ToString());
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
        $this->razon_social->Show();
        $this->nombre->Show();
        $this->nit->Show();
        $this->slogan->Show();
        $this->direccion_1->Show();
        $this->direccion_2->Show();
        $this->direccion_3->Show();
        $this->telfijo_1->Show();
        $this->telfijo_2->Show();
        $this->telfijo_3->Show();
        $this->celular_1->Show();
        $this->celular_2->Show();
        $this->celular_3->Show();
        $this->representante_legal->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End proveedores1 Class @6-FCB6E20C

class clsproveedores1DataSource extends clsDBConnection1 {  //proveedores1DataSource Class @6-B9F86BEE

//DataSource Variables @6-E5A9CF0F
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
    public $razon_social;
    public $nombre;
    public $nit;
    public $slogan;
    public $direccion_1;
    public $direccion_2;
    public $direccion_3;
    public $telfijo_1;
    public $telfijo_2;
    public $telfijo_3;
    public $celular_1;
    public $celular_2;
    public $celular_3;
    public $representante_legal;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-5DDC4E3A
    function clsproveedores1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record proveedores1/Error";
        $this->Initialize();
        $this->razon_social = new clsField("razon_social", ccsText, "");
        
        $this->nombre = new clsField("nombre", ccsText, "");
        
        $this->nit = new clsField("nit", ccsText, "");
        
        $this->slogan = new clsField("slogan", ccsText, "");
        
        $this->direccion_1 = new clsField("direccion_1", ccsText, "");
        
        $this->direccion_2 = new clsField("direccion_2", ccsText, "");
        
        $this->direccion_3 = new clsField("direccion_3", ccsText, "");
        
        $this->telfijo_1 = new clsField("telfijo_1", ccsText, "");
        
        $this->telfijo_2 = new clsField("telfijo_2", ccsText, "");
        
        $this->telfijo_3 = new clsField("telfijo_3", ccsText, "");
        
        $this->celular_1 = new clsField("celular_1", ccsText, "");
        
        $this->celular_2 = new clsField("celular_2", ccsText, "");
        
        $this->celular_3 = new clsField("celular_3", ccsText, "");
        
        $this->representante_legal = new clsField("representante_legal", ccsText, "");
        

        $this->InsertFields["razon_social"] = array("Name" => "razon_social", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["nombre"] = array("Name" => "nombre", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["nit"] = array("Name" => "nit", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["slogan"] = array("Name" => "slogan", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["direccion_1"] = array("Name" => "direccion_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["direccion_2"] = array("Name" => "direccion_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["direccion_3"] = array("Name" => "direccion_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["telfijo_1"] = array("Name" => "telfijo_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["telfijo_2"] = array("Name" => "telfijo_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["telfijo_3"] = array("Name" => "telfijo_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["celular_1"] = array("Name" => "celular_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["celular_2"] = array("Name" => "celular_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["celular_3"] = array("Name" => "celular_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["representante_legal"] = array("Name" => "representante_legal", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["razon_social"] = array("Name" => "razon_social", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["nombre"] = array("Name" => "nombre", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["nit"] = array("Name" => "nit", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["slogan"] = array("Name" => "slogan", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["direccion_1"] = array("Name" => "direccion_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["direccion_2"] = array("Name" => "direccion_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["direccion_3"] = array("Name" => "direccion_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["telfijo_1"] = array("Name" => "telfijo_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["telfijo_2"] = array("Name" => "telfijo_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["telfijo_3"] = array("Name" => "telfijo_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["celular_1"] = array("Name" => "celular_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["celular_2"] = array("Name" => "celular_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["celular_3"] = array("Name" => "celular_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["representante_legal"] = array("Name" => "representante_legal", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
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

//Open Method @6-D95FA80E
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM proveedores {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @6-7F28CB08
    function SetValues()
    {
        $this->razon_social->SetDBValue($this->f("razon_social"));
        $this->nombre->SetDBValue($this->f("nombre"));
        $this->nit->SetDBValue($this->f("nit"));
        $this->slogan->SetDBValue($this->f("slogan"));
        $this->direccion_1->SetDBValue($this->f("direccion_1"));
        $this->direccion_2->SetDBValue($this->f("direccion_2"));
        $this->direccion_3->SetDBValue($this->f("direccion_3"));
        $this->telfijo_1->SetDBValue($this->f("telfijo_1"));
        $this->telfijo_2->SetDBValue($this->f("telfijo_2"));
        $this->telfijo_3->SetDBValue($this->f("telfijo_3"));
        $this->celular_1->SetDBValue($this->f("celular_1"));
        $this->celular_2->SetDBValue($this->f("celular_2"));
        $this->celular_3->SetDBValue($this->f("celular_3"));
        $this->representante_legal->SetDBValue($this->f("representante_legal"));
    }
//End SetValues Method

//Insert Method @6-40FA0BA7
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["razon_social"]["Value"] = $this->razon_social->GetDBValue(true);
        $this->InsertFields["nombre"]["Value"] = $this->nombre->GetDBValue(true);
        $this->InsertFields["nit"]["Value"] = $this->nit->GetDBValue(true);
        $this->InsertFields["slogan"]["Value"] = $this->slogan->GetDBValue(true);
        $this->InsertFields["direccion_1"]["Value"] = $this->direccion_1->GetDBValue(true);
        $this->InsertFields["direccion_2"]["Value"] = $this->direccion_2->GetDBValue(true);
        $this->InsertFields["direccion_3"]["Value"] = $this->direccion_3->GetDBValue(true);
        $this->InsertFields["telfijo_1"]["Value"] = $this->telfijo_1->GetDBValue(true);
        $this->InsertFields["telfijo_2"]["Value"] = $this->telfijo_2->GetDBValue(true);
        $this->InsertFields["telfijo_3"]["Value"] = $this->telfijo_3->GetDBValue(true);
        $this->InsertFields["celular_1"]["Value"] = $this->celular_1->GetDBValue(true);
        $this->InsertFields["celular_2"]["Value"] = $this->celular_2->GetDBValue(true);
        $this->InsertFields["celular_3"]["Value"] = $this->celular_3->GetDBValue(true);
        $this->InsertFields["representante_legal"]["Value"] = $this->representante_legal->GetDBValue(true);
        $this->SQL = CCBuildInsert("proveedores", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @6-EDD3D60F
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $this->UpdateFields["razon_social"]["Value"] = $this->razon_social->GetDBValue(true);
        $this->UpdateFields["nombre"]["Value"] = $this->nombre->GetDBValue(true);
        $this->UpdateFields["nit"]["Value"] = $this->nit->GetDBValue(true);
        $this->UpdateFields["slogan"]["Value"] = $this->slogan->GetDBValue(true);
        $this->UpdateFields["direccion_1"]["Value"] = $this->direccion_1->GetDBValue(true);
        $this->UpdateFields["direccion_2"]["Value"] = $this->direccion_2->GetDBValue(true);
        $this->UpdateFields["direccion_3"]["Value"] = $this->direccion_3->GetDBValue(true);
        $this->UpdateFields["telfijo_1"]["Value"] = $this->telfijo_1->GetDBValue(true);
        $this->UpdateFields["telfijo_2"]["Value"] = $this->telfijo_2->GetDBValue(true);
        $this->UpdateFields["telfijo_3"]["Value"] = $this->telfijo_3->GetDBValue(true);
        $this->UpdateFields["celular_1"]["Value"] = $this->celular_1->GetDBValue(true);
        $this->UpdateFields["celular_2"]["Value"] = $this->celular_2->GetDBValue(true);
        $this->UpdateFields["celular_3"]["Value"] = $this->celular_3->GetDBValue(true);
        $this->UpdateFields["representante_legal"]["Value"] = $this->representante_legal->GetDBValue(true);
        $this->SQL = CCBuildUpdate("proveedores", $this->UpdateFields, $this);
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

} //End proveedores1DataSource Class @6-FCB6E20C

//Initialize Page @1-A34CF007
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
$TemplateFileName = "crud_provee.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-4BAC278C
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
$proveedores1 = new clsRecordproveedores1("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->proveedores1 = & $proveedores1;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
$Content->AddComponent("proveedores1", $proveedores1);
$proveedores1->Initialize();

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

//Execute Components @1-92F089AA
$MasterPage->Operations();
$proveedores1->Operation();
//End Execute Components

//Go to destination page @1-81C53F61
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($proveedores1);
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

//Unload Page @1-E6C7977C
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($proveedores1);
unset($Tpl);
//End Unload Page


?>
