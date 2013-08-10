<?php
//Include Common Files @1-331F52C7
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "Clientes_mant.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

<<<<<<< HEAD
class clsGridclientes { //clientes class @68-9CC2092A

//Variables @68-57A9933C
=======
class clsGridclientes { //clientes class @6-9CC2092A

//Variables @6-B483418D
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449

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
<<<<<<< HEAD
    public $Sorter_tipo_documento;
    public $Sorter_num_documento;
//End Variables

//Class_Initialize Event @68-8C23AE8F
=======
    public $Sorter_num_documento;
//End Variables

//Class_Initialize Event @6-8671A2D5
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
        $this->Detail->Page = "Crud_Clentes.php";
=======
        $this->Detail->Page = "Clientes_mant.php";
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->id = new clsControl(ccsLabel, "id", "id", ccsInteger, "", CCGetRequestParam("id", ccsGet, NULL), $this);
        $this->prinombre = new clsControl(ccsLabel, "prinombre", "prinombre", ccsText, "", CCGetRequestParam("prinombre", ccsGet, NULL), $this);
        $this->demasnombres = new clsControl(ccsLabel, "demasnombres", "demasnombres", ccsText, "", CCGetRequestParam("demasnombres", ccsGet, NULL), $this);
        $this->priapellido = new clsControl(ccsLabel, "priapellido", "priapellido", ccsText, "", CCGetRequestParam("priapellido", ccsGet, NULL), $this);
        $this->segapellido = new clsControl(ccsLabel, "segapellido", "segapellido", ccsText, "", CCGetRequestParam("segapellido", ccsGet, NULL), $this);
<<<<<<< HEAD
        $this->tipo_documento = new clsControl(ccsLabel, "tipo_documento", "tipo_documento", ccsText, "", CCGetRequestParam("tipo_documento", ccsGet, NULL), $this);
        $this->num_documento = new clsControl(ccsLabel, "num_documento", "num_documento", ccsText, "", CCGetRequestParam("num_documento", ccsGet, NULL), $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "Crud_Clentes.php";
=======
        $this->num_documento = new clsControl(ccsLabel, "num_documento", "num_documento", ccsText, "", CCGetRequestParam("num_documento", ccsGet, NULL), $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "Clientes_mant.php";
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->Alt_id = new clsControl(ccsLabel, "Alt_id", "Alt_id", ccsInteger, "", CCGetRequestParam("Alt_id", ccsGet, NULL), $this);
        $this->Alt_prinombre = new clsControl(ccsLabel, "Alt_prinombre", "Alt_prinombre", ccsText, "", CCGetRequestParam("Alt_prinombre", ccsGet, NULL), $this);
        $this->Alt_demasnombres = new clsControl(ccsLabel, "Alt_demasnombres", "Alt_demasnombres", ccsText, "", CCGetRequestParam("Alt_demasnombres", ccsGet, NULL), $this);
        $this->Alt_priapellido = new clsControl(ccsLabel, "Alt_priapellido", "Alt_priapellido", ccsText, "", CCGetRequestParam("Alt_priapellido", ccsGet, NULL), $this);
        $this->Alt_segapellido = new clsControl(ccsLabel, "Alt_segapellido", "Alt_segapellido", ccsText, "", CCGetRequestParam("Alt_segapellido", ccsGet, NULL), $this);
<<<<<<< HEAD
        $this->Alt_tipo_documento = new clsControl(ccsLabel, "Alt_tipo_documento", "Alt_tipo_documento", ccsText, "", CCGetRequestParam("Alt_tipo_documento", ccsGet, NULL), $this);
        $this->Alt_num_documento = new clsControl(ccsLabel, "Alt_num_documento", "Alt_num_documento", ccsText, "", CCGetRequestParam("Alt_num_documento", ccsGet, NULL), $this);
=======
        $this->Alt_num_documento = new clsControl(ccsLabel, "Alt_num_documento", "Alt_num_documento", ccsText, "", CCGetRequestParam("Alt_num_documento", ccsGet, NULL), $this);
        $this->clientes_Insert = new clsControl(ccsLink, "clientes_Insert", "clientes_Insert", ccsText, "", CCGetRequestParam("clientes_Insert", ccsGet, NULL), $this);
        $this->clientes_Insert->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->clientes_Insert->Page = "Clientes_mant.php";
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->clientes_TotalRecords = new clsControl(ccsLabel, "clientes_TotalRecords", "clientes_TotalRecords", ccsText, "", CCGetRequestParam("clientes_TotalRecords", ccsGet, NULL), $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Sorter_prinombre = new clsSorter($this->ComponentName, "Sorter_prinombre", $FileName, $this);
        $this->Sorter_demasnombres = new clsSorter($this->ComponentName, "Sorter_demasnombres", $FileName, $this);
        $this->Sorter_priapellido = new clsSorter($this->ComponentName, "Sorter_priapellido", $FileName, $this);
        $this->Sorter_segapellido = new clsSorter($this->ComponentName, "Sorter_segapellido", $FileName, $this);
<<<<<<< HEAD
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
=======
        $this->Sorter_num_documento = new clsSorter($this->ComponentName, "Sorter_num_documento", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

//Initialize Method @6-90E704C5
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

<<<<<<< HEAD
//Show Method @68-D85679AE
=======
//Show Method @6-0414DAEA
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
            $this->ControlsVisible["tipo_documento"] = $this->tipo_documento->Visible;
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
                    $this->tipo_documento->SetValue($this->DataSource->tipo_documento->GetValue());
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
                    $this->tipo_documento->Show();
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
                    $this->Alt_tipo_documento->SetValue($this->DataSource->Alt_tipo_documento->GetValue());
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
                    $this->Alt_tipo_documento->Show();
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
=======
        $this->clientes_Insert->Show();
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->clientes_TotalRecords->Show();
        $this->Sorter_id->Show();
        $this->Sorter_prinombre->Show();
        $this->Sorter_demasnombres->Show();
        $this->Sorter_priapellido->Show();
        $this->Sorter_segapellido->Show();
<<<<<<< HEAD
        $this->Sorter_tipo_documento->Show();
        $this->Sorter_num_documento->Show();
        $this->Navigator->Show();
        $this->clientes_Insert1->Show();
        $this->clientes_Insert2->Show();
=======
        $this->Sorter_num_documento->Show();
        $this->Navigator->Show();
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

<<<<<<< HEAD
//GetErrors Method @68-F4912F30
=======
//GetErrors Method @6-83C2D717
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->prinombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->demasnombres->Errors->ToString());
        $errors = ComposeStrings($errors, $this->priapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->segapellido->Errors->ToString());
<<<<<<< HEAD
        $errors = ComposeStrings($errors, $this->tipo_documento->Errors->ToString());
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $errors = ComposeStrings($errors, $this->num_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_prinombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_demasnombres->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_priapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_segapellido->Errors->ToString());
<<<<<<< HEAD
        $errors = ComposeStrings($errors, $this->Alt_tipo_documento->Errors->ToString());
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $errors = ComposeStrings($errors, $this->Alt_num_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

<<<<<<< HEAD
} //End clientes Class @68-FCB6E20C

class clsclientesDataSource extends clsDBConnection1 {  //clientesDataSource Class @68-E85581CD

//DataSource Variables @68-A74FAAE9
=======
} //End clientes Class @6-FCB6E20C

class clsclientesDataSource extends clsDBConnection1 {  //clientesDataSource Class @6-E85581CD

//DataSource Variables @6-52121217
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
    public $tipo_documento;
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    public $num_documento;
    public $Alt_id;
    public $Alt_prinombre;
    public $Alt_demasnombres;
    public $Alt_priapellido;
    public $Alt_segapellido;
<<<<<<< HEAD
    public $Alt_tipo_documento;
    public $Alt_num_documento;
//End DataSource Variables

//DataSourceClass_Initialize Event @68-EC9A9018
=======
    public $Alt_num_documento;
//End DataSource Variables

//DataSourceClass_Initialize Event @6-3362B904
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
        
<<<<<<< HEAD
        $this->tipo_documento = new clsField("tipo_documento", ccsText, "");
        
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->num_documento = new clsField("num_documento", ccsText, "");
        
        $this->Alt_id = new clsField("Alt_id", ccsInteger, "");
        
        $this->Alt_prinombre = new clsField("Alt_prinombre", ccsText, "");
        
        $this->Alt_demasnombres = new clsField("Alt_demasnombres", ccsText, "");
        
        $this->Alt_priapellido = new clsField("Alt_priapellido", ccsText, "");
        
        $this->Alt_segapellido = new clsField("Alt_segapellido", ccsText, "");
        
<<<<<<< HEAD
        $this->Alt_tipo_documento = new clsField("Alt_tipo_documento", ccsText, "");
        
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->Alt_num_documento = new clsField("Alt_num_documento", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

<<<<<<< HEAD
//SetOrder Method @68-F9193203
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "priapellido, segapellido, prinombre desc";
=======
//SetOrder Method @6-49C349AC
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_prinombre" => array("prinombre", ""), 
            "Sorter_demasnombres" => array("demasnombres", ""), 
            "Sorter_priapellido" => array("priapellido", ""), 
            "Sorter_segapellido" => array("segapellido", ""), 
<<<<<<< HEAD
            "Sorter_tipo_documento" => array("tipo_documento", ""), 
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
            "Sorter_num_documento" => array("num_documento", "")));
    }
//End SetOrder Method

<<<<<<< HEAD
//Prepare Method @68-14D6CD9D
=======
//Prepare Method @6-14D6CD9D
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

<<<<<<< HEAD
//Open Method @68-3D4FCCFB
=======
//Open Method @6-FCD59842
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
<<<<<<< HEAD
        "FROM clientes INNER JOIN tipo_doc ON\n\n" .
        "clientes.tipo_documento = tipo_doc.id_tip_doc";
        $this->SQL = "SELECT id, priapellido, segapellido, prinombre, demasnombres, tipo_documento, num_documento \n\n" .
        "FROM clientes INNER JOIN tipo_doc ON\n\n" .
        "clientes.tipo_documento = tipo_doc.id_tip_doc {SQL_Where} {SQL_OrderBy}";
=======
        "FROM clientes";
        $this->SQL = "SELECT id, demasnombres, prinombre, priapellido, segapellido, num_documento \n\n" .
        "FROM clientes {SQL_Where} {SQL_OrderBy}";
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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

<<<<<<< HEAD
//SetValues Method @68-121B0749
=======
//SetValues Method @6-B55F96EF
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->prinombre->SetDBValue($this->f("prinombre"));
        $this->demasnombres->SetDBValue($this->f("demasnombres"));
        $this->priapellido->SetDBValue($this->f("priapellido"));
        $this->segapellido->SetDBValue($this->f("segapellido"));
<<<<<<< HEAD
        $this->tipo_documento->SetDBValue($this->f("tipo_documento"));
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->num_documento->SetDBValue($this->f("num_documento"));
        $this->Alt_id->SetDBValue(trim($this->f("id")));
        $this->Alt_prinombre->SetDBValue($this->f("prinombre"));
        $this->Alt_demasnombres->SetDBValue($this->f("demasnombres"));
        $this->Alt_priapellido->SetDBValue($this->f("priapellido"));
        $this->Alt_segapellido->SetDBValue($this->f("segapellido"));
<<<<<<< HEAD
        $this->Alt_tipo_documento->SetDBValue($this->f("tipo_documento"));
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $this->Alt_num_documento->SetDBValue($this->f("num_documento"));
    }
//End SetValues Method

<<<<<<< HEAD
} //End clientesDataSource Class @68-FCB6E20C

class clsRecordclientesSearch { //clientesSearch Class @110-DF0C7DE5

//Variables @110-9E315808
=======
} //End clientesDataSource Class @6-FCB6E20C

class clsRecordclientesSearch { //clientesSearch Class @40-DF0C7DE5

//Variables @40-9E315808
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449

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

<<<<<<< HEAD
//Class_Initialize Event @110-E48E55AD
=======
//Class_Initialize Event @40-6614F1B9
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "clientes_tipo_docOrder", "clientes_tipo_docDir", "clientes_tipo_docPageSize", "ccsForm"));
=======
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "clientesPageSize", "ccsForm"));
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
            $this->ClearParameters->Page = "Clientes_mant.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
