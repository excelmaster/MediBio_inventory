<?php
//Include Common Files @1-F089E4DB
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "catprod_mant.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-8E4799B9
include_once(RelativePath . "/Designs/medibio_template/medibio_template/MasterPage.php");
//End Master Page implementation

class clsGridcategoria_productos { //categoria_productos class @8-8F7F951B

//Variables @8-53717661

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
    public $Sorter_categoria_descrip;
    public $Sorter_observa_categdescrip;
//End Variables

//Class_Initialize Event @8-3860D89D
    function clsGridcategoria_productos($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "categoria_productos";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->IsAltRow = false;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid categoria_productos";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clscategoria_productosDataSource($this);
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
        $this->SorterName = CCGetParam("categoria_productosOrder", "");
        $this->SorterDirection = CCGetParam("categoria_productosDir", "");

        $this->Data_Detail = new clsPanel("Data_Detail", $this);
        $this->Detail = new clsControl(ccsLink, "Detail", "Detail", ccsText, "", CCGetRequestParam("Detail", ccsGet, NULL), $this);
        $this->Detail->Page = "catprod_mant.php";
        $this->Data_id = new clsPanel("Data_id", $this);
        $this->id = new clsControl(ccsLabel, "id", "id", ccsInteger, "", CCGetRequestParam("id", ccsGet, NULL), $this);
        $this->Data_categoria_descrip = new clsPanel("Data_categoria_descrip", $this);
        $this->categoria_descrip = new clsControl(ccsLabel, "categoria_descrip", "categoria_descrip", ccsText, "", CCGetRequestParam("categoria_descrip", ccsGet, NULL), $this);
        $this->Data_observa_categdescrip = new clsPanel("Data_observa_categdescrip", $this);
        $this->observa_categdescrip = new clsControl(ccsLabel, "observa_categdescrip", "observa_categdescrip", ccsText, "", CCGetRequestParam("observa_categdescrip", ccsGet, NULL), $this);
        $this->Data_Alt_Detail = new clsPanel("Data_Alt_Detail", $this);
        $this->Alt_Detail = new clsControl(ccsLink, "Alt_Detail", "Alt_Detail", ccsText, "", CCGetRequestParam("Alt_Detail", ccsGet, NULL), $this);
        $this->Alt_Detail->Page = "catprod_mant.php";
        $this->Data_Alt_id = new clsPanel("Data_Alt_id", $this);
        $this->Alt_id = new clsControl(ccsLabel, "Alt_id", "Alt_id", ccsInteger, "", CCGetRequestParam("Alt_id", ccsGet, NULL), $this);
        $this->Data_Alt_categoria_descrip = new clsPanel("Data_Alt_categoria_descrip", $this);
        $this->Alt_categoria_descrip = new clsControl(ccsLabel, "Alt_categoria_descrip", "Alt_categoria_descrip", ccsText, "", CCGetRequestParam("Alt_categoria_descrip", ccsGet, NULL), $this);
        $this->Data_Alt_observa_categdescrip = new clsPanel("Data_Alt_observa_categdescrip", $this);
        $this->Alt_observa_categdescrip = new clsControl(ccsLabel, "Alt_observa_categdescrip", "Alt_observa_categdescrip", ccsText, "", CCGetRequestParam("Alt_observa_categdescrip", ccsGet, NULL), $this);
        $this->categoria_productos_Insert = new clsControl(ccsLink, "categoria_productos_Insert", "categoria_productos_Insert", ccsText, "", CCGetRequestParam("categoria_productos_Insert", ccsGet, NULL), $this);
        $this->categoria_productos_Insert->Parameters = CCGetQueryString("QueryString", array("id", "ccsForm"));
        $this->categoria_productos_Insert->Page = "catprod_mant.php";
        $this->categoria_productos_TotalRecords = new clsControl(ccsLabel, "categoria_productos_TotalRecords", "categoria_productos_TotalRecords", ccsText, "", CCGetRequestParam("categoria_productos_TotalRecords", ccsGet, NULL), $this);
        $this->Header_Detail = new clsPanel("Header_Detail", $this);
        $this->Header_id = new clsPanel("Header_id", $this);
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Header_categoria_descrip = new clsPanel("Header_categoria_descrip", $this);
        $this->Sorter_categoria_descrip = new clsSorter($this->ComponentName, "Sorter_categoria_descrip", $FileName, $this);
        $this->Header_observa_categdescrip = new clsPanel("Header_observa_categdescrip", $this);
        $this->Sorter_observa_categdescrip = new clsSorter($this->ComponentName, "Sorter_observa_categdescrip", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
        $this->Header_id->AddComponent("Sorter_id", $this->Sorter_id);
        $this->Header_categoria_descrip->AddComponent("Sorter_categoria_descrip", $this->Sorter_categoria_descrip);
        $this->Header_observa_categdescrip->AddComponent("Sorter_observa_categdescrip", $this->Sorter_observa_categdescrip);
        $this->Data_Detail->AddComponent("Detail", $this->Detail);
        $this->Data_id->AddComponent("id", $this->id);
        $this->Data_categoria_descrip->AddComponent("categoria_descrip", $this->categoria_descrip);
        $this->Data_observa_categdescrip->AddComponent("observa_categdescrip", $this->observa_categdescrip);
        $this->Data_Alt_Detail->AddComponent("Alt_Detail", $this->Alt_Detail);
        $this->Data_Alt_id->AddComponent("Alt_id", $this->Alt_id);
        $this->Data_Alt_categoria_descrip->AddComponent("Alt_categoria_descrip", $this->Alt_categoria_descrip);
        $this->Data_Alt_observa_categdescrip->AddComponent("Alt_observa_categdescrip", $this->Alt_observa_categdescrip);
    }
//End Class_Initialize Event

//Initialize Method @8-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @8-BFF32C1C
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
            $this->ControlsVisible["Data_Detail"] = $this->Data_Detail->Visible;
            $this->ControlsVisible["Detail"] = $this->Detail->Visible;
            $this->ControlsVisible["Data_id"] = $this->Data_id->Visible;
            $this->ControlsVisible["id"] = $this->id->Visible;
            $this->ControlsVisible["Data_categoria_descrip"] = $this->Data_categoria_descrip->Visible;
            $this->ControlsVisible["categoria_descrip"] = $this->categoria_descrip->Visible;
            $this->ControlsVisible["Data_observa_categdescrip"] = $this->Data_observa_categdescrip->Visible;
            $this->ControlsVisible["observa_categdescrip"] = $this->observa_categdescrip->Visible;
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
                    $this->categoria_descrip->SetValue($this->DataSource->categoria_descrip->GetValue());
                    $this->observa_categdescrip->SetValue($this->DataSource->observa_categdescrip->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Data_Detail->Show();
                    $this->Data_id->Show();
                    $this->Data_categoria_descrip->Show();
                    $this->Data_observa_categdescrip->Show();
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                    $Tpl->parse("Row", true);
                }
                else
                {
                    $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/AltRow";
                    $this->Alt_Detail->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                    $this->Alt_Detail->Parameters = CCAddParam($this->Alt_Detail->Parameters, "id", $this->DataSource->f("id"));
                    $this->Alt_id->SetValue($this->DataSource->Alt_id->GetValue());
                    $this->Alt_categoria_descrip->SetValue($this->DataSource->Alt_categoria_descrip->GetValue());
                    $this->Alt_observa_categdescrip->SetValue($this->DataSource->Alt_observa_categdescrip->GetValue());
                    $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                    $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                    $this->Attributes->Show();
                    $this->Data_Alt_Detail->Show();
                    $this->Data_Alt_id->Show();
                    $this->Data_Alt_categoria_descrip->Show();
                    $this->Data_Alt_observa_categdescrip->Show();
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
        $this->categoria_productos_Insert->Show();
        $this->categoria_productos_TotalRecords->Show();
        $this->Header_Detail->Show();
        $this->Header_id->Show();
        $this->Header_categoria_descrip->Show();
        $this->Header_observa_categdescrip->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @8-0AD3B37B
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->categoria_descrip->Errors->ToString());
        $errors = ComposeStrings($errors, $this->observa_categdescrip->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_Detail->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_categoria_descrip->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Alt_observa_categdescrip->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End categoria_productos Class @8-FCB6E20C

class clscategoria_productosDataSource extends clsDBConnection1 {  //categoria_productosDataSource Class @8-A33A36EB

//DataSource Variables @8-C13F5AAB
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $id;
    public $categoria_descrip;
    public $observa_categdescrip;
    public $Alt_id;
    public $Alt_categoria_descrip;
    public $Alt_observa_categdescrip;
//End DataSource Variables

//DataSourceClass_Initialize Event @8-98AB4D2B
    function clscategoria_productosDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid categoria_productos";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->categoria_descrip = new clsField("categoria_descrip", ccsText, "");
        
        $this->observa_categdescrip = new clsField("observa_categdescrip", ccsText, "");
        
        $this->Alt_id = new clsField("Alt_id", ccsInteger, "");
        
        $this->Alt_categoria_descrip = new clsField("Alt_categoria_descrip", ccsText, "");
        
        $this->Alt_observa_categdescrip = new clsField("Alt_observa_categdescrip", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @8-D750B83F
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_categoria_descrip" => array("categoria_descrip", ""), 
            "Sorter_observa_categdescrip" => array("observa_categdescrip", "")));
    }
//End SetOrder Method

//Prepare Method @8-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @8-2552AA36
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM categoria_productos";
        $this->SQL = "SELECT id, categoria_descrip, observa_categdescrip \n\n" .
        "FROM categoria_productos {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @8-7516664A
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->categoria_descrip->SetDBValue($this->f("categoria_descrip"));
        $this->observa_categdescrip->SetDBValue($this->f("observa_categdescrip"));
        $this->Alt_id->SetDBValue(trim($this->f("id")));
        $this->Alt_categoria_descrip->SetDBValue($this->f("categoria_descrip"));
        $this->Alt_observa_categdescrip->SetDBValue($this->f("observa_categdescrip"));
    }
//End SetValues Method

} //End categoria_productosDataSource Class @8-FCB6E20C

