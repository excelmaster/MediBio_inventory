<?php
//Include Common Files @1-2795F8C3
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "rpt_provee.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-E714A8AA
include_once(RelativePath . "/Designs/medibio_reports/medibio_reports/MasterPage.php");
//End Master Page implementation

//proveedores ReportGroup class @8-5A44EF1A
class clsReportGroupproveedores {
    public $GroupType;
    public $mode; //1 - open, 2 - close
    public $Report_TotalRecords, $_Report_TotalRecordsAttributes;
    public $id, $_idAttributes;
    public $razon_social, $_razon_socialAttributes;
    public $nombre, $_nombreAttributes;
    public $nit, $_nitAttributes;
    public $direccion_1, $_direccion_1Attributes;
    public $telfijo_1, $_telfijo_1Attributes;
    public $celular_1, $_celular_1Attributes;
    public $Report_CurrentDateTime, $_Report_CurrentDateTimeAttributes;
    public $Attributes;
    public $ReportTotalIndex = 0;
    public $PageTotalIndex;
    public $PageNumber;
    public $RowNumber;
    public $Parent;

    function clsReportGroupproveedores(& $parent) {
        $this->Parent = & $parent;
        $this->Attributes = $this->Parent->Attributes->GetAsArray();
    }
    function SetControls($PrevGroup = "") {
        $this->id = $this->Parent->id->Value;
        $this->razon_social = $this->Parent->razon_social->Value;
        $this->nombre = $this->Parent->nombre->Value;
        $this->nit = $this->Parent->nit->Value;
        $this->direccion_1 = $this->Parent->direccion_1->Value;
        $this->telfijo_1 = $this->Parent->telfijo_1->Value;
        $this->celular_1 = $this->Parent->celular_1->Value;
    }

    function SetTotalControls($mode = "", $PrevGroup = "") {
        $this->Report_TotalRecords = $this->Parent->Report_TotalRecords->GetTotalValue($mode);
        $this->_Report_TotalRecordsAttributes = $this->Parent->Report_TotalRecords->Attributes->GetAsArray();
        $this->_Sorter_idAttributes = $this->Parent->Sorter_id->Attributes->GetAsArray();
        $this->_Sorter_razon_socialAttributes = $this->Parent->Sorter_razon_social->Attributes->GetAsArray();
        $this->_Sorter_nombreAttributes = $this->Parent->Sorter_nombre->Attributes->GetAsArray();
        $this->_Sorter_nitAttributes = $this->Parent->Sorter_nit->Attributes->GetAsArray();
        $this->_Sorter_direccion_1Attributes = $this->Parent->Sorter_direccion_1->Attributes->GetAsArray();
        $this->_Sorter_telfijo_1Attributes = $this->Parent->Sorter_telfijo_1->Attributes->GetAsArray();
        $this->_Sorter_celular_1Attributes = $this->Parent->Sorter_celular_1->Attributes->GetAsArray();
        $this->_idAttributes = $this->Parent->id->Attributes->GetAsArray();
        $this->_razon_socialAttributes = $this->Parent->razon_social->Attributes->GetAsArray();
        $this->_nombreAttributes = $this->Parent->nombre->Attributes->GetAsArray();
        $this->_nitAttributes = $this->Parent->nit->Attributes->GetAsArray();
        $this->_direccion_1Attributes = $this->Parent->direccion_1->Attributes->GetAsArray();
        $this->_telfijo_1Attributes = $this->Parent->telfijo_1->Attributes->GetAsArray();
        $this->_celular_1Attributes = $this->Parent->celular_1->Attributes->GetAsArray();
        $this->_Report_CurrentDateTimeAttributes = $this->Parent->Report_CurrentDateTime->Attributes->GetAsArray();
        $this->_NavigatorAttributes = $this->Parent->Navigator->Attributes->GetAsArray();
    }
    function SyncWithHeader(& $Header) {
        $Header->Report_TotalRecords = $this->Report_TotalRecords;
        $Header->_Report_TotalRecordsAttributes = $this->_Report_TotalRecordsAttributes;
        $this->id = $Header->id;
        $Header->_idAttributes = $this->_idAttributes;
        $this->Parent->id->Value = $Header->id;
        $this->Parent->id->Attributes->RestoreFromArray($Header->_idAttributes);
        $this->razon_social = $Header->razon_social;
        $Header->_razon_socialAttributes = $this->_razon_socialAttributes;
        $this->Parent->razon_social->Value = $Header->razon_social;
        $this->Parent->razon_social->Attributes->RestoreFromArray($Header->_razon_socialAttributes);
        $this->nombre = $Header->nombre;
        $Header->_nombreAttributes = $this->_nombreAttributes;
        $this->Parent->nombre->Value = $Header->nombre;
        $this->Parent->nombre->Attributes->RestoreFromArray($Header->_nombreAttributes);
        $this->nit = $Header->nit;
        $Header->_nitAttributes = $this->_nitAttributes;
        $this->Parent->nit->Value = $Header->nit;
        $this->Parent->nit->Attributes->RestoreFromArray($Header->_nitAttributes);
        $this->direccion_1 = $Header->direccion_1;
        $Header->_direccion_1Attributes = $this->_direccion_1Attributes;
        $this->Parent->direccion_1->Value = $Header->direccion_1;
        $this->Parent->direccion_1->Attributes->RestoreFromArray($Header->_direccion_1Attributes);
        $this->telfijo_1 = $Header->telfijo_1;
        $Header->_telfijo_1Attributes = $this->_telfijo_1Attributes;
        $this->Parent->telfijo_1->Value = $Header->telfijo_1;
        $this->Parent->telfijo_1->Attributes->RestoreFromArray($Header->_telfijo_1Attributes);
        $this->celular_1 = $Header->celular_1;
        $Header->_celular_1Attributes = $this->_celular_1Attributes;
        $this->Parent->celular_1->Value = $Header->celular_1;
        $this->Parent->celular_1->Attributes->RestoreFromArray($Header->_celular_1Attributes);
    }
    function ChangeTotalControls() {
        $this->Report_TotalRecords = $this->Parent->Report_TotalRecords->GetValue();
    }
}
//End proveedores ReportGroup class

