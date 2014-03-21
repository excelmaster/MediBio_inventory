<?php
//Include Common Files @1-301AEEC9
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "CrudProducto.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsRecordproductos { //productos Class @6-36DBC647

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

//Class_Initialize Event @6-3E63399E
    function clsRecordproductos($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record productos/Error";
        $this->DataSource = new clsproductosDataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "productos";
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
            $this->name_producto = new clsControl(ccsTextBox, "name_producto", $CCSLocales->GetText("name_producto"), ccsText, "", CCGetRequestParam("name_producto", $Method, NULL), $this);
            $this->name_producto->Required = true;
            $this->categoria_producto_id = new clsControl(ccsListBox, "categoria_producto_id", $CCSLocales->GetText("categoria_producto_id"), ccsInteger, "", CCGetRequestParam("categoria_producto_id", $Method, NULL), $this);
            $this->categoria_producto_id->DSType = dsTable;
            $this->categoria_producto_id->DataSource = new clsDBConnection1();
            $this->categoria_producto_id->ds = & $this->categoria_producto_id->DataSource;
            $this->categoria_producto_id->DataSource->SQL = "SELECT * \n" .
"FROM categoria_productos {SQL_Where} {SQL_OrderBy}";
            list($this->categoria_producto_id->BoundColumn, $this->categoria_producto_id->TextColumn, $this->categoria_producto_id->DBFormat) = array("id", "categoria_descrip", "");
            $this->categoria_producto_id->Required = true;
            $this->unidad_medida_id = new clsControl(ccsListBox, "unidad_medida_id", $CCSLocales->GetText("unidad_medida_id"), ccsInteger, "", CCGetRequestParam("unidad_medida_id", $Method, NULL), $this);
            $this->unidad_medida_id->DSType = dsTable;
            $this->unidad_medida_id->DataSource = new clsDBConnection1();
            $this->unidad_medida_id->ds = & $this->unidad_medida_id->DataSource;
            $this->unidad_medida_id->DataSource->SQL = "SELECT * \n" .
"FROM unidadesmedida {SQL_Where} {SQL_OrderBy}";
            list($this->unidad_medida_id->BoundColumn, $this->unidad_medida_id->TextColumn, $this->unidad_medida_id->DBFormat) = array("id", "descrp_unidad", "");
            $this->unidad_medida_id->Required = true;
            $this->cantidad_producto = new clsControl(ccsTextBox, "cantidad_producto", $CCSLocales->GetText("cantidad_producto"), ccsInteger, "", CCGetRequestParam("cantidad_producto", $Method, NULL), $this);
            $this->cantidad_producto->Required = true;
            $this->descripcion_producto = new clsControl(ccsTextBox, "descripcion_producto", $CCSLocales->GetText("descripcion_producto"), ccsText, "", CCGetRequestParam("descripcion_producto", $Method, NULL), $this);
            $this->descripcion_producto->Required = true;
            $this->activo = new clsControl(ccsTextBox, "activo", $CCSLocales->GetText("activo"), ccsInteger, "", CCGetRequestParam("activo", $Method, NULL), $this);
            $this->min_stock = new clsControl(ccsTextBox, "min_stock", $CCSLocales->GetText("min_stock"), ccsInteger, "", CCGetRequestParam("min_stock", $Method, NULL), $this);
            $this->max_stock = new clsControl(ccsTextBox, "max_stock", $CCSLocales->GetText("max_stock"), ccsInteger, "", CCGetRequestParam("max_stock", $Method, NULL), $this);
            $this->nivel_pedido = new clsControl(ccsTextBox, "nivel_pedido", $CCSLocales->GetText("nivel_pedido"), ccsInteger, "", CCGetRequestParam("nivel_pedido", $Method, NULL), $this);
            $this->img_producto_1 = new clsControl(ccsTextBox, "img_producto_1", $CCSLocales->GetText("img_producto_1"), ccsText, "", CCGetRequestParam("img_producto_1", $Method, NULL), $this);
            $this->img_producto_2 = new clsControl(ccsTextBox, "img_producto_2", $CCSLocales->GetText("img_producto_2"), ccsText, "", CCGetRequestParam("img_producto_2", $Method, NULL), $this);
            $this->img_producto_3 = new clsControl(ccsTextBox, "img_producto_3", $CCSLocales->GetText("img_producto_3"), ccsText, "", CCGetRequestParam("img_producto_3", $Method, NULL), $this);
        }
    }