class clsRecordcategoria_productosSearch { //categoria_productosSearch Class @42-10D8E569

//Variables @42-9E315808

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

//Class_Initialize Event @42-56A659AF
    function clsRecordcategoria_productosSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record categoria_productosSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "categoria_productosSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "categoria_productosOrder", "categoria_productosDir", "categoria_productosPageSize", "ccsForm"));
            $this->ClearParameters->Page = "catprod_mant.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->categoria_productosOrder = new clsControl(ccsListBox, "categoria_productosOrder", "categoria_productosOrder", ccsText, "", CCGetRequestParam("categoria_productosOrder", $Method, NULL), $this);
            $this->categoria_productosOrder->DSType = dsListOfValues;
            $this->categoria_productosOrder->Values = array(array("", $CCSLocales->GetText("CCS_SelectField")), array("Sorter_id", $CCSLocales->GetText("id")), array("Sorter_categoria_descrip", $CCSLocales->GetText("categoria_descrip")), array("Sorter_observa_categdescrip", $CCSLocales->GetText("observa_categdescrip")));
            $this->categoria_productosDir = new clsControl(ccsListBox, "categoria_productosDir", "categoria_productosDir", ccsText, "", CCGetRequestParam("categoria_productosDir", $Method, NULL), $this);
            $this->categoria_productosDir->DSType = dsListOfValues;
            $this->categoria_productosDir->Values = array(array("", $CCSLocales->GetText("CCS_SelectOrder")), array("ASC", $CCSLocales->GetText("CCS_ASC")), array("DESC", $CCSLocales->GetText("CCS_DESC")));
            $this->categoria_productosPageSize = new clsControl(ccsListBox, "categoria_productosPageSize", "categoria_productosPageSize", ccsText, "", CCGetRequestParam("categoria_productosPageSize", $Method, NULL), $this);
            $this->categoria_productosPageSize->DSType = dsListOfValues;
            $this->categoria_productosPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @42-6EAD2F5D
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->categoria_productosOrder->Validate() && $Validation);
        $Validation = ($this->categoria_productosDir->Validate() && $Validation);
        $Validation = ($this->categoria_productosPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->categoria_productosOrder->Errors->Count() == 0);
        $Validation =  $Validation && ($this->categoria_productosDir->Errors->Count() == 0);
        $Validation =  $Validation && ($this->categoria_productosPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @42-92E4B8A2
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->categoria_productosOrder->Errors->Count());
        $errors = ($errors || $this->categoria_productosDir->Errors->Count());
        $errors = ($errors || $this->categoria_productosPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @42-CB5AB6D1
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
        $Redirect = "catprod_mant.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "catprod_mant.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @42-69358ECC
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
        $this->categoria_productosOrder->Prepare();
        $this->categoria_productosDir->Prepare();
        $this->categoria_productosPageSize->Prepare();

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
            $Error = ComposeStrings($Error, $this->categoria_productosOrder->Errors->ToString());
            $Error = ComposeStrings($Error, $this->categoria_productosDir->Errors->ToString());
            $Error = ComposeStrings($Error, $this->categoria_productosPageSize->Errors->ToString());
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
        $this->categoria_productosOrder->Show();
        $this->categoria_productosDir->Show();
        $this->categoria_productosPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End categoria_productosSearch Class @42-FCB6E20C

class clsRecordcategoria_productos1 { //categoria_productos1 Class @51-BF332D30

//Variables @51-9E315808

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

//Class_Initialize Event @51-C8CBBA8F
    function clsRecordcategoria_productos1($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record categoria_productos1/Error";
        $this->DataSource = new clscategoria_productos1DataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "categoria_productos1";
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
            $this->categoria_descrip = new clsControl(ccsTextBox, "categoria_descrip", $CCSLocales->GetText("categoria_descrip"), ccsText, "", CCGetRequestParam("categoria_descrip", $Method, NULL), $this);
            $this->tag_categdescrip = new clsControl(ccsTextBox, "tag_categdescrip", $CCSLocales->GetText("tag_categdescrip"), ccsText, "", CCGetRequestParam("tag_categdescrip", $Method, NULL), $this);
            $this->observa_categdescrip = new clsControl(ccsTextBox, "observa_categdescrip", $CCSLocales->GetText("observa_categdescrip"), ccsText, "", CCGetRequestParam("observa_categdescrip", $Method, NULL), $this);
        }
    }
//End Class_Initialize Event

//Initialize Method @51-2832F4DC
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlid"] = CCGetFromGet("id", NULL);
    }