//proveedores GroupsCollection class @8-56374B5A
class clsGroupsCollectionproveedores {
    public $Groups;
    public $mPageCurrentHeaderIndex;
    public $PageSize;
    public $TotalPages = 0;
    public $TotalRows = 0;
    public $CurrentPageSize = 0;
    public $Pages;
    public $Parent;
    public $LastDetailIndex;

    function clsGroupsCollectionproveedores(& $parent) {
        $this->Parent = & $parent;
        $this->Groups = array();
        $this->Pages  = array();
        $this->mReportTotalIndex = 0;
        $this->mPageTotalIndex = 1;
    }

    function & InitGroup() {
        $group = new clsReportGroupproveedores($this->Parent);
        $group->RowNumber = $this->TotalRows + 1;
        $group->PageNumber = $this->TotalPages;
        $group->PageTotalIndex = $this->mPageCurrentHeaderIndex;
        return $group;
    }

    function RestoreValues() {
        $this->Parent->Report_TotalRecords->Value = $this->Parent->Report_TotalRecords->initialValue;
        $this->Parent->id->Value = $this->Parent->id->initialValue;
        $this->Parent->razon_social->Value = $this->Parent->razon_social->initialValue;
        $this->Parent->nombre->Value = $this->Parent->nombre->initialValue;
        $this->Parent->nit->Value = $this->Parent->nit->initialValue;
        $this->Parent->direccion_1->Value = $this->Parent->direccion_1->initialValue;
        $this->Parent->telfijo_1->Value = $this->Parent->telfijo_1->initialValue;
        $this->Parent->celular_1->Value = $this->Parent->celular_1->initialValue;
    }

    function OpenPage() {
        $this->TotalPages++;
        $Group = & $this->InitGroup();
        $this->Parent->Page_Header->CCSEventResult = CCGetEvent($this->Parent->Page_Header->CCSEvents, "OnInitialize", $this->Parent->Page_Header);
        if ($this->Parent->Page_Header->Visible)
            $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Page_Header->Height;
        $Group->SetTotalControls("GetNextValue");
        $this->Parent->Page_Header->CCSEventResult = CCGetEvent($this->Parent->Page_Header->CCSEvents, "OnCalculate", $this->Parent->Page_Header);
        $Group->SetControls();
        $Group->Mode = 1;
        $Group->GroupType = "Page";
        $Group->PageTotalIndex = count($this->Groups);
        $this->mPageCurrentHeaderIndex = count($this->Groups);
        $this->Groups[] =  & $Group;
        $this->Pages[] =  count($this->Groups) == 2 ? 0 : count($this->Groups) - 1;
    }

