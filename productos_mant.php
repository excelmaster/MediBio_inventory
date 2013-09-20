<?php
//Include Common Files @1-EF9F9468
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "productos_mant.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsGridunidadesmedida_productos { //unidadesmedida_productos class @68-B535373D

//Variables @68-D22F08B3

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
    public $Sorter_categoria_descrip;
    public $Sorter_name_producto;
    public $Sorter_cantidad_producto;
    public $Sorter_descripcion_producto;
    public $Sorter_activo;
    public $Sorter_descrp_unidad;
//End Variables

//Class_Initialize Event @68-2D1A854F
    function clsGridunidadesmedida_productos($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "unidadesmedida_productos";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->IsAltRow = false;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid unidadesmedida_productos";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsunidadesmedida_productosDataSource($this);
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
        $this->SorterName = CCGetParam("unidadesmedida_productosOrder", "");
        $this->SorterDirection = CCGetParam("unidadesmedida_productosDir", "");

        $this->Detail = new clsControl(ccsLink, "Detail", "Detail", ccsText, "", CCGetRequestParam("Detail", ccsGet, NULL), $this);
        $this->Detail->Page = "CrudProducto.php";
        $this->categoria_descrip = new clsControl(ccsLabel, "categoria_descrip", "categoria_descrip", ccsText, "", CCGetRequestParam("categoria_descrip", ccsGet, NULL), $this);
        $this->name_producto = new clsControl(ccsLabel, "name_producto", "name_producto", ccsText, "", CCGetRequestParam("name_producto", ccsGet, NULL), $this);
        $this->cantidad_producto = new clsControl(ccsLabel, "cantidad_producto", "cantidad_producto", ccsInteger, "", CCGetRequestParam("cantidad_producto", ccsGet, NULL), $this);
        $this->descripcion_producto = new clsControl(ccsLabel, "descripcion_producto", "descripcion_producto", ccsText, "", CCGetRequestParam("descripcion_producto", ccsGet, NULL), $this);
        $this->activo = new clsControl(ccsLabel, "activo", "activo", ccsInteger, "", CCGetRequestParam("activo", ccsGet, NULL), $this);
        $this->descrp_unidad = new clsControl(ccsLabel, "descrp_unidad", "descrp_unidad", ccsText, "", CCGetRequestParam("descrp_unidad", ccsGet, NULL), $this);
        $this->id_producto = new clsControl(ccsLabel, "id_producto", "id_producto", ccsInteger, "", CCGetRequestParam("id_producto", ccsGet, NULL), $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "CrudProducto.php";
        $this->Alt_categoria_descrip = new clsControl(ccsLabel, "Alt_categoria_descrip", "Alt_categoria_descrip", ccsText, "", CCGetRequestParam("Alt_categoria_descrip", ccsGet, NULL), $this);
        $this->Alt_name_producto = new clsControl(ccsLabel, "Alt_name_producto", "Alt_name_producto", ccsText, "", CCGetRequestParam("Alt_name_producto", ccsGet, NULL), $this);
        $this->Alt_cantidad_producto = new clsControl(ccsLabel, "Alt_cantidad_producto", "Alt_cantidad_producto", ccsInteger, "", CCGetRequestParam("Alt_cantidad_producto", ccsGet, NULL), $this);
        $this->Alt_descripcion_producto = new clsControl(ccsLabel, "Alt_descripcion_producto", "Alt_descripcion_producto", ccsText, "", CCGetRequestParam("Alt_descripcion_producto", ccsGet, NULL), $this);
        $this->Alt_activo = new clsControl(ccsLabel, "Alt_activo", "Alt_activo", ccsInteger, "", CCGetRequestParam("Alt_activo", ccsGet, NULL), $this);
        $this->Alt_descrp_unidad = new clsControl(ccsLabel, "Alt_descrp_unidad", "Alt_descrp_unidad", ccsText, "", CCGetRequestParam("Alt_descrp_unidad", ccsGet, NULL), $this);
        $this->Alt_id_producto = new clsControl(ccsLabel, "Alt_id_producto", "Alt_id_producto", ccsInteger, "", CCGetRequestParam("Alt_id_producto", ccsGet, NULL), $this);
        $this->unidadesmedida_productos_Insert = new clsControl(ccsLink, "unidadesmedida_productos_Insert", "unidadesmedida_productos_Insert", ccsText, "", CCGetRequestParam("unidadesmedida_productos_Insert", ccsGet, NULL), $this);
        $this->unidadesmedida_productos_Insert->Parameters = CCGetQueryString("QueryString", array("id_producto", "ccsForm"));
        $this->unidadesmedida_productos_Insert->Page = "CrudProducto.php";
        $this->unidadesmedida_productos_TotalRecords = new clsControl(ccsLabel, "unidadesmedida_productos_TotalRecords", "unidadesmedida_productos_TotalRecords", ccsText, "", CCGetRequestParam("unidadesmedida_productos_TotalRecords", ccsGet, NULL), $this);
        $this->Sorter_categoria_descrip = new clsSorter($this->ComponentName, "Sorter_categoria_descrip", $FileName, $this);
        $this->Sorter_name_producto = new clsSorter($this->ComponentName, "Sorter_name_producto", $FileName, $this);
        $this->Sorter_cantidad_producto = new clsSorter($this->ComponentName, "Sorter_cantidad_producto", $FileName, $this);
        $this->Sorter_descripcion_producto = new clsSorter($this->ComponentName, "Sorter_descripcion_producto", $FileName, $this);
        $this->Sorter_activo = new clsSorter($this->ComponentName, "Sorter_activo", $FileName, $this);
        $this->Sorter_descrp_unidad = new clsSorter($this->ComponentName, "Sorter_descrp_unidad", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->unidadesmedida_productos_Insert1 = new clsControl(ccsLink, "unidadesmedida_productos_Insert1", "unidadesmedida_productos_Insert1", ccsText, "", CCGetRequestParam("unidadesmedida_productos_Insert1", ccsGet, NULL), $this);
        $this->unidadesmedida_productos_Insert1->Parameters = CCGetQueryString("QueryString", array("id_producto", "ccsForm"));
        $this->unidadesmedida_productos_Insert1->Page = "CrudProducto.php";
    }
//End Class_Initialize Event

//Initialize Method @68-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @68-1AC7F654
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
            $this->ControlsVisible["categoria_descrip"] = $this->categoria_descrip->Visible;
            $this->ControlsVisible["name_producto"] = $this->name_producto->Visible;
            $this->ControlsVisible["cantidad_producto"] = $this->cantidad_producto->Visible;
            $this->ControlsVisible["descripcion_producto"] = $this->descripcion_producto->Visible;
            $this->ControlsVisible["activo"] = $this->activo->Visible;
            $this->ControlsVisible["descrp_unidad"] = $this->descrp_unidad->Visible;
            $this->ControlsVisible["id_producto"] = $this->id_producto->Visible;
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
                    $this->Detail->Parameters = CCAddParam($this->Detail->Parameters, "id_producto", $this->DataSource->f("id_producto"));
                    $this->categoria_descrip->SetValue($this->DataSource->categoria_descrip->GetValue());
                    $this->name_producto->SetValue($this->DataSource->name_producto->GetValue());
                    $this->cantidad_producto->SetValue($this->DataSource->cantidad_producto->GetValue());
                    $this->descripcion_producto->SetValue($this->DataSource->descripcion_producto->GetValue());
                    $this->activo->SetValue($this->DataSource->activo->GetValue());
                    $this->descrp_unidad->SetValue($this->DataSource->descrp_unidad->GetValue());
                    $this->id_producto->SetValue($this->DataSource->id_producto->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Detail->Show();
                    $this->categoria_descrip->Show();
                    $this->name_producto->Show();
                    $this->cantidad_producto->Show();
                    $this->descripcion_producto->Show();
                    $this->activo->Show();
                    $this->descrp_unidad->Show();
                    $this->id_producto->Show();
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                    $Tpl->parse("Row", true);
                }
                else
                {
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/AltRow";
                    $this->Alt_Detail->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                    $this->Alt_Detail->Parameters = CCAddParam($this->Alt_Detail->Parameters, "id_producto", $this->DataSource->f("id_producto"));
                    $this->Alt_categoria_descrip->SetValue($this->DataSource->Alt_categoria_descrip->GetValue());
                    $this->Alt_name_producto->SetValue($this->DataSource->Alt_name_producto->GetValue());
                    $this->Alt_cantidad_producto->SetValue($this->DataSource->Alt_cantidad_producto->GetValue());
                    $this->Alt_descripcion_producto->SetValue($this->DataSource->Alt_descripcion_producto->GetValue());
                    $this->Alt_activo->SetValue($this->DataSource->Alt_activo->GetValue());
                    $this->Alt_descrp_unidad->SetValue($this->DataSource->Alt_descrp_unidad->GetValue());
                    $this->Alt_id_producto->SetValue($this->DataSource->Alt_id_producto->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Alt_Detail->Show();
                    $this->Alt_categoria_descrip->Show();
                    $this->Alt_name_producto->Show();
                    $this->Alt_cantidad_producto->Show();
                    $this->Alt_descripcion_producto->Show();
                    $this->Alt_activo->Show();
                    $this->Alt_descrp_unidad->Show();
                    $this->Alt_id_producto->Show();
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
        $this->unidadesmedida_productos_Insert->Show();
        $this->unidadesmedida_productos_TotalRecords->Show();
        $this->Sorter_categoria_descrip->Show();
        $this->Sorter_name_producto->Show();
        $this->Sorter_cantidad_producto->Show();
        $this->Sorter_descripcion_producto->Show();
        $this->Sorter_activo->Show();
        $this->Sorter_descrp_unidad->Show();
        $this->Navigator->Show();
        $this->unidadesmedida_productos_Insert1->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @68-A37D2A4B
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->categoria_descrip->Errors->ToString());
        $errors = ComposeStrings($errors, $this->name_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->cantidad_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->descripcion_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->activo->Errors->ToString());
        $errors = ComposeStrings($errors, $this->descrp_unidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_categoria_descrip->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_name_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_cantidad_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_descripcion_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_activo->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_descrp_unidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_id_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End unidadesmedida_productos Class @68-FCB6E20C

class clsunidadesmedida_productosDataSource extends clsDBConnection1 {  //unidadesmedida_productosDataSource Class @68-7377E95B

//DataSource Variables @68-1A34BEFB
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $categoria_descrip;
    public $name_producto;
    public $cantidad_producto;
    public $descripcion_producto;
    public $activo;
    public $descrp_unidad;
    public $id_producto;
    public $Alt_categoria_descrip;
    public $Alt_name_producto;
    public $Alt_cantidad_producto;
    public $Alt_descripcion_producto;
    public $Alt_activo;
    public $Alt_descrp_unidad;
    public $Alt_id_producto;
//End DataSource Variables

//DataSourceClass_Initialize Event @68-3D96524A
    function clsunidadesmedida_productosDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid unidadesmedida_productos";
        $this->Initialize();
        $this->categoria_descrip = new clsField("categoria_descrip", ccsText, "");
        
        $this->name_producto = new clsField("name_producto", ccsText, "");
        
        $this->cantidad_producto = new clsField("cantidad_producto", ccsInteger, "");
        
        $this->descripcion_producto = new clsField("descripcion_producto", ccsText, "");
        
        $this->activo = new clsField("activo", ccsInteger, "");
        
        $this->descrp_unidad = new clsField("descrp_unidad", ccsText, "");
        
        $this->id_producto = new clsField("id_producto", ccsInteger, "");
        
        $this->Alt_categoria_descrip = new clsField("Alt_categoria_descrip", ccsText, "");
        
        $this->Alt_name_producto = new clsField("Alt_name_producto", ccsText, "");
        
        $this->Alt_cantidad_producto = new clsField("Alt_cantidad_producto", ccsInteger, "");
        
        $this->Alt_descripcion_producto = new clsField("Alt_descripcion_producto", ccsText, "");
        
        $this->Alt_activo = new clsField("Alt_activo", ccsInteger, "");
        
        $this->Alt_descrp_unidad = new clsField("Alt_descrp_unidad", ccsText, "");
        
        $this->Alt_id_producto = new clsField("Alt_id_producto", ccsInteger, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @68-449D106A
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "id_producto";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_categoria_descrip" => array("categoria_descrip", ""), 
            "Sorter_name_producto" => array("name_producto", ""), 
            "Sorter_cantidad_producto" => array("cantidad_producto", ""), 
            "Sorter_descripcion_producto" => array("descripcion_producto", ""), 
            "Sorter_activo" => array("activo", ""), 
            "Sorter_descrp_unidad" => array("descrp_unidad", "")));
    }
//End SetOrder Method

//Prepare Method @68-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @68-ED69496D
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM (productos INNER JOIN categoria_productos ON\n\n" .
        "productos.categoria_producto_id = categoria_productos.id) INNER JOIN unidadesmedida ON\n\n" .
        "productos.unidad_medida_id = unidadesmedida.id";
        $this->SQL = "SELECT categoria_descrip, descrp_unidad, name_producto, cantidad_producto, descripcion_producto, activo, id_producto \n\n" .
        "FROM (productos INNER JOIN categoria_productos ON\n\n" .
        "productos.categoria_producto_id = categoria_productos.id) INNER JOIN unidadesmedida ON\n\n" .
        "productos.unidad_medida_id = unidadesmedida.id {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @68-47AA3EEA
    function SetValues()
    {
        $this->categoria_descrip->SetDBValue($this->f("categoria_descrip"));
        $this->name_producto->SetDBValue($this->f("name_producto"));
        $this->cantidad_producto->SetDBValue(trim($this->f("cantidad_producto")));
        $this->descripcion_producto->SetDBValue($this->f("descripcion_producto"));
        $this->activo->SetDBValue(trim($this->f("activo")));
        $this->descrp_unidad->SetDBValue($this->f("descrp_unidad"));
        $this->id_producto->SetDBValue(trim($this->f("id_producto")));
        $this->Alt_categoria_descrip->SetDBValue($this->f("categoria_descrip"));
        $this->Alt_name_producto->SetDBValue($this->f("name_producto"));
        $this->Alt_cantidad_producto->SetDBValue(trim($this->f("cantidad_producto")));
        $this->Alt_descripcion_producto->SetDBValue($this->f("descripcion_producto"));
        $this->Alt_activo->SetDBValue(trim($this->f("activo")));
        $this->Alt_descrp_unidad->SetDBValue($this->f("descrp_unidad"));
        $this->Alt_id_producto->SetDBValue(trim($this->f("id_producto")));
    }
//End SetValues Method

} //End unidadesmedida_productosDataSource Class @68-FCB6E20C

class clsRecordunidadesmedida_productos1 { //unidadesmedida_productos1 Class @110-AE2B888F

//Variables @110-9E315808

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

//Class_Initialize Event @110-EA49D60A
    function clsRecordunidadesmedida_productos1($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record unidadesmedida_productos1/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "unidadesmedida_productos1";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "categoria_productos_produPageSize", "ccsForm"));
            $this->ClearParameters->Page = "productos_mant.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->categoria_productos_produPageSize = new clsControl(ccsListBox, "categoria_productos_produPageSize", "categoria_productos_produPageSize", ccsText, "", CCGetRequestParam("categoria_productos_produPageSize", $Method, NULL), $this);
            $this->categoria_productos_produPageSize->DSType = dsListOfValues;
            $this->categoria_productos_produPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @110-05938037
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->categoria_productos_produPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->categoria_productos_produPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @110-A260C86C
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->categoria_productos_produPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @110-95A60A6C
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
        $Redirect = "productos_mant.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "productos_mant.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @110-1F3ECDED
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
        $this->categoria_productos_produPageSize->Prepare();

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
            $Error = ComposeStrings($Error, $this->categoria_productos_produPageSize->Errors->ToString());
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
        $this->categoria_productos_produPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End unidadesmedida_productos1 Class @110-FCB6E20C



//Initialize Page @1-AF93C48A
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
$TemplateFileName = "productos_mant.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-D5591F8D
include_once("./productos_mant_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-DA9BC0D7
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
$Panel1 = new clsPanel("Panel1", $MainPage);
$Label1 = new clsControl(ccsLabel, "Label1", "Label1", ccsText, "", CCGetRequestParam("Label1", ccsGet, NULL), $MainPage);
$unidadesmedida_productos = new clsGridunidadesmedida_productos("", $MainPage);
$unidadesmedida_productos1 = new clsRecordunidadesmedida_productos1("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "admin.php";
$Link2 = new clsControl(ccsLink, "Link2", "Link2", ccsText, "", CCGetRequestParam("Link2", ccsGet, NULL), $MainPage);
$Link2->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link2->Page = "rpt_productos.php";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->Panel1 = & $Panel1;
$MainPage->Label1 = & $Label1;
$MainPage->unidadesmedida_productos = & $unidadesmedida_productos;
$MainPage->unidadesmedida_productos1 = & $unidadesmedida_productos1;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
$MainPage->Link1 = & $Link1;
$MainPage->Link2 = & $Link2;
$Content->AddComponent("unidadesmedida_productos", $unidadesmedida_productos);
$Content->AddComponent("unidadesmedida_productos1", $unidadesmedida_productos1);
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("Label1", $Label1);
$Sidebar1->AddComponent("Link1", $Link1);
$Sidebar1->AddComponent("Link2", $Link2);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("FORMULARIO DE MANTENIMIENTO DE PRODUCTOS");
$unidadesmedida_productos->Initialize();

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

//Execute Components @1-31EAA7DE
$MasterPage->Operations();
$unidadesmedida_productos1->Operation();
//End Execute Components

//Go to destination page @1-45DFE169
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($unidadesmedida_productos);
    unset($unidadesmedida_productos1);
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

//Unload Page @1-0D2CD562
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($unidadesmedida_productos);
unset($unidadesmedida_productos1);
unset($Tpl);
//End Unload Page


?>
