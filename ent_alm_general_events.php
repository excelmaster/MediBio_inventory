<?php
//BindEvents Method @1-70876931
function BindEvents()
{
    global $ent_alm_general1;
    global $ent_alm_general2;
    $ent_alm_general1->ent_alm_general1_TotalRecords->CCSEvents["BeforeShow"] = "ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow";
    $ent_alm_general1->ds->CCSEvents["BeforeBuildSelect"] = "ent_alm_general1_ds_BeforeBuildSelect";
    $ent_alm_general2->fecha_proceso->CCSEvents["BeforeShow"] = "ent_alm_general2_fecha_proceso_BeforeShow";
}
//End BindEvents Method

//ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow @14-788A01F9
function ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow(& $sender)
{
    $ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general1; //Compatibility
//End ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow

//Retrieve number of records @15-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow @14-1B00C780
    return $ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow;
}
//End Close ent_alm_general1_ent_alm_general1_TotalRecords_BeforeShow

//ent_alm_general1_ds_BeforeBuildSelect @6-60182E1E
function ent_alm_general1_ds_BeforeBuildSelect(& $sender)
{
    $ent_alm_general1_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general1; //Compatibility
//End ent_alm_general1_ds_BeforeBuildSelect

//Advanced Search @60-C65E19FB
    global $ent_alm_generalSearch;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_id = "";
        $f_fecha_proceso = "";
        $f_num_factura = "";
        $f_observaciones = "";
        $f_activa = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " OR ";
                if (strlen($f_fecha_proceso)) $f_fecha_proceso .= " OR ";
                if (strlen($f_num_factura)) $f_num_factura .= " OR ";
                if (strlen($f_observaciones)) $f_observaciones .= " OR ";
                if (strlen($f_activa)) $f_activa .= " OR ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_fecha_proceso .= "fecha_proceso LIKE '%" . $keyword . "%'";
                $f_num_factura .= "num_factura LIKE '%" . $keyword . "%'";
                $f_observaciones .= "observaciones LIKE '%" . $keyword . "%'";
                $f_activa .= "activa LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " AND ";
                if (strlen($f_fecha_proceso)) $f_fecha_proceso .= " AND ";
                if (strlen($f_num_factura)) $f_num_factura .= " AND ";
                if (strlen($f_observaciones)) $f_observaciones .= " AND ";
                if (strlen($f_activa)) $f_activa .= " AND ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_fecha_proceso .= "fecha_proceso LIKE '%" . $keyword . "%'";
                $f_num_factura .= "num_factura LIKE '%" . $keyword . "%'";
                $f_observaciones .= "observaciones LIKE '%" . $keyword . "%'";
                $f_activa .= "activa LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_id = "id LIKE '%" . $keyword . "%'";
            $f_fecha_proceso = "fecha_proceso LIKE '%" . $keyword . "%'";
            $f_num_factura = "num_factura LIKE '%" . $keyword . "%'";
            $f_observaciones = "observaciones LIKE '%" . $keyword . "%'";
            $f_activa = "activa LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_id . ")";
        if (strlen($f_fecha_proceso))
            $Container->DataSource->Where .= " OR (". $f_fecha_proceso .")";
        if (strlen($f_num_factura))
            $Container->DataSource->Where .= " OR (". $f_num_factura .")";
        if (strlen($f_observaciones))
            $Container->DataSource->Where .= " OR (". $f_observaciones .")";
        if (strlen($f_activa))
            $Container->DataSource->Where .= " OR (". $f_activa .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $ent_alm_generalSearch->s_keyword->SetValue("");
    }
//End Advanced Search

//Close ent_alm_general1_ds_BeforeBuildSelect @6-4B35F363
    return $ent_alm_general1_ds_BeforeBuildSelect;
}
//End Close ent_alm_general1_ds_BeforeBuildSelect

//ent_alm_general2_fecha_proceso_BeforeShow @66-974E4D43
function ent_alm_general2_fecha_proceso_BeforeShow(& $sender)
{
    $ent_alm_general2_fecha_proceso_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general2; //Compatibility
//End ent_alm_general2_fecha_proceso_BeforeShow

//Close ent_alm_general2_fecha_proceso_BeforeShow @66-41FA392E
    return $ent_alm_general2_fecha_proceso_BeforeShow;
}
//End Close ent_alm_general2_fecha_proceso_BeforeShow
?>