    function OpenGroup($groupName) {
        $Group = "";
        $OpenFlag = false;
        if ($groupName == "Report") {
            $Group = & $this->InitGroup(true);
            $this->Parent->Report_Header->CCSEventResult = CCGetEvent($this->Parent->Report_Header->CCSEvents, "OnInitialize", $this->Parent->Report_Header);
            if ($this->Parent->Report_Header->Visible) 
                $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Report_Header->Height;
                $Group->SetTotalControls("GetNextValue");
            $this->Parent->Report_Header->CCSEventResult = CCGetEvent($this->Parent->Report_Header->CCSEvents, "OnCalculate", $this->Parent->Report_Header);
            $Group->SetControls();
            $Group->Mode = 1;
            $Group->GroupType = "Report";
            $this->Groups[] = & $Group;
            $this->OpenPage();
        }
    }

    function ClosePage() {
        $Group = & $this->InitGroup();
        $this->Parent->Page_Footer->CCSEventResult = CCGetEvent($this->Parent->Page_Footer->CCSEvents, "OnInitialize", $this->Parent->Page_Footer);
        $Group->SetTotalControls("GetPrevValue");
        $Group->SyncWithHeader($this->Groups[$this->mPageCurrentHeaderIndex]);
        $this->Parent->Page_Footer->CCSEventResult = CCGetEvent($this->Parent->Page_Footer->CCSEvents, "OnCalculate", $this->Parent->Page_Footer);
        $Group->SetControls();
        $this->RestoreValues();
        $this->CurrentPageSize = 0;
        $Group->Mode = 2;
        $Group->GroupType = "Page";
        $this->Groups[] = & $Group;
    }

    function CloseGroup($groupName)
    {
        $Group = "";
        if ($groupName == "Report") {
            $Group = & $this->InitGroup(true);
            $this->Parent->Report_Footer->CCSEventResult = CCGetEvent($this->Parent->Report_Footer->CCSEvents, "OnInitialize", $this->Parent->Report_Footer);
            if ($this->Parent->Page_Footer->Visible) 
                $OverSize = $this->Parent->Report_Footer->Height + $this->Parent->Page_Footer->Height;
            else
                $OverSize = $this->Parent->Report_Footer->Height;
            if (($this->PageSize > 0) and $this->Parent->Report_Footer->Visible and ($this->CurrentPageSize + $OverSize > $this->PageSize)) {
                $this->ClosePage();
                $this->OpenPage();
            }
            $Group->SetTotalControls("GetPrevValue");
            $Group->SyncWithHeader($this->Groups[0]);
            if ($this->Parent->Report_Footer->Visible)
                $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Report_Footer->Height;
            $this->Parent->Report_Footer->CCSEventResult = CCGetEvent($this->Parent->Report_Footer->CCSEvents, "OnCalculate", $this->Parent->Report_Footer);
            $Group->SetControls();
            $this->RestoreValues();
            $Group->Mode = 2;
            $Group->GroupType = "Report";
            $this->Groups[] = & $Group;
            $this->ClosePage();
            return;
        }
    }

    function AddItem()
    {
        $Group = & $this->InitGroup(true);
        $this->Parent->Detail->CCSEventResult = CCGetEvent($this->Parent->Detail->CCSEvents, "OnInitialize", $this->Parent->Detail);
        if ($this->Parent->Page_Footer->Visible) 
            $OverSize = $this->Parent->Detail->Height + $this->Parent->Page_Footer->Height;
        else
            $OverSize = $this->Parent->Detail->Height;
        if (($this->PageSize > 0) and $this->Parent->Detail->Visible and ($this->CurrentPageSize + $OverSize > $this->PageSize)) {
            $this->ClosePage();
            $this->OpenPage();
        }
        $this->TotalRows++;
        if ($this->LastDetailIndex)
            $PrevGroup = & $this->Groups[$this->LastDetailIndex];
        else
            $PrevGroup = "";
        $Group->SetTotalControls("", $PrevGroup);
        if ($this->Parent->Detail->Visible)
            $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Detail->Height;
        $this->Parent->Detail->CCSEventResult = CCGetEvent($this->Parent->Detail->CCSEvents, "OnCalculate", $this->Parent->Detail);
        $Group->SetControls($PrevGroup);
        $this->LastDetailIndex = count($this->Groups);
        $this->Groups[] = & $Group;
    }
}
//End proveedores GroupsCollection class

