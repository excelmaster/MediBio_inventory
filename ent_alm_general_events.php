<?php
<<<<<<< HEAD
//BindEvents Method @1-59065039
=======
<<<<<<< HEAD
//BindEvents Method @1-2CEC50F1
function BindEvents()
{
    global $ent_almc_general;
    global $detail_entalmgeneral;
    $ent_almc_general->Hide_Panel->CCSEvents["BeforeShow"] = "ent_almc_general_Hide_Panel_BeforeShow";
    $ent_almc_general->ds->CCSEvents["BeforeExecuteInsert"] = "ent_almc_general_ds_BeforeExecuteInsert";
    $ent_almc_general->ds->CCSEvents["AfterExecuteInsert"] = "ent_almc_general_ds_AfterExecuteInsert";
    $ent_almc_general->ds->CCSEvents["AfterExecuteUpdate"] = "ent_almc_general_ds_AfterExecuteUpdate";
    $detail_entalmgeneral->detail_entalmgeneral_TotalRecords->CCSEvents["BeforeShow"] = "detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow";
    $detail_entalmgeneral->CCSEvents["BeforeShow"] = "detail_entalmgeneral_BeforeShow";
}
//End BindEvents Method

//ent_almc_general_Hide_Panel_BeforeShow @8-6C22726C
function ent_almc_general_Hide_Panel_BeforeShow(& $sender)
{
    $ent_almc_general_Hide_Panel_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_Hide_Panel_BeforeShow

//Hide-Show Component @9-BE2455A5
    $Parameter1 = 1;
    $Parameter2 = 1;
    if (0 == CCCompareValues($Parameter1, $Parameter2, ccsInteger))
        $Component->Visible = false;
//End Hide-Show Component

//Close ent_almc_general_Hide_Panel_BeforeShow @8-44FEF498
    return $ent_almc_general_Hide_Panel_BeforeShow;
}
//End Close ent_almc_general_Hide_Panel_BeforeShow

//ent_almc_general_ds_BeforeExecuteInsert @6-F12A376C
function ent_almc_general_ds_BeforeExecuteInsert(& $sender)
{
    $ent_almc_general_ds_BeforeExecuteInsert = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_ds_BeforeExecuteInsert

//Master Detail Validate @44-C09BCE5E
    global $detail_entalmgeneral, $CCSLocales;
    if (!CCInitializeDetails($detail_entalmgeneral, "EditableGrid")) {
        $Component->DataSource->Errors->addError($CCSLocales->GetText("CCS_MasterDetailError_DetailsValidateFail"));
    }
//End Master Detail Validate

//Close ent_almc_general_ds_BeforeExecuteInsert @6-93A92C9B
    return $ent_almc_general_ds_BeforeExecuteInsert;
}
//End Close ent_almc_general_ds_BeforeExecuteInsert

//ent_almc_general_ds_AfterExecuteInsert @6-7FE6F9DD
function ent_almc_general_ds_AfterExecuteInsert(& $sender)
{
    $ent_almc_general_ds_AfterExecuteInsert = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_ds_AfterExecuteInsert

//Master Detail Insert @45-8E882D46
    global $detail_entalmgeneral;
    if ($ent_almc_general->DataSource->Errors->Count() == 0) {
        $ent_almc_general->DataSource->query("SELECT MAX() FROM ent_almc_general");
        $ent_almc_general->DataSource->next_record();
        $last_id = $ent_almc_general->DataSource->f(0);
        $_GET["id"] = $last_id;
    }
//End Master Detail Insert

//Close ent_almc_general_ds_AfterExecuteInsert @6-F5EEA851
    return $ent_almc_general_ds_AfterExecuteInsert;
}
//End Close ent_almc_general_ds_AfterExecuteInsert

//ent_almc_general_ds_AfterExecuteUpdate @6-FB0B5D5C
function ent_almc_general_ds_AfterExecuteUpdate(& $sender)
{
    $ent_almc_general_ds_AfterExecuteUpdate = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_ds_AfterExecuteUpdate

//Master Detail Update @46-5817F65C
    global $detail_entalmgeneral;
    CCInitializeDetails($detail_entalmgeneral, "EditableGrid");
//End Master Detail Update

//Close ent_almc_general_ds_AfterExecuteUpdate @6-3AC769DE
    return $ent_almc_general_ds_AfterExecuteUpdate;
}
//End Close ent_almc_general_ds_AfterExecuteUpdate

//detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow @22-68F5CF18
function detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow(& $sender)
{
    $detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $detail_entalmgeneral; //Compatibility
//End detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow

//Retrieve number of records @23-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow @22-9E1B8B19
    return $detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow;
}
//End Close detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow

//detail_entalmgeneral_BeforeShow @19-4F43D67E
function detail_entalmgeneral_BeforeShow(& $sender)
{
    $detail_entalmgeneral_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $detail_entalmgeneral; //Compatibility
//End detail_entalmgeneral_BeforeShow

//Hide-Show Component @32-16FE48D1
    $Parameter1 = 1;
    $Parameter2 = 1;
    if (0 == CCCompareValues($Parameter1, $Parameter2, ccsInteger))
        $Component->Button_Submit->Visible = false;
//End Hide-Show Component

//Close detail_entalmgeneral_BeforeShow @19-66CD97B3
    return $detail_entalmgeneral_BeforeShow;
}
//End Close detail_entalmgeneral_BeforeShow