//End Initialize Method

//Validate Method @51-A167455C
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->categoria_descrip->Validate() && $Validation);
        $Validation = ($this->tag_categdescrip->Validate() && $Validation);
        $Validation = ($this->observa_categdescrip->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->categoria_descrip->Errors->Count() == 0);
        $Validation =  $Validation && ($this->tag_categdescrip->Errors->Count() == 0);
        $Validation =  $Validation && ($this->observa_categdescrip->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @51-C6808865
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->categoria_descrip->Errors->Count());
        $errors = ($errors || $this->tag_categdescrip->Errors->Count());
        $errors = ($errors || $this->observa_categdescrip->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @51-0BF2B389
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

//InsertRow Method @51-1AE5F086
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->categoria_descrip->SetValue($this->categoria_descrip->GetValue(true));
        $this->DataSource->tag_categdescrip->SetValue($this->tag_categdescrip->GetValue(true));
        $this->DataSource->observa_categdescrip->SetValue($this->observa_categdescrip->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//UpdateRow Method @51-11578BA7
    function UpdateRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeUpdate", $this);
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->categoria_descrip->SetValue($this->categoria_descrip->GetValue(true));
        $this->DataSource->tag_categdescrip->SetValue($this->tag_categdescrip->GetValue(true));
        $this->DataSource->observa_categdescrip->SetValue($this->observa_categdescrip->GetValue(true));
        $this->DataSource->Update();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterUpdate", $this);
        return (!$this->CheckErrors());
    }
//End UpdateRow Method

//Show Method @51-007072B5
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
                    $this->categoria_descrip->SetValue($this->DataSource->categoria_descrip->GetValue());
                    $this->tag_categdescrip->SetValue($this->DataSource->tag_categdescrip->GetValue());
                    $this->observa_categdescrip->SetValue($this->DataSource->observa_categdescrip->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->categoria_descrip->Errors->ToString());
            $Error = ComposeStrings($Error, $this->tag_categdescrip->Errors->ToString());
            $Error = ComposeStrings($Error, $this->observa_categdescrip->Errors->ToString());
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
        $this->categoria_descrip->Show();
        $this->tag_categdescrip->Show();
        $this->observa_categdescrip->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End categoria_productos1 Class @51-FCB6E20C

class clscategoria_productos1DataSource extends clsDBConnection1 {  //categoria_productos1DataSource Class @51-CA397811

//DataSource Variables @51-657185AE
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
    public $categoria_descrip;
    public $tag_categdescrip;
    public $observa_categdescrip;
//End DataSource Variables

//DataSourceClass_Initialize Event @51-446E6F0D
    function clscategoria_productos1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record categoria_productos1/Error";
        $this->Initialize();
        $this->categoria_descrip = new clsField("categoria_descrip", ccsText, "");
        
        $this->tag_categdescrip = new clsField("tag_categdescrip", ccsText, "");
        
        $this->observa_categdescrip = new clsField("observa_categdescrip", ccsText, "");
        

        $this->InsertFields["categoria_descrip"] = array("Name" => "categoria_descrip", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["tag_categdescrip"] = array("Name" => "tag_categdescrip", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["observa_categdescrip"] = array("Name" => "observa_categdescrip", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["categoria_descrip"] = array("Name" => "categoria_descrip", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["tag_categdescrip"] = array("Name" => "tag_categdescrip", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["observa_categdescrip"] = array("Name" => "observa_categdescrip", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//Prepare Method @51-35B33087
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

//Open Method @51-0EEAEDAE
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM categoria_productos {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @51-4DDFE9B9
    function SetValues()
    {
        $this->categoria_descrip->SetDBValue($this->f("categoria_descrip"));
        $this->tag_categdescrip->SetDBValue($this->f("tag_categdescrip"));
        $this->observa_categdescrip->SetDBValue($this->f("observa_categdescrip"));
    }
//End SetValues Method

//Insert Method @51-CE63F701
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["categoria_descrip"]["Value"] = $this->categoria_descrip->GetDBValue(true);
        $this->InsertFields["tag_categdescrip"]["Value"] = $this->tag_categdescrip->GetDBValue(true);
        $this->InsertFields["observa_categdescrip"]["Value"] = $this->observa_categdescrip->GetDBValue(true);
        $this->SQL = CCBuildInsert("categoria_productos", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @51-B5654499
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $this->UpdateFields["categoria_descrip"]["Value"] = $this->categoria_descrip->GetDBValue(true);
        $this->UpdateFields["tag_categdescrip"]["Value"] = $this->tag_categdescrip->GetDBValue(true);
        $this->UpdateFields["observa_categdescrip"]["Value"] = $this->observa_categdescrip->GetDBValue(true);
        $this->SQL = CCBuildUpdate("categoria_productos", $this->UpdateFields, $this);
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

} //End categoria_productos1DataSource Class @51-FCB6E20C

//Initialize Page @1-9209E6CF
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
$TemplateFileName = "catprod_mant.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-7906A939
include_once("./catprod_mant_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-9A703898
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
$categoria_productos = new clsGridcategoria_productos("", $MainPage);
$categoria_productosSearch = new clsRecordcategoria_productosSearch("", $MainPage);
$categoria_productos1 = new clsRecordcategoria_productos1("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Logout = new clsControl(ccsLink, "Logout", "Logout", ccsText, "", CCGetRequestParam("Logout", ccsGet, NULL), $MainPage);
$Logout->Page = "login.php";
$Sidebar1 = new clsPanel("Sidebar1", $MainPage);
$Sidebar1->PlaceholderName = "Sidebar1";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->Panel1 = & $Panel1;
$MainPage->Label1 = & $Label1;
$MainPage->categoria_productos = & $categoria_productos;
$MainPage->categoria_productosSearch = & $categoria_productosSearch;
$MainPage->categoria_productos1 = & $categoria_productos1;
$MainPage->Menu = & $Menu;
$MainPage->Logout = & $Logout;
$MainPage->Sidebar1 = & $Sidebar1;
$Content->AddComponent("categoria_productos", $categoria_productos);
$Content->AddComponent("categoria_productosSearch", $categoria_productosSearch);
$Content->AddComponent("categoria_productos1", $categoria_productos1);
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("Label1", $Label1);
$Menu->AddComponent("Logout", $Logout);
if(!is_array($Label1->Value) && !strlen($Label1->Value) && $Label1->Value !== false)
    $Label1->SetText("CATEGORIAS DE PRODUCTOS");
$Logout->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Logout->Parameters = CCAddParam($Logout->Parameters, "Logout", "True");
$categoria_productos->Initialize();
$categoria_productos1->Initialize();

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

//Execute Components @1-7405D8C7
$MasterPage->Operations();
$categoria_productos1->Operation();
$categoria_productosSearch->Operation();
//End Execute Components

//Go to destination page @1-3B932977
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($categoria_productos);
    unset($categoria_productosSearch);
    unset($categoria_productos1);
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

//Unload Page @1-D4980264
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($categoria_productos);
unset($categoria_productosSearch);
unset($categoria_productos1);
unset($Tpl);
//End Unload Page


?>