class clsReportproveedores { //proveedores Class @8-0444B136

//proveedores Variables @8-017AFFCE

    public $ComponentType = "Report";
    public $PageSize;
    public $ComponentName;
    public $Visible;
    public $Errors;
    public $CCSEvents = array();
    public $CCSEventResult;
    public $RelativePath = "";
    public $ViewMode = "Web";
    public $TemplateBlock;
    public $PageNumber;
    public $RowNumber;
    public $TotalRows;
    public $TotalPages;
    public $ControlsVisible = array();
    public $IsEmpty;
    public $Attributes;
    public $DetailBlock, $Detail;
    public $Report_FooterBlock, $Report_Footer;
    public $Report_HeaderBlock, $Report_Header;
    public $Page_FooterBlock, $Page_Footer;
    public $Page_HeaderBlock, $Page_Header;
    public $SorterName, $SorterDirection;

    public $ds;
    public $DataSource;
    public $UseClientPaging = true;

    //Report Controls
    public $StaticControls, $RowControls, $Report_FooterControls, $Report_HeaderControls;
    public $Page_FooterControls, $Page_HeaderControls;
    public $Sorter_id;
    public $Sorter_razon_social;
    public $Sorter_nombre;
    public $Sorter_nit;
    public $Sorter_direccion_1;
    public $Sorter_telfijo_1;
    public $Sorter_celular_1;
//End proveedores Variables

//Class_Initialize Event @8-64F53698
    function clsReportproveedores($RelativePath = "", & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "proveedores";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->Detail = new clsSection($this);
        $MinPageSize = 0;
        $MaxSectionSize = 0;
        $this->Detail->Height = 1;
        $MaxSectionSize = max($MaxSectionSize, $this->Detail->Height);
        $this->Report_Footer = new clsSection($this);
        $this->Report_Header = new clsSection($this);
        $this->Page_Footer = new clsSection($this);
        $this->Page_Footer->Height = 1;
        $MinPageSize += $this->Page_Footer->Height;
        $this->Page_Header = new clsSection($this);
        $this->Page_Header->Height = 1;
        $MinPageSize += $this->Page_Header->Height;
        $this->Errors = new clsErrors();
        $this->DataSource = new clsproveedoresDataSource($this);
        $this->ds = & $this->DataSource;
        $this->ViewMode = CCGetParam("ViewMode", "Web");
        $PageSize = CCGetParam($this->ComponentName . "PageSize", "");
        if(is_numeric($PageSize) && $PageSize > 0) {
            $this->PageSize = $PageSize;
        } else if($this->ViewMode == "Print") {
            if (!is_numeric($PageSize) || $PageSize < 0)
                $this->PageSize = 0;
             else if ($PageSize == "0")
                $this->PageSize = 0;
             else 
                $this->PageSize = $PageSize;
        } else {
            if (!is_numeric($PageSize) || $PageSize < 0)
                $this->PageSize = 20;
             else if ($PageSize == "0")
                $this->PageSize = 100;
             else 
                $this->PageSize = min(100, $PageSize);
        }
        $MinPageSize += $MaxSectionSize;
        if ($this->PageSize && $MinPageSize && $this->PageSize < $MinPageSize)
            $this->PageSize = $MinPageSize;
        $this->PageNumber = $this->ViewMode == "Print" ? 1 : intval(CCGetParam($this->ComponentName . "Page", 1));
        if ($this->PageNumber <= 0 ) {
            $this->PageNumber = 1;
        }
        $this->SorterName = CCGetParam("proveedoresOrder", "");
        $this->SorterDirection = CCGetParam("proveedoresDir", "");

        $this->Report_TotalRecords = new clsControl(ccsReportLabel, "Report_TotalRecords", "Report_TotalRecords", ccsText, "", 0, $this);
        $this->Report_TotalRecords->TotalFunction = "Count";
        $this->Report_TotalRecords->IsEmptySource = true;
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Sorter_razon_social = new clsSorter($this->ComponentName, "Sorter_razon_social", $FileName, $this);
        $this->Sorter_nombre = new clsSorter($this->ComponentName, "Sorter_nombre", $FileName, $this);
        $this->Sorter_nit = new clsSorter($this->ComponentName, "Sorter_nit", $FileName, $this);
        $this->Sorter_direccion_1 = new clsSorter($this->ComponentName, "Sorter_direccion_1", $FileName, $this);
        $this->Sorter_telfijo_1 = new clsSorter($this->ComponentName, "Sorter_telfijo_1", $FileName, $this);
        $this->Sorter_celular_1 = new clsSorter($this->ComponentName, "Sorter_celular_1", $FileName, $this);
        $this->id = new clsControl(ccsReportLabel, "id", "id", ccsInteger, "", "", $this);
        $this->razon_social = new clsControl(ccsReportLabel, "razon_social", "razon_social", ccsText, "", "", $this);
        $this->nombre = new clsControl(ccsReportLabel, "nombre", "nombre", ccsText, "", "", $this);
        $this->nit = new clsControl(ccsReportLabel, "nit", "nit", ccsText, "", "", $this);
        $this->direccion_1 = new clsControl(ccsReportLabel, "direccion_1", "direccion_1", ccsText, "", "", $this);
        $this->telfijo_1 = new clsControl(ccsReportLabel, "telfijo_1", "telfijo_1", ccsText, "", "", $this);
        $this->celular_1 = new clsControl(ccsReportLabel, "celular_1", "celular_1", ccsText, "", "", $this);
        $this->Separator = new clsPanel("Separator", $this);
        $this->NoRecords = new clsPanel("NoRecords", $this);
        $this->Report_CurrentDateTime = new clsControl(ccsReportLabel, "Report_CurrentDateTime", "Report_CurrentDateTime", ccsText, array('ShortDate', ' ', 'ShortTime'), "", $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

//Initialize Method @8-6C59EE65
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = $this->PageSize;
        $this->DataSource->AbsolutePage = $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//CheckErrors Method @8-EF578002
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->Report_TotalRecords->Errors->Count());
        $errors = ($errors || $this->id->Errors->Count());
        $errors = ($errors || $this->razon_social->Errors->Count());
        $errors = ($errors || $this->nombre->Errors->Count());
        $errors = ($errors || $this->nit->Errors->Count());
        $errors = ($errors || $this->direccion_1->Errors->Count());
        $errors = ($errors || $this->telfijo_1->Errors->Count());
        $errors = ($errors || $this->celular_1->Errors->Count());
        $errors = ($errors || $this->Report_CurrentDateTime->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//GetErrors Method @8-B1309301
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Report_TotalRecords->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->razon_social->Errors->ToString());
        $errors = ComposeStrings($errors, $this->nombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->nit->Errors->ToString());
        $errors = ComposeStrings($errors, $this->direccion_1->Errors->ToString());
        $errors = ComposeStrings($errors, $this->telfijo_1->Errors->ToString());
        $errors = ComposeStrings($errors, $this->celular_1->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_CurrentDateTime->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

//Show Method @8-1FFB0C82
    function Show()
    {
        $Tpl = & CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $ShownRecords = 0;


        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->Prepare();
        $this->DataSource->Open();

        $Groups = new clsGroupsCollectionproveedores($this);
        $Groups->PageSize = $this->PageSize > 0 ? $this->PageSize : 0;

        $is_next_record = $this->DataSource->next_record();
        $this->IsEmpty = ! $is_next_record;
        while($is_next_record) {
            $this->DataSource->SetValues();
            $this->id->SetValue($this->DataSource->id->GetValue());
            $this->razon_social->SetValue($this->DataSource->razon_social->GetValue());
            $this->nombre->SetValue($this->DataSource->nombre->GetValue());
            $this->nit->SetValue($this->DataSource->nit->GetValue());
            $this->direccion_1->SetValue($this->DataSource->direccion_1->GetValue());
            $this->telfijo_1->SetValue($this->DataSource->telfijo_1->GetValue());
            $this->celular_1->SetValue($this->DataSource->celular_1->GetValue());
            $this->Report_TotalRecords->SetValue(1);
            if (count($Groups->Groups) == 0) $Groups->OpenGroup("Report");
            $Groups->AddItem();
            $is_next_record = $this->DataSource->next_record();
        }
        if (!count($Groups->Groups)) 
            $Groups->OpenGroup("Report");
        else
            $this->NoRecords->Visible = false;
        $Groups->CloseGroup("Report");
        $this->TotalPages = $Groups->TotalPages;
        $this->TotalRows = $Groups->TotalRows;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        if(!$this->Visible) return;

        $this->Attributes->Show();
        $ReportBlock = "Report " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $ReportBlock;

        if($this->CheckErrors()) {
            $Tpl->replaceblock("", $this->GetErrors());
            $Tpl->block_path = $ParentPath;
            return;
        } else {
            $items = & $Groups->Groups;
            $i = $Groups->Pages[min($this->PageNumber, $Groups->TotalPages) - 1];
            $this->ControlsVisible["id"] = $this->id->Visible;
            $this->ControlsVisible["razon_social"] = $this->razon_social->Visible;
            $this->ControlsVisible["nombre"] = $this->nombre->Visible;
            $this->ControlsVisible["nit"] = $this->nit->Visible;
            $this->ControlsVisible["direccion_1"] = $this->direccion_1->Visible;
            $this->ControlsVisible["telfijo_1"] = $this->telfijo_1->Visible;
            $this->ControlsVisible["celular_1"] = $this->celular_1->Visible;
            $this->ControlsVisible["Separator"] = $this->Separator->Visible;
            do {
                $this->Attributes->RestoreFromArray($items[$i]->Attributes);
                $this->RowNumber = $items[$i]->RowNumber;
                switch ($items[$i]->GroupType) {
                    Case "":
                        $this->Separator->Visible = "" == $items[$i+1]->GroupType;
                        $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Detail";
                        $this->id->SetValue($items[$i]->id);
                        $this->id->Attributes->RestoreFromArray($items[$i]->_idAttributes);
                        $this->razon_social->SetValue($items[$i]->razon_social);
                        $this->razon_social->Attributes->RestoreFromArray($items[$i]->_razon_socialAttributes);
                        $this->nombre->SetValue($items[$i]->nombre);
                        $this->nombre->Attributes->RestoreFromArray($items[$i]->_nombreAttributes);
                        $this->nit->SetValue($items[$i]->nit);
                        $this->nit->Attributes->RestoreFromArray($items[$i]->_nitAttributes);
                        $this->direccion_1->SetValue($items[$i]->direccion_1);
                        $this->direccion_1->Attributes->RestoreFromArray($items[$i]->_direccion_1Attributes);
                        $this->telfijo_1->SetValue($items[$i]->telfijo_1);
                        $this->telfijo_1->Attributes->RestoreFromArray($items[$i]->_telfijo_1Attributes);
                        $this->celular_1->SetValue($items[$i]->celular_1);
                        $this->celular_1->Attributes->RestoreFromArray($items[$i]->_celular_1Attributes);
                        $this->Detail->CCSEventResult = CCGetEvent($this->Detail->CCSEvents, "BeforeShow", $this->Detail);
                        $this->Attributes->Show();
                        $this->id->Show();
                        $this->razon_social->Show();
                        $this->nombre->Show();
                        $this->nit->Show();
                        $this->direccion_1->Show();
                        $this->telfijo_1->Show();
                        $this->celular_1->Show();
                        $this->Separator->Show();
                        $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                        if ($this->Detail->Visible)
                            $Tpl->parseto("Section Detail", true, "Section Detail");
                        break;
                    case "Report":
                        if ($items[$i]->Mode == 1) {
                            $this->Report_TotalRecords->SetValue($items[$i]->Report_TotalRecords);
                            $this->Report_TotalRecords->Attributes->RestoreFromArray($items[$i]->_Report_TotalRecordsAttributes);
                            $this->Report_Header->CCSEventResult = CCGetEvent($this->Report_Header->CCSEvents, "BeforeShow", $this->Report_Header);
                            if ($this->Report_Header->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Report_Header";
                                $this->Attributes->Show();
                                $this->Report_TotalRecords->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Report_Header", true, "Section Detail");
                            }
                        }
                        if ($items[$i]->Mode == 2) {
                            $this->Report_Footer->CCSEventResult = CCGetEvent($this->Report_Footer->CCSEvents, "BeforeShow", $this->Report_Footer);
                            if ($this->Report_Footer->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Report_Footer";
                                $this->NoRecords->Show();
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Report_Footer", true, "Section Detail");
                            }
                        }
                        break;
                    case "Page":
                        if ($items[$i]->Mode == 1) {
                            $this->Page_Header->CCSEventResult = CCGetEvent($this->Page_Header->CCSEvents, "BeforeShow", $this->Page_Header);
                            if ($this->Page_Header->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Page_Header";
                                $this->Attributes->Show();
                                $this->Sorter_id->Show();
                                $this->Sorter_razon_social->Show();
                                $this->Sorter_nombre->Show();
                                $this->Sorter_nit->Show();
                                $this->Sorter_direccion_1->Show();
                                $this->Sorter_telfijo_1->Show();
                                $this->Sorter_celular_1->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Page_Header", true, "Section Detail");
                            }
                        }
                        if ($items[$i]->Mode == 2 && !$this->UseClientPaging || $items[$i]->Mode == 1 && $this->UseClientPaging) {
                            $this->Report_CurrentDateTime->SetValue(CCFormatDate(CCGetDateArray(), $this->Report_CurrentDateTime->Format));
                            $this->Report_CurrentDateTime->Attributes->RestoreFromArray($items[$i]->_Report_CurrentDateTimeAttributes);
                            $this->Navigator->PageNumber = $items[$i]->PageNumber;
                            $this->Navigator->TotalPages = $Groups->TotalPages;
                            $this->Navigator->Visible = ("Print" != $this->ViewMode) && ($this->Navigator->TotalPages > 1);
                            $this->Page_Footer->CCSEventResult = CCGetEvent($this->Page_Footer->CCSEvents, "BeforeShow", $this->Page_Footer);
                            if ($this->Page_Footer->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Page_Footer";
                                $this->Report_CurrentDateTime->Show();
                                $this->Navigator->Show();
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Page_Footer", true, "Section Detail");
                            }
                        }
                        break;
                }
                $i++;
            } while ($i < count($items) && ($this->ViewMode == "Print" ||  !($i > 1 && $items[$i]->GroupType == 'Page' && $items[$i]->Mode == 1)));
            $Tpl->block_path = $ParentPath;
            $Tpl->parse($ReportBlock);
            $this->DataSource->close();
        }

    }
//End Show Method

} //End proveedores Class @8-FCB6E20C

class clsproveedoresDataSource extends clsDBConnection1 {  //proveedoresDataSource Class @8-BE3F4A6C

//DataSource Variables @8-62D1478C
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $wp;


    // Datasource fields
    public $id;
    public $razon_social;
    public $nombre;
    public $nit;
    public $direccion_1;
    public $telfijo_1;
    public $celular_1;
//End DataSource Variables

//DataSourceClass_Initialize Event @8-2FE2F280
    function clsproveedoresDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Report proveedores";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->razon_social = new clsField("razon_social", ccsText, "");
        
        $this->nombre = new clsField("nombre", ccsText, "");
        
        $this->nit = new clsField("nit", ccsText, "");
        
        $this->direccion_1 = new clsField("direccion_1", ccsText, "");
        
        $this->telfijo_1 = new clsField("telfijo_1", ccsText, "");
        
        $this->celular_1 = new clsField("celular_1", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @8-CC6E72C4
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_razon_social" => array("razon_social", ""), 
            "Sorter_nombre" => array("nombre", ""), 
            "Sorter_nit" => array("nit", ""), 
            "Sorter_direccion_1" => array("direccion_1", ""), 
            "Sorter_telfijo_1" => array("telfijo_1", ""), 
            "Sorter_celular_1" => array("celular_1", "")));
    }
//End SetOrder Method

//Prepare Method @8-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @8-D95FA80E
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

//SetValues Method @8-EA131437
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->razon_social->SetDBValue($this->f("razon_social"));
        $this->nombre->SetDBValue($this->f("nombre"));
        $this->nit->SetDBValue($this->f("nit"));
        $this->direccion_1->SetDBValue($this->f("direccion_1"));
        $this->telfijo_1->SetDBValue($this->f("telfijo_1"));
        $this->celular_1->SetDBValue($this->f("celular_1"));
    }