//End Class_Initialize Event

//Initialize Method @6-12D20661
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlid_producto"] = CCGetFromGet("id_producto", NULL);
    }
//End Initialize Method

//Validate Method @6-DF5502CB
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->name_producto->Validate() && $Validation);
        $Validation = ($this->categoria_producto_id->Validate() && $Validation);
        $Validation = ($this->unidad_medida_id->Validate() && $Validation);
        $Validation = ($this->cantidad_producto->Validate() && $Validation);
        $Validation = ($this->descripcion_producto->Validate() && $Validation);
        $Validation = ($this->activo->Validate() && $Validation);
        $Validation = ($this->min_stock->Validate() && $Validation);
        $Validation = ($this->max_stock->Validate() && $Validation);
        $Validation = ($this->nivel_pedido->Validate() && $Validation);
        $Validation = ($this->img_producto_1->Validate() && $Validation);
        $Validation = ($this->img_producto_2->Validate() && $Validation);
        $Validation = ($this->img_producto_3->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->name_producto->Errors->Count() == 0);
        $Validation =  $Validation && ($this->categoria_producto_id->Errors->Count() == 0);
        $Validation =  $Validation && ($this->unidad_medida_id->Errors->Count() == 0);
        $Validation =  $Validation && ($this->cantidad_producto->Errors->Count() == 0);
        $Validation =  $Validation && ($this->descripcion_producto->Errors->Count() == 0);
        $Validation =  $Validation && ($this->activo->Errors->Count() == 0);
        $Validation =  $Validation && ($this->min_stock->Errors->Count() == 0);
        $Validation =  $Validation && ($this->max_stock->Errors->Count() == 0);
        $Validation =  $Validation && ($this->nivel_pedido->Errors->Count() == 0);
        $Validation =  $Validation && ($this->img_producto_1->Errors->Count() == 0);
        $Validation =  $Validation && ($this->img_producto_2->Errors->Count() == 0);
        $Validation =  $Validation && ($this->img_producto_3->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @6-BBD78FA7
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->name_producto->Errors->Count());
        $errors = ($errors || $this->categoria_producto_id->Errors->Count());
        $errors = ($errors || $this->unidad_medida_id->Errors->Count());
        $errors = ($errors || $this->cantidad_producto->Errors->Count());
        $errors = ($errors || $this->descripcion_producto->Errors->Count());
        $errors = ($errors || $this->activo->Errors->Count());
        $errors = ($errors || $this->min_stock->Errors->Count());
        $errors = ($errors || $this->max_stock->Errors->Count());
        $errors = ($errors || $this->nivel_pedido->Errors->Count());
        $errors = ($errors || $this->img_producto_1->Errors->Count());
        $errors = ($errors || $this->img_producto_2->Errors->Count());
        $errors = ($errors || $this->img_producto_3->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @6-B037A879
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
            $Redirect = "productos_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
            if(!CCGetEvent($this->Button_Cancel->CCSEvents, "OnClick", $this->Button_Cancel)) {
                $Redirect = "";
            }
        } else if($this->Validate()) {
            if($this->PressedButton == "Button_Insert") {
                $Redirect = "productos_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
                if(!CCGetEvent($this->Button_Insert->CCSEvents, "OnClick", $this->Button_Insert) || !$this->InsertRow()) {
                    $Redirect = "";
                }
            } else if($this->PressedButton == "Button_Update") {
                $Redirect = "productos_mant.php" . "?" . CCGetQueryString("QueryString", array("ccsForm"));
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

//InsertRow Method @6-D4B8A994
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->name_producto->SetValue($this->name_producto->GetValue(true));
        $this->DataSource->categoria_producto_id->SetValue($this->categoria_producto_id->GetValue(true));
        $this->DataSource->unidad_medida_id->SetValue($this->unidad_medida_id->GetValue(true));
        $this->DataSource->cantidad_producto->SetValue($this->cantidad_producto->GetValue(true));
        $this->DataSource->descripcion_producto->SetValue($this->descripcion_producto->GetValue(true));
        $this->DataSource->activo->SetValue($this->activo->GetValue(true));
        $this->DataSource->min_stock->SetValue($this->min_stock->GetValue(true));
        $this->DataSource->max_stock->SetValue($this->max_stock->GetValue(true));
        $this->DataSource->nivel_pedido->SetValue($this->nivel_pedido->GetValue(true));
        $this->DataSource->img_producto_1->SetValue($this->img_producto_1->GetValue(true));
        $this->DataSource->img_producto_2->SetValue($this->img_producto_2->GetValue(true));
        $this->DataSource->img_producto_3->SetValue($this->img_producto_3->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//UpdateRow Method @6-58642CC9
    function UpdateRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeUpdate", $this);
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->name_producto->SetValue($this->name_producto->GetValue(true));
        $this->DataSource->categoria_producto_id->SetValue($this->categoria_producto_id->GetValue(true));
        $this->DataSource->unidad_medida_id->SetValue($this->unidad_medida_id->GetValue(true));
        $this->DataSource->cantidad_producto->SetValue($this->cantidad_producto->GetValue(true));
        $this->DataSource->descripcion_producto->SetValue($this->descripcion_producto->GetValue(true));
        $this->DataSource->activo->SetValue($this->activo->GetValue(true));
        $this->DataSource->min_stock->SetValue($this->min_stock->GetValue(true));
        $this->DataSource->max_stock->SetValue($this->max_stock->GetValue(true));
        $this->DataSource->nivel_pedido->SetValue($this->nivel_pedido->GetValue(true));
        $this->DataSource->img_producto_1->SetValue($this->img_producto_1->GetValue(true));
        $this->DataSource->img_producto_2->SetValue($this->img_producto_2->GetValue(true));
        $this->DataSource->img_producto_3->SetValue($this->img_producto_3->GetValue(true));
        $this->DataSource->Update();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterUpdate", $this);
        return (!$this->CheckErrors());
    }
//End UpdateRow Method

//Show Method @6-E0D652A6
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

        $this->categoria_producto_id->Prepare();
        $this->unidad_medida_id->Prepare();

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
                    $this->name_producto->SetValue($this->DataSource->name_producto->GetValue());
                    $this->categoria_producto_id->SetValue($this->DataSource->categoria_producto_id->GetValue());
                    $this->unidad_medida_id->SetValue($this->DataSource->unidad_medida_id->GetValue());
                    $this->cantidad_producto->SetValue($this->DataSource->cantidad_producto->GetValue());
                    $this->descripcion_producto->SetValue($this->DataSource->descripcion_producto->GetValue());
                    $this->activo->SetValue($this->DataSource->activo->GetValue());
                    $this->min_stock->SetValue($this->DataSource->min_stock->GetValue());
                    $this->max_stock->SetValue($this->DataSource->max_stock->GetValue());
                    $this->nivel_pedido->SetValue($this->DataSource->nivel_pedido->GetValue());
                    $this->img_producto_1->SetValue($this->DataSource->img_producto_1->GetValue());
                    $this->img_producto_2->SetValue($this->DataSource->img_producto_2->GetValue());
                    $this->img_producto_3->SetValue($this->DataSource->img_producto_3->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->name_producto->Errors->ToString());
            $Error = ComposeStrings($Error, $this->categoria_producto_id->Errors->ToString());
            $Error = ComposeStrings($Error, $this->unidad_medida_id->Errors->ToString());
            $Error = ComposeStrings($Error, $this->cantidad_producto->Errors->ToString());
            $Error = ComposeStrings($Error, $this->descripcion_producto->Errors->ToString());
            $Error = ComposeStrings($Error, $this->activo->Errors->ToString());
            $Error = ComposeStrings($Error, $this->min_stock->Errors->ToString());
            $Error = ComposeStrings($Error, $this->max_stock->Errors->ToString());
            $Error = ComposeStrings($Error, $this->nivel_pedido->Errors->ToString());
            $Error = ComposeStrings($Error, $this->img_producto_1->Errors->ToString());
            $Error = ComposeStrings($Error, $this->img_producto_2->Errors->ToString());
            $Error = ComposeStrings($Error, $this->img_producto_3->Errors->ToString());
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
        $this->name_producto->Show();
        $this->categoria_producto_id->Show();
        $this->unidad_medida_id->Show();
        $this->cantidad_producto->Show();
        $this->descripcion_producto->Show();
        $this->activo->Show();
        $this->min_stock->Show();
        $this->max_stock->Show();
        $this->nivel_pedido->Show();
        $this->img_producto_1->Show();
        $this->img_producto_2->Show();
        $this->img_producto_3->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End productos Class @6-FCB6E20C

class clsproductosDataSource extends clsDBConnection1 {  //productosDataSource Class @6-129A57C1

//DataSource Variables @6-5A2781C7
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
    public $name_producto;
    public $categoria_producto_id;
    public $unidad_medida_id;
    public $cantidad_producto;
    public $descripcion_producto;
    public $activo;
    public $min_stock;
    public $max_stock;
    public $nivel_pedido;
    public $img_producto_1;
    public $img_producto_2;
    public $img_producto_3;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-B82F6076
    function clsproductosDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record productos/Error";
        $this->Initialize();
        $this->name_producto = new clsField("name_producto", ccsText, "");
        
        $this->categoria_producto_id = new clsField("categoria_producto_id", ccsInteger, "");
        
        $this->unidad_medida_id = new clsField("unidad_medida_id", ccsInteger, "");
        
        $this->cantidad_producto = new clsField("cantidad_producto", ccsInteger, "");
        
        $this->descripcion_producto = new clsField("descripcion_producto", ccsText, "");
        
        $this->activo = new clsField("activo", ccsInteger, "");
        
        $this->min_stock = new clsField("min_stock", ccsInteger, "");
        
        $this->max_stock = new clsField("max_stock", ccsInteger, "");
        
        $this->nivel_pedido = new clsField("nivel_pedido", ccsInteger, "");
        
        $this->img_producto_1 = new clsField("img_producto_1", ccsText, "");
        
        $this->img_producto_2 = new clsField("img_producto_2", ccsText, "");
        
        $this->img_producto_3 = new clsField("img_producto_3", ccsText, "");
        

        $this->InsertFields["name_producto"] = array("Name" => "name_producto", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["categoria_producto_id"] = array("Name" => "categoria_producto_id", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["unidad_medida_id"] = array("Name" => "unidad_medida_id", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["cantidad_producto"] = array("Name" => "cantidad_producto", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["descripcion_producto"] = array("Name" => "descripcion_producto", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["activo"] = array("Name" => "activo", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["min_stock"] = array("Name" => "min_stock", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["max_stock"] = array("Name" => "max_stock", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["nivel_pedido"] = array("Name" => "nivel_pedido", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["img_producto_1"] = array("Name" => "img_producto_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["img_producto_2"] = array("Name" => "img_producto_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["img_producto_3"] = array("Name" => "img_producto_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["name_producto"] = array("Name" => "name_producto", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["categoria_producto_id"] = array("Name" => "categoria_producto_id", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["unidad_medida_id"] = array("Name" => "unidad_medida_id", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["cantidad_producto"] = array("Name" => "cantidad_producto", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["descripcion_producto"] = array("Name" => "descripcion_producto", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["activo"] = array("Name" => "activo", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["min_stock"] = array("Name" => "min_stock", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["max_stock"] = array("Name" => "max_stock", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["nivel_pedido"] = array("Name" => "nivel_pedido", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["img_producto_1"] = array("Name" => "img_producto_1", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["img_producto_2"] = array("Name" => "img_producto_2", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["img_producto_3"] = array("Name" => "img_producto_3", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//Prepare Method @6-8A841AC3
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urlid_producto", ccsInteger, "", "", $this->Parameters["urlid_producto"], "", false);
        $this->AllParametersSet = $this->wp->AllParamsSet();
        $this->wp->Criterion[1] = $this->wp->Operation(opEqual, "id_producto", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsInteger),false);
        $this->Where = 
             $this->wp->Criterion[1];
    }
//End Prepare Method

//Open Method @6-AC2A6AD7
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM productos {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @6-BFD2EDF7
    function SetValues()
    {
        $this->name_producto->SetDBValue($this->f("name_producto"));
        $this->categoria_producto_id->SetDBValue(trim($this->f("categoria_producto_id")));
        $this->unidad_medida_id->SetDBValue(trim($this->f("unidad_medida_id")));
        $this->cantidad_producto->SetDBValue(trim($this->f("cantidad_producto")));
        $this->descripcion_producto->SetDBValue($this->f("descripcion_producto"));
        $this->activo->SetDBValue(trim($this->f("activo")));
        $this->min_stock->SetDBValue(trim($this->f("min_stock")));
        $this->max_stock->SetDBValue(trim($this->f("max_stock")));
        $this->nivel_pedido->SetDBValue(trim($this->f("nivel_pedido")));
        $this->img_producto_1->SetDBValue($this->f("img_producto_1"));
        $this->img_producto_2->SetDBValue($this->f("img_producto_2"));
        $this->img_producto_3->SetDBValue($this->f("img_producto_3"));
    }
//End SetValues Method

//Insert Method @6-193CD28E
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["name_producto"]["Value"] = $this->name_producto->GetDBValue(true);
        $this->InsertFields["categoria_producto_id"]["Value"] = $this->categoria_producto_id->GetDBValue(true);
        $this->InsertFields["unidad_medida_id"]["Value"] = $this->unidad_medida_id->GetDBValue(true);
        $this->InsertFields["cantidad_producto"]["Value"] = $this->cantidad_producto->GetDBValue(true);
        $this->InsertFields["descripcion_producto"]["Value"] = $this->descripcion_producto->GetDBValue(true);
        $this->InsertFields["activo"]["Value"] = $this->activo->GetDBValue(true);
        $this->InsertFields["min_stock"]["Value"] = $this->min_stock->GetDBValue(true);
        $this->InsertFields["max_stock"]["Value"] = $this->max_stock->GetDBValue(true);
        $this->InsertFields["nivel_pedido"]["Value"] = $this->nivel_pedido->GetDBValue(true);
        $this->InsertFields["img_producto_1"]["Value"] = $this->img_producto_1->GetDBValue(true);
        $this->InsertFields["img_producto_2"]["Value"] = $this->img_producto_2->GetDBValue(true);
        $this->InsertFields["img_producto_3"]["Value"] = $this->img_producto_3->GetDBValue(true);
        $this->SQL = CCBuildInsert("productos", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @6-D2E7C1BA
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $this->UpdateFields["name_producto"]["Value"] = $this->name_producto->GetDBValue(true);
        $this->UpdateFields["categoria_producto_id"]["Value"] = $this->categoria_producto_id->GetDBValue(true);
        $this->UpdateFields["unidad_medida_id"]["Value"] = $this->unidad_medida_id->GetDBValue(true);
        $this->UpdateFields["cantidad_producto"]["Value"] = $this->cantidad_producto->GetDBValue(true);
        $this->UpdateFields["descripcion_producto"]["Value"] = $this->descripcion_producto->GetDBValue(true);
        $this->UpdateFields["activo"]["Value"] = $this->activo->GetDBValue(true);
        $this->UpdateFields["min_stock"]["Value"] = $this->min_stock->GetDBValue(true);
        $this->UpdateFields["max_stock"]["Value"] = $this->max_stock->GetDBValue(true);
        $this->UpdateFields["nivel_pedido"]["Value"] = $this->nivel_pedido->GetDBValue(true);
        $this->UpdateFields["img_producto_1"]["Value"] = $this->img_producto_1->GetDBValue(true);
        $this->UpdateFields["img_producto_2"]["Value"] = $this->img_producto_2->GetDBValue(true);
        $this->UpdateFields["img_producto_3"]["Value"] = $this->img_producto_3->GetDBValue(true);
        $this->SQL = CCBuildUpdate("productos", $this->UpdateFields, $this);
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

} //End productosDataSource Class @6-FCB6E20C

//Initialize Page @1-33AB07F7
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
$TemplateFileName = "CrudProducto.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$PathToRootOpt = "";
$Scripts = "|";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-96579F2B
include_once("./CrudProducto_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-02CFA53B
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
$productos = new clsRecordproductos("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->productos = & $productos;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
$Content->AddComponent("productos", $productos);
$productos->Initialize();
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

//Execute Components @1-DE893AC1
$MasterPage->Operations();
$productos->Operation();
//End Execute Components

//Go to destination page @1-E1AB79AA
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($productos);
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

//Unload Page @1-053A509C
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($productos);
unset($Tpl);
//End Unload Page


?>
