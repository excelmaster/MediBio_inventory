<?php
//Include Common Files @1-3ABE9201
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "rpt_clientes.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-E714A8AA
include_once(RelativePath . "/Designs/medibio_reports/medibio_reports/MasterPage.php");
//End Master Page implementation

//clientes ReportGroup class @8-0FF3315E
class clsReportGroupclientes {
    public $GroupType;
    public $mode; //1 - open, 2 - close
    public $Report_TotalRecords, $_Report_TotalRecordsAttributes;
    public $id, $_idAttributes;
    public $priapellido, $_priapellidoAttributes;
    public $segapellido, $_segapellidoAttributes;
    public $prinombre, $_prinombreAttributes;
    public $demasnombres, $_demasnombresAttributes;
    public $tipo_documento, $_tipo_documentoAttributes;
    public $num_documento, $_num_documentoAttributes;
    public $Report_CurrentDateTime, $_Report_CurrentDateTimeAttributes;
    public $Attributes;
    public $ReportTotalIndex = 0;
    public $PageTotalIndex;
    public $PageNumber;
    public $RowNumber;
    public $Parent;

    function clsReportGroupclientes(& $parent) {
        $this->Parent = & $parent;
        $this->Attributes = $this->Parent->Attributes->GetAsArray();
    }
    function SetControls($PrevGroup = "") {
        $this->id = $this->Parent->id->Value;
        $this->priapellido = $this->Parent->priapellido->Value;
        $this->segapellido = $this->Parent->segapellido->Value;
        $this->prinombre = $this->Parent->prinombre->Value;
        $this->demasnombres = $this->Parent->demasnombres->Value;
        $this->tipo_documento = $this->Parent->tipo_documento->Value;
        $this->num_documento = $this->Parent->num_documento->Value;
    }

    function SetTotalControls($mode = "", $PrevGroup = "") {
        $this->Report_TotalRecords = $this->Parent->Report_TotalRecords->GetTotalValue($mode);
        $this->_Report_TotalRecordsAttributes = $this->Parent->Report_TotalRecords->Attributes->GetAsArray();
        $this->_Sorter_idAttributes = $this->Parent->Sorter_id->Attributes->GetAsArray();
        $this->_Sorter_priapellidoAttributes = $this->Parent->Sorter_priapellido->Attributes->GetAsArray();
        $this->_Sorter_segapellidoAttributes = $this->Parent->Sorter_segapellido->Attributes->GetAsArray();
        $this->_Sorter_prinombreAttributes = $this->Parent->Sorter_prinombre->Attributes->GetAsArray();
        $this->_Sorter_demasnombresAttributes = $this->Parent->Sorter_demasnombres->Attributes->GetAsArray();
        $this->_Sorter_tipo_documentoAttributes = $this->Parent->Sorter_tipo_documento->Attributes->GetAsArray();
        $this->_Sorter_num_documentoAttributes = $this->Parent->Sorter_num_documento->Attributes->GetAsArray();
        $this->_idAttributes = $this->Parent->id->Attributes->GetAsArray();
        $this->_priapellidoAttributes = $this->Parent->priapellido->Attributes->GetAsArray();
        $this->_segapellidoAttributes = $this->Parent->segapellido->Attributes->GetAsArray();
        $this->_prinombreAttributes = $this->Parent->prinombre->Attributes->GetAsArray();
        $this->_demasnombresAttributes = $this->Parent->demasnombres->Attributes->GetAsArray();
        $this->_tipo_documentoAttributes = $this->Parent->tipo_documento->Attributes->GetAsArray();
        $this->_num_documentoAttributes = $this->Parent->num_documento->Attributes->GetAsArray();
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
        $this->priapellido = $Header->priapellido;
        $Header->_priapellidoAttributes = $this->_priapellidoAttributes;
        $this->Parent->priapellido->Value = $Header->priapellido;
        $this->Parent->priapellido->Attributes->RestoreFromArray($Header->_priapellidoAttributes);
        $this->segapellido = $Header->segapellido;
        $Header->_segapellidoAttributes = $this->_segapellidoAttributes;
        $this->Parent->segapellido->Value = $Header->segapellido;
        $this->Parent->segapellido->Attributes->RestoreFromArray($Header->_segapellidoAttributes);
        $this->prinombre = $Header->prinombre;
        $Header->_prinombreAttributes = $this->_prinombreAttributes;
        $this->Parent->prinombre->Value = $Header->prinombre;
        $this->Parent->prinombre->Attributes->RestoreFromArray($Header->_prinombreAttributes);
        $this->demasnombres = $Header->demasnombres;
        $Header->_demasnombresAttributes = $this->_demasnombresAttributes;
        $this->Parent->demasnombres->Value = $Header->demasnombres;
        $this->Parent->demasnombres->Attributes->RestoreFromArray($Header->_demasnombresAttributes);
        $this->tipo_documento = $Header->tipo_documento;
        $Header->_tipo_documentoAttributes = $this->_tipo_documentoAttributes;
        $this->Parent->tipo_documento->Value = $Header->tipo_documento;
        $this->Parent->tipo_documento->Attributes->RestoreFromArray($Header->_tipo_documentoAttributes);
        $this->num_documento = $Header->num_documento;
        $Header->_num_documentoAttributes = $this->_num_documentoAttributes;
        $this->Parent->num_documento->Value = $Header->num_documento;
        $this->Parent->num_documento->Attributes->RestoreFromArray($Header->_num_documentoAttributes);
    }
    function ChangeTotalControls() {
        $this->Report_TotalRecords = $this->Parent->Report_TotalRecords->GetValue();
    }
}
//End clientes ReportGroup class