<<<<<<< HEAD
            $this->clientes_tipo_docOrder = new clsControl(ccsListBox, "clientes_tipo_docOrder", "clientes_tipo_docOrder", ccsText, "", CCGetRequestParam("clientes_tipo_docOrder", $Method, NULL), $this);
            $this->clientes_tipo_docOrder->DSType = dsListOfValues;
            $this->clientes_tipo_docOrder->Values = array(array("", $CCSLocales->GetText("CCS_SelectField")), array("Sorter_id", $CCSLocales->GetText("id")), array("Sorter_prinombre", $CCSLocales->GetText("prinombre")), array("Sorter_demasnombres", $CCSLocales->GetText("demasnombres")), array("Sorter_priapellido", $CCSLocales->GetText("priapellido")), array("Sorter_segapellido", $CCSLocales->GetText("segapellido")), array("Sorter_tipo_documento", $CCSLocales->GetText("tipo_documento")), array("Sorter_num_documento", $CCSLocales->GetText("num_documento")));
            $this->clientes_tipo_docDir = new clsControl(ccsListBox, "clientes_tipo_docDir", "clientes_tipo_docDir", ccsText, "", CCGetRequestParam("clientes_tipo_docDir", $Method, NULL), $this);
            $this->clientes_tipo_docDir->DSType = dsListOfValues;
            $this->clientes_tipo_docDir->Values = array(array("", $CCSLocales->GetText("CCS_SelectOrder")), array("ASC", $CCSLocales->GetText("CCS_ASC")), array("DESC", $CCSLocales->GetText("CCS_DESC")));
            $this->clientes_tipo_docPageSize = new clsControl(ccsListBox, "clientes_tipo_docPageSize", "clientes_tipo_docPageSize", ccsText, "", CCGetRequestParam("clientes_tipo_docPageSize", $Method, NULL), $this);
            $this->clientes_tipo_docPageSize->DSType = dsListOfValues;
            $this->clientes_tipo_docPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
