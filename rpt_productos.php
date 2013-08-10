<?php
//Include Common Files @1-90809D88
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "rpt_productos.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

<<<<<<< HEAD
//Master Page implementation @1-E714A8AA
include_once(RelativePath . "/Designs/medibio_reports/medibio_reports/MasterPage.php");
//End Master Page implementation

//categoria_productos_unida ReportGroup class @8-A1755BAA
=======
//categoria_productos_unida ReportGroup class @71-A1755BAA
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
class clsReportGroupcategoria_productos_unida {
    public $GroupType;
    public $mode; //1 - open, 2 - close
    public $Report_TotalRecords, $_Report_TotalRecordsAttributes;
    public $categoria_descrip, $_categoria_descripAttributes;
    public $Report_Row_Number, $_Report_Row_NumberAttributes;
    public $descrp_unidad, $_descrp_unidadAttributes;
    public $name_producto, $_name_productoAttributes;
    public $cantidad_producto, $_cantidad_productoAttributes;
    public $descripcion_producto, $_descripcion_productoAttributes;
    public $activo, $_activoAttributes;
    public $min_stock, $_min_stockAttributes;
    public $max_stock, $_max_stockAttributes;
    public $nivel_pedido, $_nivel_pedidoAttributes;
    public $Report_CurrentDateTime, $_Report_CurrentDateTimeAttributes;
    public $Report_CurrentPage, $_Report_CurrentPageAttributes;
    public $Report_TotalPages, $_Report_TotalPagesAttributes;
    public $Attributes;
    public $ReportTotalIndex = 0;
    public $PageTotalIndex;
    public $PageNumber;
    public $RowNumber;
    public $Parent;
    public $categoria_descripTotalIndex;

    function clsReportGroupcategoria_productos_unida(& $parent) {
        $this->Parent = & $parent;
        $this->Attributes = $this->Parent->Attributes->GetAsArray();
    }
    function SetControls($PrevGroup = "") {
        $this->categoria_descrip = $this->Parent->categoria_descrip->Value;
        $this->descrp_unidad = $this->Parent->descrp_unidad->Value;
        $this->name_producto = $this->Parent->name_producto->Value;
        $this->cantidad_producto = $this->Parent->cantidad_producto->Value;
        $this->descripcion_producto = $this->Parent->descripcion_producto->Value;
        $this->activo = $this->Parent->activo->Value;
        $this->min_stock = $this->Parent->min_stock->Value;
        $this->max_stock = $this->Parent->max_stock->Value;
        $this->nivel_pedido = $this->Parent->nivel_pedido->Value;
    }

    function SetTotalControls($mode = "", $PrevGroup = "") {
        $this->Report_TotalRecords = $this->Parent->Report_TotalRecords->GetTotalValue($mode);
        $this->Report_Row_Number = $this->Parent->Report_Row_Number->GetTotalValue($mode);
        $this->_Report_TotalRecordsAttributes = $this->Parent->Report_TotalRecords->Attributes->GetAsArray();
        $this->_categoria_descripAttributes = $this->Parent->categoria_descrip->Attributes->GetAsArray();
        $this->_Sorter_descrp_unidadAttributes = $this->Parent->Sorter_descrp_unidad->Attributes->GetAsArray();
        $this->_Sorter_name_productoAttributes = $this->Parent->Sorter_name_producto->Attributes->GetAsArray();
        $this->_Sorter_cantidad_productoAttributes = $this->Parent->Sorter_cantidad_producto->Attributes->GetAsArray();
        $this->_Sorter_descripcion_productoAttributes = $this->Parent->Sorter_descripcion_producto->Attributes->GetAsArray();
        $this->_Sorter_activoAttributes = $this->Parent->Sorter_activo->Attributes->GetAsArray();
        $this->_Sorter_min_stockAttributes = $this->Parent->Sorter_min_stock->Attributes->GetAsArray();
        $this->_Sorter_max_stockAttributes = $this->Parent->Sorter_max_stock->Attributes->GetAsArray();
        $this->_Sorter_nivel_pedidoAttributes = $this->Parent->Sorter_nivel_pedido->Attributes->GetAsArray();
        $this->_Report_Row_NumberAttributes = $this->Parent->Report_Row_Number->Attributes->GetAsArray();
        $this->_descrp_unidadAttributes = $this->Parent->descrp_unidad->Attributes->GetAsArray();
        $this->_name_productoAttributes = $this->Parent->name_producto->Attributes->GetAsArray();
        $this->_cantidad_productoAttributes = $this->Parent->cantidad_producto->Attributes->GetAsArray();
        $this->_descripcion_productoAttributes = $this->Parent->descripcion_producto->Attributes->GetAsArray();
        $this->_activoAttributes = $this->Parent->activo->Attributes->GetAsArray();
        $this->_min_stockAttributes = $this->Parent->min_stock->Attributes->GetAsArray();
        $this->_max_stockAttributes = $this->Parent->max_stock->Attributes->GetAsArray();
        $this->_nivel_pedidoAttributes = $this->Parent->nivel_pedido->Attributes->GetAsArray();
        $this->_Report_CurrentDateTimeAttributes = $this->Parent->Report_CurrentDateTime->Attributes->GetAsArray();
        $this->_Report_CurrentPageAttributes = $this->Parent->Report_CurrentPage->Attributes->GetAsArray();
        $this->_Report_TotalPagesAttributes = $this->Parent->Report_TotalPages->Attributes->GetAsArray();
        $this->_NavigatorAttributes = $this->Parent->Navigator->Attributes->GetAsArray();
    }
    function SyncWithHeader(& $Header) {
        $Header->Report_TotalRecords = $this->Report_TotalRecords;
        $Header->_Report_TotalRecordsAttributes = $this->_Report_TotalRecordsAttributes;
        $Header->Report_Row_Number = $this->Report_Row_Number;
        $Header->_Report_Row_NumberAttributes = $this->_Report_Row_NumberAttributes;
        $this->categoria_descrip = $Header->categoria_descrip;
        $Header->_categoria_descripAttributes = $this->_categoria_descripAttributes;
        $this->Parent->categoria_descrip->Value = $Header->categoria_descrip;
        $this->Parent->categoria_descrip->Attributes->RestoreFromArray($Header->_categoria_descripAttributes);
        $this->descrp_unidad = $Header->descrp_unidad;
        $Header->_descrp_unidadAttributes = $this->_descrp_unidadAttributes;
        $this->Parent->descrp_unidad->Value = $Header->descrp_unidad;
        $this->Parent->descrp_unidad->Attributes->RestoreFromArray($Header->_descrp_unidadAttributes);
        $this->name_producto = $Header->name_producto;
        $Header->_name_productoAttributes = $this->_name_productoAttributes;
        $this->Parent->name_producto->Value = $Header->name_producto;
        $this->Parent->name_producto->Attributes->RestoreFromArray($Header->_name_productoAttributes);
        $this->cantidad_producto = $Header->cantidad_producto;
        $Header->_cantidad_productoAttributes = $this->_cantidad_productoAttributes;
        $this->Parent->cantidad_producto->Value = $Header->cantidad_producto;
        $this->Parent->cantidad_producto->Attributes->RestoreFromArray($Header->_cantidad_productoAttributes);
        $this->descripcion_producto = $Header->descripcion_producto;
        $Header->_descripcion_productoAttributes = $this->_descripcion_productoAttributes;
        $this->Parent->descripcion_producto->Value = $Header->descripcion_producto;
        $this->Parent->descripcion_producto->Attributes->RestoreFromArray($Header->_descripcion_productoAttributes);
        $this->activo = $Header->activo;
        $Header->_activoAttributes = $this->_activoAttributes;
        $this->Parent->activo->Value = $Header->activo;
        $this->Parent->activo->Attributes->RestoreFromArray($Header->_activoAttributes);
        $this->min_stock = $Header->min_stock;
        $Header->_min_stockAttributes = $this->_min_stockAttributes;
        $this->Parent->min_stock->Value = $Header->min_stock;
        $this->Parent->min_stock->Attributes->RestoreFromArray($Header->_min_stockAttributes);
        $this->max_stock = $Header->max_stock;
        $Header->_max_stockAttributes = $this->_max_stockAttributes;
        $this->Parent->max_stock->Value = $Header->max_stock;
        $this->Parent->max_stock->Attributes->RestoreFromArray($Header->_max_stockAttributes);
        $this->nivel_pedido = $Header->nivel_pedido;
        $Header->_nivel_pedidoAttributes = $this->_nivel_pedidoAttributes;
        $this->Parent->nivel_pedido->Value = $Header->nivel_pedido;
        $this->Parent->nivel_pedido->Attributes->RestoreFromArray($Header->_nivel_pedidoAttributes);
    }
    function ChangeTotalControls() {
        $this->Report_TotalRecords = $this->Parent->Report_TotalRecords->GetValue();
        $this->Report_Row_Number = $this->Parent->Report_Row_Number->GetValue();
    }
}
//End categoria_productos_unida ReportGroup class