//clientes GroupsCollection class @8-964BBBE1
class clsGroupsCollectionclientes {
    public $Groups;
    public $mPageCurrentHeaderIndex;
    public $PageSize;
    public $TotalPages = 0;
    public $TotalRows = 0;
    public $CurrentPageSize = 0;
    public $Pages;
    public $Parent;
    public $LastDetailIndex;

    function clsGroupsCollectionclientes(& $parent) {
        $this->Parent = & $parent;
        $this->Groups = array();
        $this->Pages  = array();
        $this->mReportTotalIndex = 0;
        $this->mPageTotalIndex = 1;
    }

    function & InitGroup() {
        $group = new clsReportGroupclientes($this->Parent);
        $group->RowNumber = $this->TotalRows + 1;
        $group->PageNumber = $this->TotalPages;
        $group->PageTotalIndex = $this->mPageCurrentHeaderIndex;
        return $group;
    }

    function RestoreValues() {
        $this->Parent->Report_TotalRecords->Value = $this->Parent->Report_TotalRecords->initialValue;
        $this->Parent->id->Value = $this->Parent->id->initialValue;
        $this->Parent->priapellido->Value = $this->Parent->priapellido->initialValue;
        $this->Parent->segapellido->Value = $this->Parent->segapellido->initialValue;
        $this->Parent->prinombre->Value = $this->Parent->prinombre->initialValue;
        $this->Parent->demasnombres->Value = $this->Parent->demasnombres->initialValue;
        $this->Parent->tipo_documento->Value = $this->Parent->tipo_documento->initialValue;
        $this->Parent->num_documento->Value = $this->Parent->num_documento->initialValue;
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
//End clientes GroupsCollection class

class clsReportclientes { //clientes Class @8-82C3E4A4

//clientes Variables @8-FE83E479

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
    public $Sorter_priapellido;
    public $Sorter_segapellido;
    public $Sorter_prinombre;
    public $Sorter_demasnombres;
    public $Sorter_tipo_documento;
    public $Sorter_num_documento;
//End clientes Variables

//Class_Initialize Event @8-3F118F54
    function clsReportclientes($RelativePath = "", & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "clientes";
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
        $this->DataSource = new clsclientesDataSource($this);
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
        $this->SorterName = CCGetParam("clientesOrder", "");
        $this->SorterDirection = CCGetParam("clientesDir", "");

        $this->Report_TotalRecords = new clsControl(ccsReportLabel, "Report_TotalRecords", "Report_TotalRecords", ccsText, "", 0, $this);
        $this->Report_TotalRecords->TotalFunction = "Count";
        $this->Report_TotalRecords->IsEmptySource = true;
        $this->Sorter_id = new clsSorter($this->ComponentName, "Sorter_id", $FileName, $this);
        $this->Sorter_priapellido = new clsSorter($this->ComponentName, "Sorter_priapellido", $FileName, $this);
        $this->Sorter_segapellido = new clsSorter($this->ComponentName, "Sorter_segapellido", $FileName, $this);
        $this->Sorter_prinombre = new clsSorter($this->ComponentName, "Sorter_prinombre", $FileName, $this);
        $this->Sorter_demasnombres = new clsSorter($this->ComponentName, "Sorter_demasnombres", $FileName, $this);
        $this->Sorter_tipo_documento = new clsSorter($this->ComponentName, "Sorter_tipo_documento", $FileName, $this);
        $this->Sorter_num_documento = new clsSorter($this->ComponentName, "Sorter_num_documento", $FileName, $this);
        $this->id = new clsControl(ccsReportLabel, "id", "id", ccsInteger, "", "", $this);
        $this->priapellido = new clsControl(ccsReportLabel, "priapellido", "priapellido", ccsText, "", "", $this);
        $this->segapellido = new clsControl(ccsReportLabel, "segapellido", "segapellido", ccsText, "", "", $this);
        $this->prinombre = new clsControl(ccsReportLabel, "prinombre", "prinombre", ccsText, "", "", $this);
        $this->demasnombres = new clsControl(ccsReportLabel, "demasnombres", "demasnombres", ccsText, "", "", $this);
        $this->tipo_documento = new clsControl(ccsReportLabel, "tipo_documento", "tipo_documento", ccsInteger, "", "", $this);
        $this->num_documento = new clsControl(ccsReportLabel, "num_documento", "num_documento", ccsText, "", "", $this);
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

//CheckErrors Method @8-C096BF5D
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->Report_TotalRecords->Errors->Count());
        $errors = ($errors || $this->id->Errors->Count());
        $errors = ($errors || $this->priapellido->Errors->Count());
        $errors = ($errors || $this->segapellido->Errors->Count());
        $errors = ($errors || $this->prinombre->Errors->Count());
        $errors = ($errors || $this->demasnombres->Errors->Count());
        $errors = ($errors || $this->tipo_documento->Errors->Count());
        $errors = ($errors || $this->num_documento->Errors->Count());
        $errors = ($errors || $this->Report_CurrentDateTime->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//GetErrors Method @8-47226BF5
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Report_TotalRecords->Errors->ToString());
        $errors = ComposeStrings($errors, $this->id->Errors->ToString());
        $errors = ComposeStrings($errors, $this->priapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->segapellido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->prinombre->Errors->ToString());
        $errors = ComposeStrings($errors, $this->demasnombres->Errors->ToString());
        $errors = ComposeStrings($errors, $this->tipo_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->num_documento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_CurrentDateTime->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

//Show Method @8-99EEE565
    function Show()
    {
        $Tpl = & CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $ShownRecords = 0;


        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->Prepare();
        $this->DataSource->Open();

        $Groups = new clsGroupsCollectionclientes($this);
        $Groups->PageSize = $this->PageSize > 0 ? $this->PageSize : 0;

        $is_next_record = $this->DataSource->next_record();
        $this->IsEmpty = ! $is_next_record;
        while($is_next_record) {
            $this->DataSource->SetValues();
            $this->id->SetValue($this->DataSource->id->GetValue());
            $this->priapellido->SetValue($this->DataSource->priapellido->GetValue());
            $this->segapellido->SetValue($this->DataSource->segapellido->GetValue());
            $this->prinombre->SetValue($this->DataSource->prinombre->GetValue());
            $this->demasnombres->SetValue($this->DataSource->demasnombres->GetValue());
            $this->tipo_documento->SetValue($this->DataSource->tipo_documento->GetValue());
            $this->num_documento->SetValue($this->DataSource->num_documento->GetValue());
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
            $this->ControlsVisible["priapellido"] = $this->priapellido->Visible;
            $this->ControlsVisible["segapellido"] = $this->segapellido->Visible;
            $this->ControlsVisible["prinombre"] = $this->prinombre->Visible;
            $this->ControlsVisible["demasnombres"] = $this->demasnombres->Visible;
            $this->ControlsVisible["tipo_documento"] = $this->tipo_documento->Visible;
            $this->ControlsVisible["num_documento"] = $this->num_documento->Visible;
            do {
                $this->Attributes->RestoreFromArray($items[$i]->Attributes);
                $this->RowNumber = $items[$i]->RowNumber;
                switch ($items[$i]->GroupType) {
                    Case "":
                        $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Detail";
                        $this->id->SetValue($items[$i]->id);
                        $this->id->Attributes->RestoreFromArray($items[$i]->_idAttributes);
                        $this->priapellido->SetValue($items[$i]->priapellido);
                        $this->priapellido->Attributes->RestoreFromArray($items[$i]->_priapellidoAttributes);
                        $this->segapellido->SetValue($items[$i]->segapellido);
                        $this->segapellido->Attributes->RestoreFromArray($items[$i]->_segapellidoAttributes);
                        $this->prinombre->SetValue($items[$i]->prinombre);
                        $this->prinombre->Attributes->RestoreFromArray($items[$i]->_prinombreAttributes);
                        $this->demasnombres->SetValue($items[$i]->demasnombres);
                        $this->demasnombres->Attributes->RestoreFromArray($items[$i]->_demasnombresAttributes);
                        $this->tipo_documento->SetValue($items[$i]->tipo_documento);
                        $this->tipo_documento->Attributes->RestoreFromArray($items[$i]->_tipo_documentoAttributes);
                        $this->num_documento->SetValue($items[$i]->num_documento);
                        $this->num_documento->Attributes->RestoreFromArray($items[$i]->_num_documentoAttributes);
                        $this->Detail->CCSEventResult = CCGetEvent($this->Detail->CCSEvents, "BeforeShow", $this->Detail);
                        $this->Attributes->Show();
                        $this->id->Show();
                        $this->priapellido->Show();
                        $this->segapellido->Show();
                        $this->prinombre->Show();
                        $this->demasnombres->Show();
                        $this->tipo_documento->Show();
                        $this->num_documento->Show();
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
                                $this->Sorter_priapellido->Show();
                                $this->Sorter_segapellido->Show();
                                $this->Sorter_prinombre->Show();
                                $this->Sorter_demasnombres->Show();
                                $this->Sorter_tipo_documento->Show();
                                $this->Sorter_num_documento->Show();
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

} //End clientes Class @8-FCB6E20C

class clsclientesDataSource extends clsDBConnection1 {  //clientesDataSource Class @8-E85581CD

//DataSource Variables @8-FCBE7534
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $wp;


    // Datasource fields
    public $id;
    public $priapellido;
    public $segapellido;
    public $prinombre;
    public $demasnombres;
    public $tipo_documento;
    public $num_documento;
//End DataSource Variables

//DataSourceClass_Initialize Event @8-E5A7C290
    function clsclientesDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Report clientes";
        $this->Initialize();
        $this->id = new clsField("id", ccsInteger, "");
        
        $this->priapellido = new clsField("priapellido", ccsText, "");
        
        $this->segapellido = new clsField("segapellido", ccsText, "");
        
        $this->prinombre = new clsField("prinombre", ccsText, "");
        
        $this->demasnombres = new clsField("demasnombres", ccsText, "");
        
        $this->tipo_documento = new clsField("tipo_documento", ccsInteger, "");
        
        $this->num_documento = new clsField("num_documento", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @8-3007BF30
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "priapellido";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_id" => array("id", ""), 
            "Sorter_priapellido" => array("priapellido", ""), 
            "Sorter_segapellido" => array("segapellido", ""), 
            "Sorter_prinombre" => array("prinombre", ""), 
            "Sorter_demasnombres" => array("demasnombres", ""), 
            "Sorter_tipo_documento" => array("tipo_documento", ""), 
            "Sorter_num_documento" => array("num_documento", "")));
    }
//End SetOrder Method

//Prepare Method @8-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

//Open Method @8-07B99F3C
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

//SetValues Method @8-7B2FB34D
    function SetValues()
    {
        $this->id->SetDBValue(trim($this->f("id")));
        $this->priapellido->SetDBValue($this->f("priapellido"));
        $this->segapellido->SetDBValue($this->f("segapellido"));
        $this->prinombre->SetDBValue($this->f("prinombre"));
        $this->demasnombres->SetDBValue($this->f("demasnombres"));
        $this->tipo_documento->SetDBValue(trim($this->f("tipo_documento")));
        $this->num_documento->SetDBValue($this->f("num_documento"));
    }
//End SetValues Method

} //End clientesDataSource Class @8-FCB6E20C

class clsRecordclientesSearch { //clientesSearch Class @33-DF0C7DE5

//Variables @33-9E315808

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

//Class_Initialize Event @33-B9D79632
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
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "clientesOrder", "clientesDir", "clientesPageSize", "ccsForm"));
            $this->ClearParameters->Page = "rpt_clientes.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->clientesOrder = new clsControl(ccsListBox, "clientesOrder", "clientesOrder", ccsText, "", CCGetRequestParam("clientesOrder", $Method, NULL), $this);
            $this->clientesOrder->DSType = dsListOfValues;
            $this->clientesOrder->Values = array(array("", $CCSLocales->GetText("CCS_SelectField")), array("Sorter_id", $CCSLocales->GetText("id")), array("Sorter_priapellido", $CCSLocales->GetText("priapellido")), array("Sorter_segapellido", $CCSLocales->GetText("segapellido")), array("Sorter_prinombre", $CCSLocales->GetText("prinombre")), array("Sorter_demasnombres", $CCSLocales->GetText("demasnombres")), array("Sorter_tipo_documento", $CCSLocales->GetText("tipo_documento")), array("Sorter_num_documento", $CCSLocales->GetText("num_documento")));
            $this->clientesDir = new clsControl(ccsListBox, "clientesDir", "clientesDir", ccsText, "", CCGetRequestParam("clientesDir", $Method, NULL), $this);
            $this->clientesDir->DSType = dsListOfValues;
            $this->clientesDir->Values = array(array("", $CCSLocales->GetText("CCS_SelectOrder")), array("ASC", $CCSLocales->GetText("CCS_ASC")), array("DESC", $CCSLocales->GetText("CCS_DESC")));
            $this->clientesPageSize = new clsControl(ccsListBox, "clientesPageSize", "clientesPageSize", ccsText, "", CCGetRequestParam("clientesPageSize", $Method, NULL), $this);
            $this->clientesPageSize->DSType = dsListOfValues;
            $this->clientesPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
        }
    }
//End Class_Initialize Event

//Validate Method @33-31732F33
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->clientesOrder->Validate() && $Validation);
        $Validation = ($this->clientesDir->Validate() && $Validation);
        $Validation = ($this->clientesPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientesOrder->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientesDir->Errors->Count() == 0);
        $Validation =  $Validation && ($this->clientesPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @33-ADA2D85C
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->clientesOrder->Errors->Count());
        $errors = ($errors || $this->clientesDir->Errors->Count());
        $errors = ($errors || $this->clientesPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @33-46A5F084
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
        $Redirect = "rpt_clientes.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "rpt_clientes.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @33-06BDAE05
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
        $this->clientesOrder->Prepare();
        $this->clientesDir->Prepare();
        $this->clientesPageSize->Prepare();

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
            $Error = ComposeStrings($Error, $this->clientesOrder->Errors->ToString());
            $Error = ComposeStrings($Error, $this->clientesDir->Errors->ToString());
            $Error = ComposeStrings($Error, $this->clientesPageSize->Errors->ToString());
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
        $this->clientesOrder->Show();
        $this->clientesDir->Show();
        $this->clientesPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End clientesSearch Class @33-FCB6E20C

//Initialize Page @1-40F4C8AC
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
$TemplateFileName = "rpt_clientes.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-4ED04437
include_once("./rpt_clientes_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-744A8F53
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
$Report_Print->Page = "rpt_clientes.php";
$clientes = new clsReportclientes("", $MainPage);
$clientesSearch = new clsRecordclientesSearch("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "Clientes_mant.php";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->Report_Print = & $Report_Print;
$MainPage->clientes = & $clientes;
$MainPage->clientesSearch = & $clientesSearch;
$MainPage->Menu = & $Menu;
$MainPage->Link1 = & $Link1;
$Content->AddComponent("clientes", $clientes);
$Content->AddComponent("clientesSearch", $clientesSearch);
$Content->AddComponent("Report_Print", $Report_Print);
$Menu->AddComponent("Link1", $Link1);
$Report_Print->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Report_Print->Parameters = CCAddParam($Report_Print->Parameters, "ViewMode", "Print");
$clientes->Initialize();

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

//Execute Components @1-3F626C66
$MasterPage->Operations();
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

//Unload Page @1-289E8542
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
unset($clientes);
unset($clientesSearch);
unset($Tpl);
//End Unload Page


?>