=======
            $this->clientesPageSize = new clsControl(ccsListBox, "clientesPageSize", "clientesPageSize", ccsText, "", CCGetRequestParam("clientesPageSize", $Method, NULL), $this);
            $this->clientesPageSize->DSType = dsListOfValues;
            $this->clientesPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        }
    }
//End Class_Initialize Event

<<<<<<< HEAD
//Validate Method @110-C4E2234D
=======
//Validate Method @40-F48F1C01
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
<<<<<<< HEAD
        $Validation = ($this->clientes_tipo_docOrder->Validate() && $Validation);
        $Validation = ($this->clientes_tipo_docDir->Validate() && $Validation);
        $Validation = ($this->clientes_tipo_docPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientes_tipo_docOrder->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientes_tipo_docDir->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientes_tipo_docPageSize->Errors->Count() == 0);
=======
        $Validation = ($this->clientesPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientesPageSize->Errors->Count() == 0);
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

<<<<<<< HEAD
//CheckErrors Method @110-85D2CC4C
=======
//CheckErrors Method @40-32E414B8
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
<<<<<<< HEAD
        $errors = ($errors || $this->clientes_tipo_docOrder->Errors->Count());
        $errors = ($errors || $this->clientes_tipo_docDir->Errors->Count());
        $errors = ($errors || $this->clientes_tipo_docPageSize->Errors->Count());