<<<<<<< HEAD
//categoria_productos_unida GroupsCollection class @8-435C7BED
=======
//categoria_productos_unida GroupsCollection class @71-435C7BED
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
class clsGroupsCollectioncategoria_productos_unida {
    public $Groups;
    public $mPageCurrentHeaderIndex;
    public $mcategoria_descripCurrentHeaderIndex;
    public $PageSize;
    public $TotalPages = 0;
    public $TotalRows = 0;
    public $CurrentPageSize = 0;
    public $Pages;
    public $Parent;
    public $LastDetailIndex;

    function clsGroupsCollectioncategoria_productos_unida(& $parent) {
        $this->Parent = & $parent;
        $this->Groups = array();
        $this->Pages  = array();
        $this->mcategoria_descripCurrentHeaderIndex = 1;
        $this->mReportTotalIndex = 0;
        $this->mPageTotalIndex = 1;
    }

    function & InitGroup() {
        $group = new clsReportGroupcategoria_productos_unida($this->Parent);
        $group->RowNumber = $this->TotalRows + 1;
        $group->PageNumber = $this->TotalPages;
        $group->PageTotalIndex = $this->mPageCurrentHeaderIndex;
        $group->categoria_descripTotalIndex = $this->mcategoria_descripCurrentHeaderIndex;
        return $group;
    }