//End SetValues Method

} //End proveedoresDataSource Class @8-FCB6E20C

class clsRecordproveedoresSearch { //proveedoresSearch Class @34-3F993C90

//Variables @34-9E315808

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

//Class_Initialize Event @34-DF9870C3
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
            $this->ClearParameters->Page = "rpt_provee.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->proveedoresOrder = new clsControl(ccsListBox, "proveedoresOrder", "proveedoresOrder", ccsText, "", CCGetRequestParam("proveedoresOrder", $Method, NULL), $this);
            $this->proveedoresOrder->DSType = dsListOfValues;
            $this->proveedoresOrder->Values = array(array("", $CCSLocales->GetText("CCS_SelectField")), array("Sorter_id", $CCSLocales->GetText("id")), array("Sorter_razon_social", $CCSLocales->GetText("razon_social")), array("Sorter_nombre", $CCSLocales->GetText("nombre")), array("Sorter_nit", $CCSLocales->GetText("nit")), array("Sorter_direccion_1", $CCSLocales->GetText("direccion_1")), array("Sorter_telfijo_1", $CCSLocales->GetText("telfijo_1")), array("Sorter_celular_1", $CCSLocales->GetText("celular_1")));
            $this->proveedoresDir = new clsControl(ccsListBox, "proveedoresDir", "proveedoresDir", ccsText, "", CCGetRequestParam("proveedoresDir", $Method, NULL), $this);
            $this->proveedoresDir->DSType = dsListOfValues;
            $this->proveedoresDir->Values = array(array("", $CCSLocales->GetText("CCS_SelectOrder")), array("ASC", $CCSLocales->GetText("CCS_ASC")), array("DESC", $CCSLocales->GetText("CCS_DESC")));
            $this->proveedoresPageSize = new clsControl(ccsListBox, "proveedoresPageSize", "proveedoresPageSize", ccsText, "", CCGetRequestParam("proveedoresPageSize", $Method, NULL), $this);
            $this->proveedoresPageSize->DSType = dsListOfValues;
            $this->proveedoresPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @34-C01700C6
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

//CheckErrors Method @34-F436FEBC
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

//Operation Method @34-E5F12779
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
        $Redirect = "rpt_provee.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "rpt_provee.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @34-13E07DC8
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

} //End proveedoresSearch Class @34-FCB6E20C