=======
        $errors = ($errors || $this->clientesPageSize->Errors->Count());
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

<<<<<<< HEAD
//Operation Method @110-B3E3D7E7
=======
//Operation Method @40-B3E3D7E7
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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

<<<<<<< HEAD
//Show Method @110-105D55DC
=======
//Show Method @40-59E84131
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
        $this->clientes_tipo_docOrder->Prepare();
        $this->clientes_tipo_docDir->Prepare();
        $this->clientes_tipo_docPageSize->Prepare();
=======
        $this->clientesPageSize->Prepare();
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449

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
<<<<<<< HEAD
            $Error = ComposeStrings($Error, $this->clientes_tipo_docOrder->Errors->ToString());
            $Error = ComposeStrings($Error, $this->clientes_tipo_docDir->Errors->ToString());
            $Error = ComposeStrings($Error, $this->clientes_tipo_docPageSize->Errors->ToString());
=======
            $Error = ComposeStrings($Error, $this->clientesPageSize->Errors->ToString());
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
<<<<<<< HEAD
        $this->clientes_tipo_docOrder->Show();
        $this->clientes_tipo_docDir->Show();
        $this->clientes_tipo_docPageSize->Show();
=======
        $this->clientesPageSize->Show();
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

<<<<<<< HEAD
} //End clientesSearch Class @110-FCB6E20C


=======
} //End clientesSearch Class @40-FCB6E20C

class clsRecordclientes1 { //clientes1 Class @47-7A5F99DF

//Variables @47-9E315808

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

//Class_Initialize Event @47-3A9C1419
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
            list($this->lugar_nacimiento->BoundColumn, $this->lugar_nacimiento->TextColumn, $this->lugar_nacimiento->DBFormat) = array("cod_Ciudad_DANE", "Munc_Depto", "");
            $this->lugar_nacimiento->Required = true;
            $this->fecha_nacimiento = new clsControl(ccsTextBox, "fecha_nacimiento", $CCSLocales->GetText("fecha_nacimiento"), ccsDate, array("ShortDate"), CCGetRequestParam("fecha_nacimiento", $Method, NULL), $this);
            $this->lugar_residencia = new clsControl(ccsListBox, "lugar_residencia", $CCSLocales->GetText("lugar_residencia"), ccsInteger, "", CCGetRequestParam("lugar_residencia", $Method, NULL), $this);
            $this->lugar_residencia->DSType = dsTable;
            $this->lugar_residencia->DataSource = new clsDBConnection1();
            $this->lugar_residencia->ds = & $this->lugar_residencia->DataSource;
            $this->lugar_residencia->DataSource->SQL = "SELECT * \n" .
"FROM munc_dane {SQL_Where} {SQL_OrderBy}";
            list($this->lugar_residencia->BoundColumn, $this->lugar_residencia->TextColumn, $this->lugar_residencia->DBFormat) = array("cod_Ciudad_DANE", "Munc_Depto", "");
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
        }
    }