=======
//BindEvents Method @1-616B61C5
>>>>>>> 0d9d85a9b3ba8ba0f7f763b55455aa47c1a421ab
function BindEvents()
{
    global $ent_alm_general1;
    $ent_alm_general1->ent_alm_general1_TotalRecords->CCSEvents["BeforeShow"] = "ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow";
    $ent_alm_general1->CCSEvents["BeforeShowRow"] = "ent_alm_general1_BeforeShowRow";
    $ent_alm_general1->ds->CCSEvents["BeforeBuildSelect"] = "ent_alm_general1_ds_BeforeBuildSelect";
}
//End BindEvents Method

//ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow @80-788A01F9
function ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow(& $sender)
{
    $ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general1; //Compatibility
//End ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow

//Retrieve number of records @81-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow @80-1B00C780
    return $ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow;
}
//End Close ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow

//ent_alm_general1_BeforeShowRow @76-EB1420A7
function ent_alm_general1_BeforeShowRow(& $sender)
{
    $ent_alm_general1_BeforeShowRow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general1; //Compatibility
//End ent_alm_general1_BeforeShowRow

//Set Row Style @92-78BECB7D
    $styles = array("RowCompact", "AltRowCompact");
    if (count($styles)) {
        $Style = $styles[($Component->RowNumber - 1) % count($styles)];
        if (strlen($Style) && !strpos($Style, "="))
            $Style = (strpos($Style, ":") ? 'style="' : 'class="'). $Style . '"';
        $Component->Attributes->SetValue("rowStyle", $Style);
    }
//End Set Row Style

//Close ent_alm_general1_BeforeShowRow @76-0C19DCF0
    return $ent_alm_general1_BeforeShowRow;
}
//End Close ent_alm_general1_BeforeShowRow

//ent_alm_general1_ds_BeforeBuildSelect @76-60182E1E
function ent_alm_general1_ds_BeforeBuildSelect(& $sender)
{
    $ent_alm_general1_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general1; //Compatibility
//End ent_alm_general1_ds_BeforeBuildSelect

//Advanced Search @115-534F6FD1
    global $ent_alm_generalSearch;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_id = "";
        $f_fecha_proceso = "";
        $f_Orden_compra = "";
        $f_observaciones = "";
        $f_activa = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " OR ";
                if (strlen($f_fecha_proceso)) $f_fecha_proceso .= " OR ";
                if (strlen($f_Orden_compra)) $f_Orden_compra .= " OR ";
                if (strlen($f_observaciones)) $f_observaciones .= " OR ";
                if (strlen($f_activa)) $f_activa .= " OR ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_fecha_proceso .= "fecha_proceso LIKE '%" . $keyword . "%'";
                $f_Orden_compra .= "Orden_compra LIKE '%" . $keyword . "%'";
                $f_observaciones .= "observaciones LIKE '%" . $keyword . "%'";
                $f_activa .= "activa LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " AND ";
                if (strlen($f_fecha_proceso)) $f_fecha_proceso .= " AND ";
                if (strlen($f_Orden_compra)) $f_Orden_compra .= " AND ";
                if (strlen($f_observaciones)) $f_observaciones .= " AND ";
                if (strlen($f_activa)) $f_activa .= " AND ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_fecha_proceso .= "fecha_proceso LIKE '%" . $keyword . "%'";
                $f_Orden_compra .= "Orden_compra LIKE '%" . $keyword . "%'";
                $f_observaciones .= "observaciones LIKE '%" . $keyword . "%'";
                $f_activa .= "activa LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_id = "id LIKE '%" . $keyword . "%'";
            $f_fecha_proceso = "fecha_proceso LIKE '%" . $keyword . "%'";
            $f_Orden_compra = "Orden_compra LIKE '%" . $keyword . "%'";
            $f_observaciones = "observaciones LIKE '%" . $keyword . "%'";
            $f_activa = "activa LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_id . ")";
        if (strlen($f_fecha_proceso))
            $Container->DataSource->Where .= " OR (". $f_fecha_proceso .")";
        if (strlen($f_Orden_compra))
            $Container->DataSource->Where .= " OR (". $f_Orden_compra .")";
        if (strlen($f_observaciones))
            $Container->DataSource->Where .= " OR (". $f_observaciones .")";
        if (strlen($f_activa))
            $Container->DataSource->Where .= " OR (". $f_activa .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $ent_alm_generalSearch->s_keyword->SetValue("");
    }
//End Advanced Search

//Close ent_alm_general1_ds_BeforeBuildSelect @76-4B35F363
    return $ent_alm_general1_ds_BeforeBuildSelect;
}
//End Close ent_alm_general1_ds_BeforeBuildSelect
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
?>
