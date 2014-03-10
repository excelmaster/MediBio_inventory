<?php
//BindEvents Method @1-BA31B07A
function BindEvents()
{
    global $Report_Print;
    global $proveedores;
    $Report_Print->CCSEvents["BeforeShow"] = "Report_Print_BeforeShow";
    $proveedores->ds->CCSEvents["BeforeBuildSelect"] = "proveedores_ds_BeforeBuildSelect";
}
//End BindEvents Method

//Report_Print_BeforeShow @5-6CD7E3F9
function Report_Print_BeforeShow(& $sender)
{
    $Report_Print_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Report_Print; //Compatibility
//End Report_Print_BeforeShow

//Hide-Show Component @7-286F3E6C
    $Parameter1 = CCGetFromGet("ViewMode", "");
    $Parameter2 = "Print";
    if (0 == CCCompareValues($Parameter1, $Parameter2, ccsText))
        $Component->Visible = false;
//End Hide-Show Component

//Close Report_Print_BeforeShow @5-0DD1CC60
    return $Report_Print_BeforeShow;
}
//End Close Report_Print_BeforeShow

//proveedores_ds_BeforeBuildSelect @8-0056A3C4
function proveedores_ds_BeforeBuildSelect(& $sender)
{
    $proveedores_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $proveedores; //Compatibility
//End proveedores_ds_BeforeBuildSelect

//Advanced Search @42-13310D57
    global $proveedoresSearch;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_id = "";
        $f_razon_social = "";
        $f_nombre = "";
        $f_nit = "";
        $f_slogan = "";
        $f_direccion_1 = "";
        $f_direccion_2 = "";
        $f_direccion_3 = "";
        $f_telfijo_1 = "";
        $f_telfijo_2 = "";
        $f_telfijo_3 = "";
        $f_celular_1 = "";
        $f_celular_2 = "";
        $f_celular_3 = "";
        $f_representante_legal = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " OR ";
                if (strlen($f_razon_social)) $f_razon_social .= " OR ";
                if (strlen($f_nombre)) $f_nombre .= " OR ";
                if (strlen($f_nit)) $f_nit .= " OR ";
                if (strlen($f_slogan)) $f_slogan .= " OR ";
                if (strlen($f_direccion_1)) $f_direccion_1 .= " OR ";
                if (strlen($f_direccion_2)) $f_direccion_2 .= " OR ";
                if (strlen($f_direccion_3)) $f_direccion_3 .= " OR ";
                if (strlen($f_telfijo_1)) $f_telfijo_1 .= " OR ";
                if (strlen($f_telfijo_2)) $f_telfijo_2 .= " OR ";
                if (strlen($f_telfijo_3)) $f_telfijo_3 .= " OR ";
                if (strlen($f_celular_1)) $f_celular_1 .= " OR ";
                if (strlen($f_celular_2)) $f_celular_2 .= " OR ";
                if (strlen($f_celular_3)) $f_celular_3 .= " OR ";
                if (strlen($f_representante_legal)) $f_representante_legal .= " OR ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_razon_social .= "razon_social LIKE '%" . $keyword . "%'";
                $f_nombre .= "nombre LIKE '%" . $keyword . "%'";
                $f_nit .= "nit LIKE '%" . $keyword . "%'";
                $f_slogan .= "slogan LIKE '%" . $keyword . "%'";
                $f_direccion_1 .= "direccion_1 LIKE '%" . $keyword . "%'";
                $f_direccion_2 .= "direccion_2 LIKE '%" . $keyword . "%'";
                $f_direccion_3 .= "direccion_3 LIKE '%" . $keyword . "%'";
                $f_telfijo_1 .= "telfijo_1 LIKE '%" . $keyword . "%'";
                $f_telfijo_2 .= "telfijo_2 LIKE '%" . $keyword . "%'";
                $f_telfijo_3 .= "telfijo_3 LIKE '%" . $keyword . "%'";
                $f_celular_1 .= "celular_1 LIKE '%" . $keyword . "%'";
                $f_celular_2 .= "celular_2 LIKE '%" . $keyword . "%'";
                $f_celular_3 .= "celular_3 LIKE '%" . $keyword . "%'";
                $f_representante_legal .= "representante_legal LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " AND ";
                if (strlen($f_razon_social)) $f_razon_social .= " AND ";
                if (strlen($f_nombre)) $f_nombre .= " AND ";
                if (strlen($f_nit)) $f_nit .= " AND ";
                if (strlen($f_slogan)) $f_slogan .= " AND ";
                if (strlen($f_direccion_1)) $f_direccion_1 .= " AND ";
                if (strlen($f_direccion_2)) $f_direccion_2 .= " AND ";
                if (strlen($f_direccion_3)) $f_direccion_3 .= " AND ";
                if (strlen($f_telfijo_1)) $f_telfijo_1 .= " AND ";
                if (strlen($f_telfijo_2)) $f_telfijo_2 .= " AND ";
                if (strlen($f_telfijo_3)) $f_telfijo_3 .= " AND ";
                if (strlen($f_celular_1)) $f_celular_1 .= " AND ";
                if (strlen($f_celular_2)) $f_celular_2 .= " AND ";
                if (strlen($f_celular_3)) $f_celular_3 .= " AND ";
                if (strlen($f_representante_legal)) $f_representante_legal .= " AND ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_razon_social .= "razon_social LIKE '%" . $keyword . "%'";
                $f_nombre .= "nombre LIKE '%" . $keyword . "%'";
                $f_nit .= "nit LIKE '%" . $keyword . "%'";
                $f_slogan .= "slogan LIKE '%" . $keyword . "%'";
                $f_direccion_1 .= "direccion_1 LIKE '%" . $keyword . "%'";
                $f_direccion_2 .= "direccion_2 LIKE '%" . $keyword . "%'";
                $f_direccion_3 .= "direccion_3 LIKE '%" . $keyword . "%'";
                $f_telfijo_1 .= "telfijo_1 LIKE '%" . $keyword . "%'";
                $f_telfijo_2 .= "telfijo_2 LIKE '%" . $keyword . "%'";
                $f_telfijo_3 .= "telfijo_3 LIKE '%" . $keyword . "%'";
                $f_celular_1 .= "celular_1 LIKE '%" . $keyword . "%'";
                $f_celular_2 .= "celular_2 LIKE '%" . $keyword . "%'";
                $f_celular_3 .= "celular_3 LIKE '%" . $keyword . "%'";
                $f_representante_legal .= "representante_legal LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_id = "id LIKE '%" . $keyword . "%'";
            $f_razon_social = "razon_social LIKE '%" . $keyword . "%'";
            $f_nombre = "nombre LIKE '%" . $keyword . "%'";
            $f_nit = "nit LIKE '%" . $keyword . "%'";
            $f_slogan = "slogan LIKE '%" . $keyword . "%'";
            $f_direccion_1 = "direccion_1 LIKE '%" . $keyword . "%'";
            $f_direccion_2 = "direccion_2 LIKE '%" . $keyword . "%'";
            $f_direccion_3 = "direccion_3 LIKE '%" . $keyword . "%'";
            $f_telfijo_1 = "telfijo_1 LIKE '%" . $keyword . "%'";
            $f_telfijo_2 = "telfijo_2 LIKE '%" . $keyword . "%'";
            $f_telfijo_3 = "telfijo_3 LIKE '%" . $keyword . "%'";
            $f_celular_1 = "celular_1 LIKE '%" . $keyword . "%'";
            $f_celular_2 = "celular_2 LIKE '%" . $keyword . "%'";
            $f_celular_3 = "celular_3 LIKE '%" . $keyword . "%'";
            $f_representante_legal = "representante_legal LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_id . ")";
        if (strlen($f_razon_social))
            $Container->DataSource->Where .= " OR (". $f_razon_social .")";
        if (strlen($f_nombre))
            $Container->DataSource->Where .= " OR (". $f_nombre .")";
        if (strlen($f_nit))
            $Container->DataSource->Where .= " OR (". $f_nit .")";
        if (strlen($f_slogan))
            $Container->DataSource->Where .= " OR (". $f_slogan .")";
        if (strlen($f_direccion_1))
            $Container->DataSource->Where .= " OR (". $f_direccion_1 .")";
        if (strlen($f_direccion_2))
            $Container->DataSource->Where .= " OR (". $f_direccion_2 .")";
        if (strlen($f_direccion_3))
            $Container->DataSource->Where .= " OR (". $f_direccion_3 .")";
        if (strlen($f_telfijo_1))
            $Container->DataSource->Where .= " OR (". $f_telfijo_1 .")";
        if (strlen($f_telfijo_2))
            $Container->DataSource->Where .= " OR (". $f_telfijo_2 .")";
        if (strlen($f_telfijo_3))
            $Container->DataSource->Where .= " OR (". $f_telfijo_3 .")";
        if (strlen($f_celular_1))
            $Container->DataSource->Where .= " OR (". $f_celular_1 .")";
        if (strlen($f_celular_2))
            $Container->DataSource->Where .= " OR (". $f_celular_2 .")";
        if (strlen($f_celular_3))
            $Container->DataSource->Where .= " OR (". $f_celular_3 .")";
        if (strlen($f_representante_legal))
            $Container->DataSource->Where .= " OR (". $f_representante_legal .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $proveedoresSearch->s_keyword->SetValue("");
    }
//End Advanced Search

//Close proveedores_ds_BeforeBuildSelect @8-8B625380
    return $proveedores_ds_BeforeBuildSelect;
}
//End Close proveedores_ds_BeforeBuildSelect


?>