//End Class_Initialize Event

//Initialize Method @47-2832F4DC
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlid"] = CCGetFromGet("id", NULL);
    }
//End Initialize Method

//Validate Method @47-5CE70BDB
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

//CheckErrors Method @47-6AA51FB2
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
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @47-0BF2B389
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

//InsertRow Method @47-3E17C2F8
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

//UpdateRow Method @47-E99FB6BD
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

//Show Method @47-AF7CBA23
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
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End clientes1 Class @47-FCB6E20C

class clsclientes1DataSource extends clsDBConnection1 {  //clientes1DataSource Class @47-187F925B

//DataSource Variables @47-908727F6
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

//DataSourceClass_Initialize Event @47-31D7894A
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

//Prepare Method @47-35B33087
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

//Open Method @47-07B99F3C
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

//SetValues Method @47-68F733D0
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

//Insert Method @47-9C3F39A9
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

//Update Method @47-155461AA
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

} //End clientes1DataSource Class @47-FCB6E20C
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449

//Initialize Page @1-1DBA1798
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
$TemplateFileName = "Clientes_mant.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-6FA69F92
include_once("./Clientes_mant_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

<<<<<<< HEAD
//Initialize Objects @1-D8394736
=======
//Initialize Objects @1-387C0181
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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
$clientes = new clsGridclientes("", $MainPage);
$clientesSearch = new clsRecordclientesSearch("", $MainPage);
<<<<<<< HEAD
=======
$clientes1 = new clsRecordclientes1("", $MainPage);
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$Panel1 = new clsPanel("Panel1", $MainPage);
$Label1 = new clsControl(ccsLabel, "Label1", "Label1", ccsText, "", CCGetRequestParam("Label1", ccsGet, NULL), $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
<<<<<<< HEAD
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "admin.php";
$Link2 = new clsControl(ccsLink, "Link2", "Link2", ccsText, "", CCGetRequestParam("Link2", ccsGet, NULL), $MainPage);
$Link2->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link2->Page = "rpt_clientes.php";
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->clientes = & $clientes;
$MainPage->clientesSearch = & $clientesSearch;
<<<<<<< HEAD
=======
$MainPage->clientes1 = & $clientes1;
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$MainPage->Panel1 = & $Panel1;
$MainPage->Label1 = & $Label1;
$MainPage->Menu = & $Menu;
$MainPage->Sidebar1 = & $Sidebar1;
<<<<<<< HEAD
$MainPage->Link1 = & $Link1;
$MainPage->Link2 = & $Link2;
$Content->AddComponent("clientes", $clientes);
$Content->AddComponent("clientesSearch", $clientesSearch);
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("Label1", $Label1);
$Sidebar1->AddComponent("Link1", $Link1);
$Sidebar1->AddComponent("Link2", $Link2);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("MANTENIMIENTO DE CLIENTES");
$clientes->Initialize();
=======
$Content->AddComponent("clientes", $clientes);
$Content->AddComponent("clientesSearch", $clientesSearch);
$Content->AddComponent("clientes1", $clientes1);
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("Label1", $Label1);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("Mantenimiento de clientes");
$clientes->Initialize();
$clientes1->Initialize();
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449

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

<<<<<<< HEAD
//Execute Components @1-3F626C66
$MasterPage->Operations();
$clientesSearch->Operation();
//End Execute Components

//Go to destination page @1-EC364AA6
=======
//Execute Components @1-F69B982B
$MasterPage->Operations();
$clientes1->Operation();
$clientesSearch->Operation();
//End Execute Components

//Go to destination page @1-BBD865B2
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($clientes);
    unset($clientesSearch);
<<<<<<< HEAD
=======
    unset($clientes1);
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
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

<<<<<<< HEAD
//Unload Page @1-289E8542
=======
//Unload Page @1-D3014A64
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($clientes);
unset($clientesSearch);
<<<<<<< HEAD
=======
unset($clientes1);
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
unset($Tpl);
//End Unload Page


?>