    function RestoreValues() {
        $this->Parent->Report_TotalRecords->Value = $this->Parent->Report_TotalRecords->initialValue;
        $this->Parent->categoria_descrip->Value = $this->Parent->categoria_descrip->initialValue;
        $this->Parent->Report_Row_Number->Value = $this->Parent->Report_Row_Number->initialValue;
        $this->Parent->descrp_unidad->Value = $this->Parent->descrp_unidad->initialValue;
        $this->Parent->name_producto->Value = $this->Parent->name_producto->initialValue;
        $this->Parent->cantidad_producto->Value = $this->Parent->cantidad_producto->initialValue;
        $this->Parent->descripcion_producto->Value = $this->Parent->descripcion_producto->initialValue;
        $this->Parent->activo->Value = $this->Parent->activo->initialValue;
        $this->Parent->min_stock->Value = $this->Parent->min_stock->initialValue;
        $this->Parent->max_stock->Value = $this->Parent->max_stock->initialValue;
        $this->Parent->nivel_pedido->Value = $this->Parent->nivel_pedido->initialValue;
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
        if ($groupName == "categoria_descrip") {
            $Groupcategoria_descrip = & $this->InitGroup(true);
            $this->Parent->categoria_descrip_Header->CCSEventResult = CCGetEvent($this->Parent->categoria_descrip_Header->CCSEvents, "OnInitialize", $this->Parent->categoria_descrip_Header);
            if ($this->Parent->Page_Footer->Visible) 
                $OverSize = $this->Parent->categoria_descrip_Header->Height + $this->Parent->Page_Footer->Height;
            else
                $OverSize = $this->Parent->categoria_descrip_Header->Height;
            if (($this->PageSize > 0) and $this->Parent->categoria_descrip_Header->Visible and ($this->CurrentPageSize + $OverSize > $this->PageSize)) {
                $this->ClosePage();
                $this->OpenPage();
            }
            if ($this->Parent->categoria_descrip_Header->Visible)
                $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->categoria_descrip_Header->Height;
                $Groupcategoria_descrip->SetTotalControls("GetNextValue");
            $this->Parent->categoria_descrip_Header->CCSEventResult = CCGetEvent($this->Parent->categoria_descrip_Header->CCSEvents, "OnCalculate", $this->Parent->categoria_descrip_Header);
            $Groupcategoria_descrip->SetControls();
            $Groupcategoria_descrip->Mode = 1;
            $Groupcategoria_descrip->GroupType = "categoria_descrip";
            $this->mcategoria_descripCurrentHeaderIndex = count($this->Groups);
            $this->Groups[] = & $Groupcategoria_descrip;
            $this->Parent->Report_Row_Number->Reset();
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
        $Groupcategoria_descrip = & $this->InitGroup(true);
        $this->Parent->categoria_descrip_Footer->CCSEventResult = CCGetEvent($this->Parent->categoria_descrip_Footer->CCSEvents, "OnInitialize", $this->Parent->categoria_descrip_Footer);
        if ($this->Parent->Page_Footer->Visible) 
            $OverSize = $this->Parent->categoria_descrip_Footer->Height + $this->Parent->Page_Footer->Height;
        else
            $OverSize = $this->Parent->categoria_descrip_Footer->Height;
        if (($this->PageSize > 0) and $this->Parent->categoria_descrip_Footer->Visible and ($this->CurrentPageSize + $OverSize > $this->PageSize)) {
            $this->ClosePage();
            $this->OpenPage();
        }
        $Groupcategoria_descrip->SetTotalControls("GetPrevValue");
        $Groupcategoria_descrip->SyncWithHeader($this->Groups[$this->mcategoria_descripCurrentHeaderIndex]);
        if ($this->Parent->categoria_descrip_Footer->Visible)
            $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->categoria_descrip_Footer->Height;
        $this->Parent->categoria_descrip_Footer->CCSEventResult = CCGetEvent($this->Parent->categoria_descrip_Footer->CCSEvents, "OnCalculate", $this->Parent->categoria_descrip_Footer);
        $Groupcategoria_descrip->SetControls();
        $this->Parent->Report_Row_Number->Reset();
        $this->RestoreValues();
        $Groupcategoria_descrip->Mode = 2;
        $Groupcategoria_descrip->GroupType ="categoria_descrip";
        $this->Groups[] = & $Groupcategoria_descrip;
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
//End categoria_productos_unida GroupsCollection class

<<<<<<< HEAD
class clsReportcategoria_productos_unida { //categoria_productos_unida Class @8-6F52D54A

//categoria_productos_unida Variables @8-DB32099B
=======
class clsReportcategoria_productos_unida { //categoria_productos_unida Class @71-6F52D54A

//categoria_productos_unida Variables @71-DB32099B
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449

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
    public $categoria_descrip_HeaderBlock, $categoria_descrip_Header;
    public $categoria_descrip_FooterBlock, $categoria_descrip_Footer;
    public $SorterName, $SorterDirection;

    public $ds;
    public $DataSource;
    public $UseClientPaging = false;

    //Report Controls
    public $StaticControls, $RowControls, $Report_FooterControls, $Report_HeaderControls;
    public $Page_FooterControls, $Page_HeaderControls;
    public $categoria_descrip_HeaderControls, $categoria_descrip_FooterControls;
    public $Sorter_descrp_unidad;
    public $Sorter_name_producto;
    public $Sorter_cantidad_producto;
    public $Sorter_descripcion_producto;
    public $Sorter_activo;
    public $Sorter_min_stock;
    public $Sorter_max_stock;
    public $Sorter_nivel_pedido;
//End categoria_productos_unida Variables

<<<<<<< HEAD
//Class_Initialize Event @8-41CCE709
=======
//Class_Initialize Event @71-41CCE709
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function clsReportcategoria_productos_unida($RelativePath = "", & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "categoria_productos_unida";
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
        $this->Page_Footer->Height = 2;
        $MinPageSize += $this->Page_Footer->Height;
        $this->Page_Header = new clsSection($this);
        $this->categoria_descrip_Footer = new clsSection($this);
        $this->categoria_descrip_Header = new clsSection($this);
        $this->categoria_descrip_Header->Height = 2;
        $MaxSectionSize = max($MaxSectionSize, $this->categoria_descrip_Header->Height);
        $this->Errors = new clsErrors();
        $this->DataSource = new clscategoria_productos_unidaDataSource($this);
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
                $this->PageSize = 10;
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
        $this->SorterName = CCGetParam("categoria_productos_unidaOrder", "");
        $this->SorterDirection = CCGetParam("categoria_productos_unidaDir", "");

        $this->Report_TotalRecords = new clsControl(ccsReportLabel, "Report_TotalRecords", "Report_TotalRecords", ccsText, "", 0, $this);
        $this->Report_TotalRecords->TotalFunction = "Count";
        $this->Report_TotalRecords->IsEmptySource = true;
        $this->categoria_descrip = new clsControl(ccsReportLabel, "categoria_descrip", "categoria_descrip", ccsText, "", "", $this);
        $this->Sorter_descrp_unidad = new clsSorter($this->ComponentName, "Sorter_descrp_unidad", $FileName, $this);
        $this->Sorter_name_producto = new clsSorter($this->ComponentName, "Sorter_name_producto", $FileName, $this);
        $this->Sorter_cantidad_producto = new clsSorter($this->ComponentName, "Sorter_cantidad_producto", $FileName, $this);
        $this->Sorter_descripcion_producto = new clsSorter($this->ComponentName, "Sorter_descripcion_producto", $FileName, $this);
        $this->Sorter_activo = new clsSorter($this->ComponentName, "Sorter_activo", $FileName, $this);
        $this->Sorter_min_stock = new clsSorter($this->ComponentName, "Sorter_min_stock", $FileName, $this);
        $this->Sorter_max_stock = new clsSorter($this->ComponentName, "Sorter_max_stock", $FileName, $this);
        $this->Sorter_nivel_pedido = new clsSorter($this->ComponentName, "Sorter_nivel_pedido", $FileName, $this);
        $this->Report_Row_Number = new clsControl(ccsReportLabel, "Report_Row_Number", "Report_Row_Number", ccsInteger, "", 0, $this);
        $this->Report_Row_Number->TotalFunction = "Count";
        $this->Report_Row_Number->IsEmptySource = true;
        $this->descrp_unidad = new clsControl(ccsReportLabel, "descrp_unidad", "descrp_unidad", ccsText, "", "", $this);
        $this->name_producto = new clsControl(ccsReportLabel, "name_producto", "name_producto", ccsText, "", "", $this);
        $this->cantidad_producto = new clsControl(ccsReportLabel, "cantidad_producto", "cantidad_producto", ccsInteger, "", "", $this);
        $this->descripcion_producto = new clsControl(ccsReportLabel, "descripcion_producto", "descripcion_producto", ccsText, "", "", $this);
        $this->activo = new clsControl(ccsReportLabel, "activo", "activo", ccsInteger, "", "", $this);
        $this->min_stock = new clsControl(ccsReportLabel, "min_stock", "min_stock", ccsInteger, "", "", $this);
        $this->max_stock = new clsControl(ccsReportLabel, "max_stock", "max_stock", ccsInteger, "", "", $this);
        $this->nivel_pedido = new clsControl(ccsReportLabel, "nivel_pedido", "nivel_pedido", ccsInteger, "", "", $this);
        $this->Separator = new clsPanel("Separator", $this);
        $this->NoRecords = new clsPanel("NoRecords", $this);
        $this->PageBreak = new clsPanel("PageBreak", $this);
        $this->Report_CurrentDateTime = new clsControl(ccsReportLabel, "Report_CurrentDateTime", "Report_CurrentDateTime", ccsText, array('ShortDate', ' ', 'ShortTime'), "", $this);
        $this->Report_CurrentPage = new clsControl(ccsReportLabel, "Report_CurrentPage", "Report_CurrentPage", ccsInteger, "", "", $this);
        $this->Report_TotalPages = new clsControl(ccsReportLabel, "Report_TotalPages", "Report_TotalPages", ccsInteger, "", "", $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpSimple, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

<<<<<<< HEAD
//Initialize Method @8-6C59EE65
=======
//Initialize Method @71-6C59EE65
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = $this->PageSize;
        $this->DataSource->AbsolutePage = $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

<<<<<<< HEAD
//CheckErrors Method @8-DAE3287E
=======
//CheckErrors Method @71-DAE3287E
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->Report_TotalRecords->Errors->Count());
        $errors = ($errors || $this->categoria_descrip->Errors->Count());
        $errors = ($errors || $this->Report_Row_Number->Errors->Count());
        $errors = ($errors || $this->descrp_unidad->Errors->Count());
        $errors = ($errors || $this->name_producto->Errors->Count());
        $errors = ($errors || $this->cantidad_producto->Errors->Count());
        $errors = ($errors || $this->descripcion_producto->Errors->Count());
        $errors = ($errors || $this->activo->Errors->Count());
        $errors = ($errors || $this->min_stock->Errors->Count());
        $errors = ($errors || $this->max_stock->Errors->Count());
        $errors = ($errors || $this->nivel_pedido->Errors->Count());
        $errors = ($errors || $this->Report_CurrentDateTime->Errors->Count());
        $errors = ($errors || $this->Report_CurrentPage->Errors->Count());
        $errors = ($errors || $this->Report_TotalPages->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

<<<<<<< HEAD
//GetErrors Method @8-667FC6DA
=======
//GetErrors Method @71-667FC6DA
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Report_TotalRecords->Errors->ToString());
        $errors = ComposeStrings($errors, $this->categoria_descrip->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_Row_Number->Errors->ToString());
        $errors = ComposeStrings($errors, $this->descrp_unidad->Errors->ToString());
        $errors = ComposeStrings($errors, $this->name_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->cantidad_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->descripcion_producto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->activo->Errors->ToString());
        $errors = ComposeStrings($errors, $this->min_stock->Errors->ToString());
        $errors = ComposeStrings($errors, $this->max_stock->Errors->ToString());
        $errors = ComposeStrings($errors, $this->nivel_pedido->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_CurrentDateTime->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_CurrentPage->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_TotalPages->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

<<<<<<< HEAD
//Show Method @8-AF6477EE
=======
//Show Method @71-AF6477EE
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Show()
    {
        $Tpl = & CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $ShownRecords = 0;


        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->Prepare();
        $this->DataSource->Open();

        $categoria_descripKey = "";
        $Groups = new clsGroupsCollectioncategoria_productos_unida($this);
        $Groups->PageSize = $this->PageSize > 0 ? $this->PageSize : 0;

        $is_next_record = $this->DataSource->next_record();
        $this->IsEmpty = ! $is_next_record;
        while($is_next_record) {
            $this->DataSource->SetValues();
            $this->categoria_descrip->SetValue($this->DataSource->categoria_descrip->GetValue());
            $this->descrp_unidad->SetValue($this->DataSource->descrp_unidad->GetValue());
            $this->name_producto->SetValue($this->DataSource->name_producto->GetValue());
            $this->cantidad_producto->SetValue($this->DataSource->cantidad_producto->GetValue());
            $this->descripcion_producto->SetValue($this->DataSource->descripcion_producto->GetValue());
            $this->activo->SetValue($this->DataSource->activo->GetValue());
            $this->min_stock->SetValue($this->DataSource->min_stock->GetValue());
            $this->max_stock->SetValue($this->DataSource->max_stock->GetValue());
            $this->nivel_pedido->SetValue($this->DataSource->nivel_pedido->GetValue());
            $this->Report_TotalRecords->SetValue(1);
            $this->Report_Row_Number->SetValue(1);
            if (count($Groups->Groups) == 0) $Groups->OpenGroup("Report");
            if (count($Groups->Groups) == 2 or $categoria_descripKey != $this->DataSource->f("categoria_descrip")) {
                $Groups->OpenGroup("categoria_descrip");
            }
            $Groups->AddItem();
            $categoria_descripKey = $this->DataSource->f("categoria_descrip");
            $is_next_record = $this->DataSource->next_record();
            if (!$is_next_record || $categoria_descripKey != $this->DataSource->f("categoria_descrip")) {
                $Groups->CloseGroup("categoria_descrip");
            }
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
            $this->ControlsVisible["categoria_descrip"] = $this->categoria_descrip->Visible;
            $this->ControlsVisible["Sorter_descrp_unidad"] = $this->Sorter_descrp_unidad->Visible;
            $this->ControlsVisible["Sorter_name_producto"] = $this->Sorter_name_producto->Visible;
            $this->ControlsVisible["Sorter_cantidad_producto"] = $this->Sorter_cantidad_producto->Visible;
            $this->ControlsVisible["Sorter_descripcion_producto"] = $this->Sorter_descripcion_producto->Visible;
            $this->ControlsVisible["Sorter_activo"] = $this->Sorter_activo->Visible;
            $this->ControlsVisible["Sorter_min_stock"] = $this->Sorter_min_stock->Visible;
            $this->ControlsVisible["Sorter_max_stock"] = $this->Sorter_max_stock->Visible;
            $this->ControlsVisible["Sorter_nivel_pedido"] = $this->Sorter_nivel_pedido->Visible;
            $this->ControlsVisible["Report_Row_Number"] = $this->Report_Row_Number->Visible;
            $this->ControlsVisible["descrp_unidad"] = $this->descrp_unidad->Visible;
            $this->ControlsVisible["name_producto"] = $this->name_producto->Visible;
            $this->ControlsVisible["cantidad_producto"] = $this->cantidad_producto->Visible;
            $this->ControlsVisible["descripcion_producto"] = $this->descripcion_producto->Visible;
            $this->ControlsVisible["activo"] = $this->activo->Visible;
            $this->ControlsVisible["min_stock"] = $this->min_stock->Visible;
            $this->ControlsVisible["max_stock"] = $this->max_stock->Visible;
            $this->ControlsVisible["nivel_pedido"] = $this->nivel_pedido->Visible;
            $this->ControlsVisible["Separator"] = $this->Separator->Visible;
            do {
                $this->Attributes->RestoreFromArray($items[$i]->Attributes);
                $this->RowNumber = $items[$i]->RowNumber;
                switch ($items[$i]->GroupType) {
                    Case "":
                        $this->Separator->Visible = "" == $items[$i+1]->GroupType;
                        $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Detail";
                        $this->Report_Row_Number->SetValue($items[$i]->Report_Row_Number);
                        $this->Report_Row_Number->Attributes->RestoreFromArray($items[$i]->_Report_Row_NumberAttributes);
                        $this->descrp_unidad->SetValue($items[$i]->descrp_unidad);
                        $this->descrp_unidad->Attributes->RestoreFromArray($items[$i]->_descrp_unidadAttributes);
                        $this->name_producto->SetValue($items[$i]->name_producto);
                        $this->name_producto->Attributes->RestoreFromArray($items[$i]->_name_productoAttributes);
                        $this->cantidad_producto->SetValue($items[$i]->cantidad_producto);
                        $this->cantidad_producto->Attributes->RestoreFromArray($items[$i]->_cantidad_productoAttributes);
                        $this->descripcion_producto->SetValue($items[$i]->descripcion_producto);
                        $this->descripcion_producto->Attributes->RestoreFromArray($items[$i]->_descripcion_productoAttributes);
                        $this->activo->SetValue($items[$i]->activo);
                        $this->activo->Attributes->RestoreFromArray($items[$i]->_activoAttributes);
                        $this->min_stock->SetValue($items[$i]->min_stock);
                        $this->min_stock->Attributes->RestoreFromArray($items[$i]->_min_stockAttributes);
                        $this->max_stock->SetValue($items[$i]->max_stock);
                        $this->max_stock->Attributes->RestoreFromArray($items[$i]->_max_stockAttributes);
                        $this->nivel_pedido->SetValue($items[$i]->nivel_pedido);
                        $this->nivel_pedido->Attributes->RestoreFromArray($items[$i]->_nivel_pedidoAttributes);
                        $this->Detail->CCSEventResult = CCGetEvent($this->Detail->CCSEvents, "BeforeShow", $this->Detail);
                        $this->Attributes->Show();
                        $this->Report_Row_Number->Show();
                        $this->descrp_unidad->Show();
                        $this->name_producto->Show();
                        $this->cantidad_producto->Show();
                        $this->descripcion_producto->Show();
                        $this->activo->Show();
                        $this->min_stock->Show();
                        $this->max_stock->Show();
                        $this->nivel_pedido->Show();
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
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Page_Header", true, "Section Detail");
                            }
                        }
                        if ($items[$i]->Mode == 2 && !$this->UseClientPaging || $items[$i]->Mode == 1 && $this->UseClientPaging) {
                            $this->PageBreak->Visible = (($i < count($items) - 1) && ($this->ViewMode == "Print"));
                            $this->Report_CurrentDateTime->SetValue(CCFormatDate(CCGetDateArray(), $this->Report_CurrentDateTime->Format));
                            $this->Report_CurrentDateTime->Attributes->RestoreFromArray($items[$i]->_Report_CurrentDateTimeAttributes);
                            $this->Report_CurrentPage->SetValue($items[$i]->PageNumber);
                            $this->Report_CurrentPage->Attributes->RestoreFromArray($items[$i]->_Report_CurrentPageAttributes);
                            $this->Report_TotalPages->SetValue($Groups->TotalPages);
                            $this->Report_TotalPages->Attributes->RestoreFromArray($items[$i]->_Report_TotalPagesAttributes);
                            $this->Navigator->PageNumber = $items[$i]->PageNumber;
                            $this->Navigator->TotalPages = $Groups->TotalPages;
                            $this->Navigator->Visible = ("Print" != $this->ViewMode) && ($this->Navigator->TotalPages > 1);
                            $this->Page_Footer->CCSEventResult = CCGetEvent($this->Page_Footer->CCSEvents, "BeforeShow", $this->Page_Footer);
                            if ($this->Page_Footer->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Page_Footer";
                                $this->PageBreak->Show();
                                $this->Report_CurrentDateTime->Show();
                                $this->Report_CurrentPage->Show();
                                $this->Report_TotalPages->Show();
                                $this->Navigator->Show();
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Page_Footer", true, "Section Detail");
                            }
                        }
                        break;
                    case "categoria_descrip":
                        if ($items[$i]->Mode == 1) {
                            $this->categoria_descrip->SetValue($items[$i]->categoria_descrip);
                            $this->categoria_descrip->Attributes->RestoreFromArray($items[$i]->_categoria_descripAttributes);
                            $this->categoria_descrip_Header->CCSEventResult = CCGetEvent($this->categoria_descrip_Header->CCSEvents, "BeforeShow", $this->categoria_descrip_Header);
                            if ($this->categoria_descrip_Header->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section categoria_descrip_Header";
                                $this->Attributes->Show();
                                $this->categoria_descrip->Show();
                                $this->Sorter_descrp_unidad->Show();
                                $this->Sorter_name_producto->Show();
                                $this->Sorter_cantidad_producto->Show();
                                $this->Sorter_descripcion_producto->Show();
                                $this->Sorter_activo->Show();
                                $this->Sorter_min_stock->Show();
                                $this->Sorter_max_stock->Show();
                                $this->Sorter_nivel_pedido->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section categoria_descrip_Header", true, "Section Detail");
                            }
                        }
                        if ($items[$i]->Mode == 2) {
                            $this->categoria_descrip_Footer->CCSEventResult = CCGetEvent($this->categoria_descrip_Footer->CCSEvents, "BeforeShow", $this->categoria_descrip_Footer);
                            if ($this->categoria_descrip_Footer->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section categoria_descrip_Footer";
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section categoria_descrip_Footer", true, "Section Detail");
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

<<<<<<< HEAD
} //End categoria_productos_unida Class @8-FCB6E20C

class clscategoria_productos_unidaDataSource extends clsDBConnection1 {  //categoria_productos_unidaDataSource Class @8-256C841A

//DataSource Variables @8-68666D63
=======
} //End categoria_productos_unida Class @71-FCB6E20C

class clscategoria_productos_unidaDataSource extends clsDBConnection1 {  //categoria_productos_unidaDataSource Class @71-256C841A

//DataSource Variables @71-68666D63
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $wp;


    // Datasource fields
    public $categoria_descrip;
    public $descrp_unidad;
    public $name_producto;
    public $cantidad_producto;
    public $descripcion_producto;
    public $activo;
    public $min_stock;
    public $max_stock;
    public $nivel_pedido;
//End DataSource Variables

<<<<<<< HEAD
//DataSourceClass_Initialize Event @8-069E4CD9
=======
//DataSourceClass_Initialize Event @71-069E4CD9
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function clscategoria_productos_unidaDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Report categoria_productos_unida";
        $this->Initialize();
        $this->categoria_descrip = new clsField("categoria_descrip", ccsText, "");
        
        $this->descrp_unidad = new clsField("descrp_unidad", ccsText, "");
        
        $this->name_producto = new clsField("name_producto", ccsText, "");
        
        $this->cantidad_producto = new clsField("cantidad_producto", ccsInteger, "");
        
        $this->descripcion_producto = new clsField("descripcion_producto", ccsText, "");
        
        $this->activo = new clsField("activo", ccsInteger, "");
        
        $this->min_stock = new clsField("min_stock", ccsInteger, "");
        
        $this->max_stock = new clsField("max_stock", ccsInteger, "");
        
        $this->nivel_pedido = new clsField("nivel_pedido", ccsInteger, "");
        

    }
//End DataSourceClass_Initialize Event

<<<<<<< HEAD
//SetOrder Method @8-E11DC20E
=======
//SetOrder Method @71-E11DC20E
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "name_producto";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_descrp_unidad" => array("descrp_unidad", ""), 
            "Sorter_name_producto" => array("name_producto", ""), 
            "Sorter_cantidad_producto" => array("cantidad_producto", ""), 
            "Sorter_descripcion_producto" => array("descripcion_producto", ""), 
            "Sorter_activo" => array("activo", ""), 
            "Sorter_min_stock" => array("min_stock", ""), 
            "Sorter_max_stock" => array("max_stock", ""), 
            "Sorter_nivel_pedido" => array("nivel_pedido", "")));
    }
//End SetOrder Method

<<<<<<< HEAD
//Prepare Method @8-14D6CD9D
=======
//Prepare Method @71-14D6CD9D
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
    }
//End Prepare Method

<<<<<<< HEAD
//Open Method @8-61B68DE4
=======
//Open Method @71-61B68DE4
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT categoria_descrip, descrp_unidad, name_producto, cantidad_producto, descripcion_producto, activo, min_stock, max_stock, nivel_pedido \n\n" .
        "FROM (productos INNER JOIN categoria_productos ON\n\n" .
        "productos.categoria_producto_id = categoria_productos.id) INNER JOIN unidadesmedida ON\n\n" .
        "productos.unidad_medida_id = unidadesmedida.id {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, "categoria_productos.categoria_descrip asc" .  ($this->Order ? ", " . $this->Order: "")));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

<<<<<<< HEAD
//SetValues Method @8-335F6AF1
=======
//SetValues Method @71-335F6AF1
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function SetValues()
    {
        $this->categoria_descrip->SetDBValue($this->f("categoria_descrip"));
        $this->descrp_unidad->SetDBValue($this->f("descrp_unidad"));
        $this->name_producto->SetDBValue($this->f("name_producto"));
        $this->cantidad_producto->SetDBValue(trim($this->f("cantidad_producto")));
        $this->descripcion_producto->SetDBValue($this->f("descripcion_producto"));
        $this->activo->SetDBValue(trim($this->f("activo")));
        $this->min_stock->SetDBValue(trim($this->f("min_stock")));
        $this->max_stock->SetDBValue(trim($this->f("max_stock")));
        $this->nivel_pedido->SetDBValue(trim($this->f("nivel_pedido")));
    }
//End SetValues Method

<<<<<<< HEAD
} //End categoria_productos_unidaDataSource Class @8-FCB6E20C

class clsRecordproductos_unidadesmedida { //productos_unidadesmedida Class @60-0BEBE0BD

//Variables @60-9E315808
=======
} //End categoria_productos_unidaDataSource Class @71-FCB6E20C

class clsRecordproductos_unidadesmedida { //productos_unidadesmedida Class @120-0BEBE0BD

//Variables @120-9E315808
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
//Class_Initialize Event @60-2FA41560
=======
//Class_Initialize Event @120-FF5248DD
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function clsRecordproductos_unidadesmedida($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record productos_unidadesmedida/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "productos_unidadesmedida";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_keyword", "categoria_productos_unidaPageSize", "ccsForm"));
            $this->ClearParameters->Page = "rpt_productos.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
<<<<<<< HEAD
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", "Keyword", ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", "Any Of Words"), array("2", "All Words"), array("3", "Exact Phrase"));
            $this->categoria_productos_unidaPageSize = new clsControl(ccsListBox, "categoria_productos_unidaPageSize", "categoria_productos_unidaPageSize", ccsText, "", CCGetRequestParam("categoria_productos_unidaPageSize", $Method, NULL), $this);
            $this->categoria_productos_unidaPageSize->DSType = dsListOfValues;
            $this->categoria_productos_unidaPageSize->Values = array(array("", "Select Value"), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
=======
            $this->s_keyword = new clsControl(ccsTextBox, "s_keyword", $CCSLocales->GetText("CCS_Filter"), ccsText, "", CCGetRequestParam("s_keyword", $Method, NULL), $this);
            $this->searchConditions = new clsControl(ccsListBox, "searchConditions", "searchConditions", ccsText, "", CCGetRequestParam("searchConditions", $Method, NULL), $this);
            $this->searchConditions->DSType = dsListOfValues;
            $this->searchConditions->Values = array(array("1", $CCSLocales->GetText("CCS_AdvSearchAnyOfWords")), array("2", $CCSLocales->GetText("CCS_AdvSearchAllWords")), array("3", $CCSLocales->GetText("CCS_AdvSearchExactPhrase")));
            $this->categoria_productos_unidaPageSize = new clsControl(ccsListBox, "categoria_productos_unidaPageSize", "categoria_productos_unidaPageSize", ccsText, "", CCGetRequestParam("categoria_productos_unidaPageSize", $Method, NULL), $this);
            $this->categoria_productos_unidaPageSize->DSType = dsListOfValues;
            $this->categoria_productos_unidaPageSize->Values = array(array("", $CCSLocales->GetText("CCS_SelectValue")), array("5", "5"), array("10", "10"), array("25", "25"), array("100", "100"));
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
        }
    }
//End Class_Initialize Event

<<<<<<< HEAD
//Validate Method @60-904DC0ED
=======
//Validate Method @120-904DC0ED
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_keyword->Validate() && $Validation);
        $Validation = ($this->searchConditions->Validate() && $Validation);
        $Validation = ($this->categoria_productos_unidaPageSize->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_keyword->Errors->Count() == 0);
        $Validation =  $Validation && ($this->searchConditions->Errors->Count() == 0);
        $Validation =  $Validation && ($this->categoria_productos_unidaPageSize->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

<<<<<<< HEAD
//CheckErrors Method @60-6AF4D452
=======
//CheckErrors Method @120-6AF4D452
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_keyword->Errors->Count());
        $errors = ($errors || $this->searchConditions->Errors->Count());
        $errors = ($errors || $this->categoria_productos_unidaPageSize->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

<<<<<<< HEAD
//Operation Method @60-4B4CBAFE
=======
//Operation Method @120-4B4CBAFE
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
        $Redirect = "rpt_productos.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "rpt_productos.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
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
//Show Method @60-2A398313
=======
//Show Method @120-2A398313
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
        $this->categoria_productos_unidaPageSize->Prepare();

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
            $Error = ComposeStrings($Error, $this->categoria_productos_unidaPageSize->Errors->ToString());
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
        $this->categoria_productos_unidaPageSize->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

<<<<<<< HEAD
} //End productos_unidadesmedida Class @60-FCB6E20C

//Initialize Page @1-3E9CFFCA
=======
} //End productos_unidadesmedida Class @120-FCB6E20C

//Initialize Page @1-3320E132
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
// Variables
$FileName = "";
$Redirect = "";
$Tpl = "";
$TemplateFileName = "";
$BlockToParse = "";
$ComponentName = "";
$Attributes = "";
<<<<<<< HEAD
$PathToCurrentMasterPage = "";
$TemplatePathValue = "";
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449

// Events;
$CCSEvents = "";
$CCSEventResult = "";
<<<<<<< HEAD
$MasterPage = null;
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$TemplateSource = "";

$FileName = FileName;
$Redirect = "";
$TemplateFileName = "rpt_productos.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-5C97FA52
include_once("./rpt_productos_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

<<<<<<< HEAD
//Initialize Objects @1-101AF1E9
=======
//Initialize Objects @1-8779D13A
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$DBConnection1 = new clsDBConnection1();
$MainPage->Connections["Connection1"] = & $DBConnection1;
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
<<<<<<< HEAD
$MasterPage = new clsMasterPage("/Designs/medibio_reports/medibio_reports/", "MasterPage", $MainPage);
$MasterPage->Attributes = $Attributes;
$MasterPage->Initialize();
$Head = new clsPanel("Head", $MainPage);
$Head->PlaceholderName = "Head";
$Content = new clsPanel("Content", $MainPage);
$Content->PlaceholderName = "Content";
=======
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "productos_mant.php";
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$Report_Print = new clsControl(ccsLink, "Report_Print", "Report_Print", ccsText, "", CCGetRequestParam("Report_Print", ccsGet, NULL), $MainPage);
$Report_Print->Page = "rpt_productos.php";
$categoria_productos_unida = new clsReportcategoria_productos_unida("", $MainPage);
$productos_unidadesmedida = new clsRecordproductos_unidadesmedida("", $MainPage);
<<<<<<< HEAD
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$Link1 = new clsControl(ccsLink, "Link1", "Link1", ccsText, "", CCGetRequestParam("Link1", ccsGet, NULL), $MainPage);
$Link1->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Link1->Page = "productos_mant.php";
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->Report_Print = & $Report_Print;
$MainPage->categoria_productos_unida = & $categoria_productos_unida;
$MainPage->productos_unidadesmedida = & $productos_unidadesmedida;
$MainPage->Menu = & $Menu;
$MainPage->Link1 = & $Link1;
$Content->AddComponent("categoria_productos_unida", $categoria_productos_unida);
$Content->AddComponent("productos_unidadesmedida", $productos_unidadesmedida);
$Content->AddComponent("Report_Print", $Report_Print);
$Menu->AddComponent("Link1", $Link1);
=======
$MainPage->Link1 = & $Link1;
$MainPage->Report_Print = & $Report_Print;
$MainPage->categoria_productos_unida = & $categoria_productos_unida;
$MainPage->productos_unidadesmedida = & $productos_unidadesmedida;
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$Report_Print->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
$Report_Print->Parameters = CCAddParam($Report_Print->Parameters, "ViewMode", "Print");
$categoria_productos_unida->Initialize();

BindEvents();

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

<<<<<<< HEAD
//Initialize HTML Template @1-554B8835
=======
//Initialize HTML Template @1-FFE96B5E
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$CCSEventResult = CCGetEvent($CCSEvents, "OnInitializeView", $MainPage);
$Tpl = new clsTemplate($FileEncoding, $TemplateEncoding);
if (strlen($TemplateSource)) {
    $Tpl->LoadTemplateFromStr($TemplateSource, $BlockToParse, "CP1252", "replace");
} else {
    $Tpl->LoadTemplate(PathToCurrentPage . $TemplateFileName, $BlockToParse, "CP1252", "replace");
}
$Tpl->SetVar("CCS_PathToRoot", $PathToRoot);
<<<<<<< HEAD
$Tpl->SetVar("CCS_PathToMasterPage", RelativePath . $PathToCurrentMasterPage);
=======
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$Tpl->block_path = "/$BlockToParse";
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeShow", $MainPage);
$Attributes->SetValue("pathToRoot", "");
$Attributes->Show();
//End Initialize HTML Template

<<<<<<< HEAD
//Execute Components @1-B8A719E1
$MasterPage->Operations();
=======
//Execute Components @1-2F193346
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$productos_unidadesmedida->Operation();
//End Execute Components

//Go to destination page @1-53079622
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnection1->close();
    header("Location: " . $Redirect);
    unset($categoria_productos_unida);
    unset($productos_unidadesmedida);
    unset($Tpl);
    exit;
}
//End Go to destination page

<<<<<<< HEAD
//Show Page @1-9289D706
$Head->Show();
$Content->Show();
$Menu->Show();
$MasterPage->Tpl->SetVar("Head", $Tpl->GetVar("Panel Head"));
$MasterPage->Tpl->SetVar("Content", $Tpl->GetVar("Panel Content"));
$MasterPage->Tpl->SetVar("Menu", $Tpl->GetVar("Panel Menu"));
$MasterPage->Show();
if (!isset($main_block)) $main_block = $MasterPage->HTML;
=======
//Show Page @1-CEE080AB
$categoria_productos_unida->Show();
$productos_unidadesmedida->Show();
$Link1->Show();
$Report_Print->Show();
$Tpl->block_path = "";
$Tpl->Parse($BlockToParse, false);
if (!isset($main_block)) $main_block = $Tpl->GetVar($BlockToParse);
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
$main_block = CCConvertEncoding($main_block, $FileEncoding, $CCSLocales->GetFormatInfo("Encoding"));
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

<<<<<<< HEAD
//Unload Page @1-5A5C25A0
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
unset($MasterPage);
=======
//Unload Page @1-A94C3B0E
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnection1->close();
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
unset($categoria_productos_unida);
unset($productos_unidadesmedida);
unset($Tpl);
//End Unload Page


?>
