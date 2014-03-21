<?php
//Include Common Files @1-82B10B0A
define("RelativePath", "..");
define("PathToCurrentPage", "/invt_alternativo/");
define("FileName", "Clientes_mant.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

class clsGridclientes { //clientes class @68-9CC2092A

//Variables @68-57A9933C

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
    public $Sorter_prinombre;
    public $Sorter_demasnombres;
    public $Sorter_priapellido;
    public $Sorter_segapellido;
    public $Sorter_tipo_documento;
    public $Sorter_num_documento;
//End Variables

//Class_Initialize Event @68-8C23AE8F
    function clsGridclientes($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "clientes";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->IsAltRow = false;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid clientes";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsclientesDataSource($this);
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
        $this->SorterName = CCGetParam("clientesOrder", "");
        $this->SorterDirection = CCGetParam("clientesDir", "");

        $this->Detail = new clsControl(ccsLink, "Detail", "Detail", ccsText, "", CCGetRequestParam("Detail", ccsGet, NULL), $this);
        $this->Detail->Page = "Crud_Clentes.php";
        $this->id = new clsControl(ccsLabel, "id", "id", ccsInteger, "", CCGetRequestParam("id", ccsGet, NULL), $this);
        $this->prinombre = new clsControl(ccsLabel, "prinombre", "prinombre", ccsText, "", CCGetRequestParam("prinombre", ccsGet, NULL), $this);
        $this->demasnombres = new clsControl(ccsLabel, "demasnombres", "demasnombres", ccsText, "", CCGetRequestParam("demasnombres", ccsGet, NULL), $this);
        $this->priapellido = new clsControl(ccsLabel, "priapellido", "priapellido", ccsText, "", CCGetRequestParam("priapellido", ccsGet, NULL), $this);
        $this->segapellido = new clsControl(ccsLabel, "segapellido", "segapellido", ccsText, "", CCGetRequestParam("segapellido", ccsGet, NULL), $this);
        $this->tipo_documento = new clsControl(ccsLabel, "tipo_documento", "tipo_documento", ccsText, "", CCGetRequestParam("tipo_documento", ccsGet, NULL), $this);
        $this->num_documento = new clsControl(ccsLabel, "num_documento", "num_documento", ccsText, "", CCGetRequestParam("num_documento", ccsGet, NULL), $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "Crud_Clentes.php";
        $this->Alt_id = new clsControl(ccsLabel, "Alt_id", "Alt_id", ccsInteger, "", CCGetRequestParam("Alt_id", ccsGet, NULL), $this);
        $this->Alt_prinombre = new clsControl(ccsLabel, "Alt_prinombre", "Alt_prinombre", ccsText, "", CCGetRequestParam("Alt_prinombre", ccsGet, NULL), $this);
        $this->Alt_demasnombres = new clsControl(ccsLabel, "Alt_demasnombres", "Alt_demasnombres", ccsText, "", CCGetRequestParam("Alt_demasnombres", ccsGet, NULL), $this);
        $this->Alt_priapellido = new clsControl(ccsLabel, "Alt_priapellido", "Alt_priapellido", ccsText, "", CCGetRequestParam("Alt_priapellido", ccsGet, NULL), $this);
        $this->Alt_segapellido = new clsControl(ccsLabel, "Alt_segapellido", "Alt_segapellido", ccsText, "", CCGetRequestParam("Alt_segapellido", ccsGet, NULL), $this);
        $this->Alt_tipo_documento = new clsControl(ccsLabel, "Alt_tipo_documento", "Alt_tipo_documento", ccsText, "", CCGetRequestParam("Alt_tipo_documento", ccsGet, NULL), $this);
        $this->Alt_num_documento = new clsControl(ccsLabel, "Alt_num_documento", "Alt_num_documento", ccsText, "", CCGetRequestParam("Alt_num_documento", ccsGet, NULL), $this);
        $this->clientes_TotalRecords = new clsControl(ccsLabel, "clientes_TotalRecords", "clientes_TotalRecords", ccsText, "", CCGetRequestParam("clientes_TotalRecords", ccsGet, NULL), $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Sorter_prinombre = new clsSorter($this->ComponentName, "Sorter_prinombre", $FileName, $this);
        $this->Sorter_demasnombres = new clsSorter($this->ComponentName, "Sorter_demasnombres", $FileName, $this);
        $this->Sorter_priapellido = new clsSorter($this->ComponentName, "Sorter_priapellido", $FileName, $this);
        $this->Sorter_segapellido = new clsSorter($this->ComponentName, "Sorter_segapellido", $FileName, $this);
        $this->Sorter_tipo_documento = new clsSorter($this->ComponentName, "Sorter_tipo_documento", $FileName, $this);
        $this->Sorter_num_documento = new clsSorter($this->ComponentName, "Sorter_num_documento", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->clientes_Insert1 = new clsControl(ccsLink, "clientes_Insert1", "clientes_Insert1", ccsText, "", CCGetRequestParam("clientes_Insert1", ccsGet, NULL), $this);
        $this->clientes_Insert1->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->clientes_Insert1->Page = "Crud_Clientes.php";
        $this->clientes_Insert2 = new clsControl(ccsLink, "clientes_Insert2", "clientes_Insert2", ccsText, "", CCGetRequestParam("clientes_Insert2", ccsGet, NULL), $this);
        $this->clientes_Insert2->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->clientes_Insert2->Page = "Crud_Clientes.php";
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

//Show Method @68-D85679AE
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
            $this->ControlsVisible["prinombre"] = $this->prinombre->Visible;
            $this->ControlsVisible["demasnombres"] = $this->demasnombres->Visible;
            $this->ControlsVisible["priapellido"] = $this->priapellido->Visible;
            $this->ControlsVisible["segapellido"] = $this->segapellido->Visible;
            $this->ControlsVisible["tipo_documento"] = $this->tipo_documento->Visible;
            $this->ControlsVisible["num_documento"] = $this->num_documento->Visible;
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
                    $this->prinombre->SetValue($this->DataSource->prinombre->GetValue());
                    $this->demasnombres->SetValue($this->DataSource->demasnombres->GetValue());
                    $this->priapellido->SetValue($this->DataSource->priapellido->GetValue());
                    $this->segapellido->SetValue($this->DataSource->segapellido->GetValue());
                    $this->tipo_documento->SetValue($this->DataSource->tipo_documento->GetValue());
                    $this->num_documento->SetValue($this->DataSource->num_documento->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Detail->Show();
                    $this->id->Show();
                    $this->prinombre->Show();
                    $this->demasnombres->Show();
                    $this->priapellido->Show();
                    $this->segapellido->Show();
                    $this->tipo_documento->Show();
                    $this->num_documento->Show();
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                    $Tpl->parse("Row", true);
                }
                else
                {
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/AltRow";
                    $this->Alt_Detail->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                    $this->Alt_Detail->Parameters = CCAddParam($this->Alt_Detail->Parameters, "id", $this->DataSource->f("id"));
                    $this->Alt_id->SetValue($this->DataSource->Alt_id->GetValue());
                    $this->Alt_prinombre->SetValue($this->DataSource->Alt_prinombre->GetValue());
                    $this->Alt_demasnombres->SetValue($this->DataSource->Alt_demasnombres->GetValue());
                    $this->Alt_priapellido->SetValue($this->DataSource->Alt_priapellido->GetValue());
                    $this->Alt_segapellido->SetValue($this->DataSource->Alt_segapellido->GetValue());
                    $this->Alt_tipo_documento->SetValue($this->DataSource->Alt_tipo_documento->GetValue());
                    $this->Alt_num_documento->SetValue($this->DataSource->Alt_num_documento->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Alt_Detail->Show();
                    $this->Alt_id->Show();
                    $this->Alt_prinombre->Show();
                    $this->Alt_demasnombres->Show();
                    $this->Alt_priapellido->Show();
                    $this->Alt_segapellido->Show();
                    $this->Alt_tipo_documento->Show();
                    $this->Alt_num_documento->Show();
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
        $this->clientes_TotalRecords->Show();
        $this->Sorter_id->Show();
        $this->Sorter_prinombre->Show();
        $this->Sorter_demasnombres->Show();
        $this->Sorter_priapellido->Show();
        $this->Sorter_segapellido->Show();
        $this->Sorter_tipo_documento->Show();
        $this->Sorter_num_documento->Show();
        $this->Navigator->Show();
        $this->clientes_Insert1->Show();
        $this->clientes_Insert2->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @68-F4912F30
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->prinombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->demasnombres->Errors->ToString());
        $errors = ComposeStrings($errors, $this->priapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->segapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->tipo_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->num_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_prinombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_demasnombres->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_priapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_segapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_tipo_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_num_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End clientes Class @68-FCB6E20C

class clsclientesDataSource extends clsDBConnection1 {  //clientesDataSource Class @68-E85581CD

//DataSource Variables @68-A74FAAE9
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $id;
    public $prinombre;
    public $demasnombres;
    public $priapellido;
    public $segapellido;
    public $tipo_documento;
    public $num_documento;
    public $Alt_id;
    public $Alt_prinombre;
    public $Alt_demasnombres;
    public $Alt_priapellido;
    public $Alt_segapellido;
    public $Alt_tipo_documento;
    public $Alt_num_documento;
//End DataSource Variables

//DataSourceClass_Initialize Event @68-EC9A9018
    function clsclientesDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid clientes";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->prinombre = new clsField("prinombre", ccsText, "");
        
        $this->demasnombres = new clsField("demasnombres", ccsText, "");
        
        $this->priapellido = new clsField("priapellido", ccsText, "");
        
        $this->segapellido = new clsField("segapellido", ccsText, "");
        
        $this->tipo_documento = new clsField("tipo_documento", ccsText, "");
        
        $this->num_documento = new clsField("num_documento", ccsText, "");
        
        $this->Alt_id = new clsField("Alt_id", ccsInteger, "");
        
        $this->Alt_prinombre = new clsField("Alt_prinombre", ccsText, "");
        
        $this->Alt_demasnombres = new clsField("Alt_demasnombres", ccsText, "");
        
        $this->Alt_priapellido = new clsField("Alt_priapellido", ccsText, "");
        
        $this->Alt_segapellido = new clsField("Alt_segapellido", ccsText, "");
        
        $this->Alt_tipo_documento = new clsField("Alt_tipo_documento", ccsText, "");
        
        $this->Alt_num_documento = new clsField("Alt_num_documento", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @68-F9193203
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "priapellido, segapellido, prinombre desc";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_prinombre" => array("prinombre", ""), 
            "Sorter_demasnombres" => array("demasnombres", ""), 
            "Sorter_priapellido" => array("priapellido", ""), 
            "Sorter_segapellido" => array("segapellido", ""), 
            "Sorter_tipo_documento" => array("tipo_documento", ""), 
            "Sorter_num_documento" => array("num_documento", "")));
    }
//End SetOrder Method

//Prepare Method @68-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @68-3D4FCCFB
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM clientes INNER JOIN tipo_doc ON\n\n" .
        "clientes.tipo_documento = tipo_doc.id_tip_doc";
        $this->SQL = "SELECT id, priapellido, segapellido, prinombre, demasnombres, tipo_documento, num_documento \n\n" .
        "FROM clientes INNER JOIN tipo_doc ON\n\n" .
        "clientes.tipo_documento = tipo_doc.id_tip_doc {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @68-121B0749
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->prinombre->SetDBValue($this->f("prinombre"));
        $this->demasnombres->SetDBValue($this->f("demasnombres"));
        $this->priapellido->SetDBValue($this->f("priapellido"));
        $this->segapellido->SetDBValue($this->f("segapellido"));
        $this->tipo_documento->SetDBValue($this->f("tipo_documento"));
        $this->num_documento->SetDBValue($this->f("num_documento"));
        $this->Alt_id->SetDBValue(trim($this->f("id")));
        $this->Alt_prinombre->SetDBValue($this->f("prinombre"));
        $this->Alt_demasnombres->SetDBValue($this->f("demasnombres"));
        $this->Alt_priapellido->SetDBValue($this->f("priapellido"));
        $this->Alt_segapellido->SetDBValue($this->f("segapellido"));
        $this->Alt_tipo_documento->SetDBValue($this->f("tipo_documento"));
        $this->Alt_num_documento->SetDBValue($this->f("num_documento"));
    }
//End SetValues Method

} //End clientesDataSource Class @68-FCB6E20C

class clsRecordclientesSearch { //clientesSearch Class @110-DF0C7DE5

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

//Class_Initialize Event @110-E48E55AD
    function clsRecordclientesSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record clientesSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "clientesSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "clientes_tipo_docOrder", "clientes_tipo_docDir", "clientes_tipo_docPageSize", "ccsForm"));
            $this->ClearParameters->Page = "Clientes_mant.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->clientes_tipo_docOrder = new clsControl(ccsListBox, "clientes_tipo_docOrder", "clientes_tipo_docOrder", ccsText, "", CCGetRequestParam("clientes_tipo_docOrder", $Method, NULL), $this);
            $this->clientes_tipo_docOrder->DSType = dsListOfValues;
            $this->clientes_tipo_docOrder->Values = array(array("", $CCSLocales->GetText("CCS_SelectField")), array("Sorter_id", $CCSLocales->GetText("id")), array("Sorter_prinombre", $CCSLocales->GetText("prinombre")), array("Sorter_demasnombres", $CCSLocales->GetText("demasnombres")), array("Sorter_priapellido", $CCSLocales->GetText("priapellido")), array("Sorter_segapellido", $CCSLocales->GetText("segapellido")), array("Sorter_tipo_documento", $CCSLocales->GetText("tipo_documento")), array("Sorter_num_documento", $CCSLocales->GetText("num_documento")));
            $this->clientes_tipo_docDir = new clsControl(ccsListBox, "clientes_tipo_docDir", "clientes_tipo_docDir", ccsText, "", CCGetRequestParam("clientes_tipo_docDir", $Method, NULL), $this);
            $this->clientes_tipo_docDir->DSType = dsListOfValues;
            $this->clientes_tipo_docDir->Values = array(array("", $CCSLocales->GetText("CCS_SelectOrder")), array("ASC", $CCSLocales->GetText("CCS_ASC")), array("DESC", $CCSLocales->GetText("CCS_DESC")));
            $this->clientes_tipo_docPageSize = new clsControl(ccsListBox, "clientes_tipo_docPageSize", "clientes_tipo_docPageSize", ccsText, "", CCGetRequestParam("clientes_tipo_docPageSize", $Method, NULL), $this);
            $this->clientes_tipo_docPageSize->DSType = dsListOfValues;
            $this->clientes_tipo_docPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @110-C4E2234D
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->clientes_tipo_docOrder->Validate() && $Validation);
        $Validation = ($this->clientes_tipo_docDir->Validate() && $Validation);
        $Validation = ($this->clientes_tipo_docPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientes_tipo_docOrder->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientes_tipo_docDir->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientes_tipo_docPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @110-85D2CC4C
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->clientes_tipo_docOrder->Errors->Count());
        $errors = ($errors || $this->clientes_tipo_docDir->Errors->Count());
        $errors = ($errors || $this->clientes_tipo_docPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @110-B3E3D7E7
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
        $Redirect = "Clientes_mant.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "Clientes_mant.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @110-105D55DC
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
        $this->clientes_tipo_docOrder->Prepare();
        $this->clientes_tipo_docDir->Prepare();
        $this->clientes_tipo_docPageSize->Prepare();

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
            $Error = ComposeStrings($Error, $this->clientes_tipo_docOrder->Errors->ToString());
            $Error = ComposeStrings($Error, $this->clientes_tipo_docDir->Errors->ToString());
            $Error = ComposeStrings($Error, $this->clientes_tipo_docPageSize->Errors->ToString());
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
        $this->clientes_tipo_docOrder->Show();
        $this->clientes_tipo_docDir->Show();
        $this->clientes_tipo_docPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End clientesSearch Class @110-FCB6E20C



//Initialize Page @1-FE0AF66C
// Variables
$FileName = "";
$Redirect = "";
$Tpl = "";
$TemplateFileName = "";
$BlockToParse = "";
$ComponentName = "";
$Attributes = "";

// Events;
$CCSEvents = "";
$CCSEventResult = "";
$TemplateSource = "";

$FileName = FileName;
$Redirect = "";
$TemplateFileName = "Clientes_mant.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "../";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-6FA69F92
include_once("./Clientes_mant_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-17EAFC27
$DBConnection1 = new clsDBConnection1();
$MainPage->Connections["Connection1"] = & $DBConnection1;
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
$clientes = new clsGridclientes("", $MainPage);
$clientesSearch = new clsRecordclientesSearch("", $MainPage);
$Panel1 = new clsPanel("Panel1", $MainPage);
$Label1 = new clsControl(ccsLabel, "Label1", "Label1", ccsText, "", CCGetRequestParam("Label1", ccsGet, NULL), $MainPage);
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "admin.php";
$Link2 = new clsControl(ccsLink, "Link2", "Link2", ccsText, "", CCGetRequestParam("Link2", ccsGet, NULL), $MainPage);
$Link2->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link2->Page = "rpt_clientes.php";
$MainPage->clientes = & $clientes;
$MainPage->clientesSearch = & $clientesSearch;
$MainPage->Panel1 = & $Panel1;
$MainPage->Label1 = & $Label1;
$MainPage->Link1 = & $Link1;
$MainPage->Link2 = & $Link2;
$Panel1->AddComponent("Label1", $Label1);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("MANTENIMIENTO DE CLIENTES");
$clientes->Initialize();

BindEvents();

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

//Initialize HTML Template @1-28BF1EE2
$CCSEventResult = CCGetEvent($CCSEvents, "OnInitializeView", $MainPage);
$Tpl = new clsTemplate($FileEncoding, $TemplateEncoding);
if (strlen($TemplateSource)) {
    $Tpl->LoadTemplateFromStr($TemplateSource, $BlockToParse, "CP1252", "replace");
} else {
    $Tpl->LoadTemplate(PathToCurrentPage . $TemplateFileName, $BlockToParse, "CP1252", "replace");
}
$Tpl->SetVar("CCS_PathToRoot", $PathToRoot);
$Tpl->block_path = "/$BlockToParse";
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeShow", $MainPage);
$Attributes->SetValue("pathToRoot", "../");
$Attributes->Show();
//End Initialize HTML Template

//Execute Components @1-D417D000
$clientesSearch->Operation();
//End Execute Components

//Go to destination page @1-EC364AA6
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($clientes);
    unset($clientesSearch);
    unset($Tpl);
    exit;
}
//End Go to destination page

//Show Page @1-19505E38
$clientes->Show();
$clientesSearch->Show();
$Panel1->Show();
$Link1->Show();
$Link2->Show();
$Tpl->block_path = "";
$Tpl->Parse($BlockToParse, false);
if (!isset($main_block)) $main_block = $Tpl->GetVar($BlockToParse);
$main_block = CCConvertEncoding($main_block, $FileEncoding, $CCSLocales->GetFormatInfo("Encoding"));
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

//Unload Page @1-EBD79DF9
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($clientes);
unset($clientesSearch);
unset($Tpl);
//End Unload Page


?>