//Initialize Page @1-708BB94F
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
$TemplateFileName = "rpt_provee.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-186F19D0
include_once("./rpt_provee_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-95787FFD
$DBConnection1 = new clsDBConnection1();
$MainPage->Connections["Connection1"] = & $DBConnection1;
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
$MasterPage = new clsMasterPage("/Designs/medibio_reports/medibio_reports/", "MasterPage", $MainPage);
$MasterPage->Attributes = $Attributes;
$MasterPage->Initialize();
$Head = new clsPanel("Head", $MainPage);
$Head->PlaceholderName = "Head";
$Content = new clsPanel("Content", $MainPage);
$Content->PlaceholderName = "Content";
$Report_Print = new clsControl(ccsLink, "Report_Print", "Report_Print", ccsText, "", CCGetRequestParam("Report_Print", ccsGet, NULL), $MainPage);
$Report_Print->Page = "rpt_provee.php";
$proveedores = new clsReportproveedores("", $MainPage);
$proveedoresSearch = new clsRecordproveedoresSearch("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "provee_mant.php";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->Report_Print = & $Report_Print;
$MainPage->proveedores = & $proveedores;
$MainPage->proveedoresSearch = & $proveedoresSearch;
$MainPage->Menu = & $Menu;
$MainPage->Link1 = & $Link1;
$Content->AddComponent("proveedores", $proveedores);
$Content->AddComponent("proveedoresSearch", $proveedoresSearch);
$Content->AddComponent("Report_Print", $Report_Print);
$Menu->AddComponent("Link1", $Link1);
$Report_Print->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Report_Print->Parameters = CCAddParam($Report_Print->Parameters, "ViewMode", "Print");
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

//Show Page @1-9289D706
$Head->Show();
$Content->Show();
$Menu->Show();
$MasterPage->Tpl->SetVar("Head", $Tpl->GetVar("Panel Head"));
$MasterPage->Tpl->SetVar("Content", $Tpl->GetVar("Panel Content"));
$MasterPage->Tpl->SetVar("Menu", $Tpl->GetVar("Panel Menu"));
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
