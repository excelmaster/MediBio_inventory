<?php
//BindEvents Method @1-8BF3F266
function BindEvents()
{
    global $proveedores;
    $proveedores->proveedores_TotalRecords->CCSEvents["BeforeShow"] = "proveedores_proveedores_TotalRecords_BeforeShow";
    $proveedores->ds->CCSEvents["BeforeBuildSelect"] = "proveedores_ds_BeforeBuildSelect";
}
//End BindEvents Method

//proveedores_proveedores_TotalRecords_BeforeShow @10-EDD874F1
function proveedores_proveedores_TotalRecords_BeforeShow(& $sender)
{
    $proveedores_proveedores_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $proveedores; //Compatibility
//End proveedores_proveedores_TotalRecords_BeforeShow

//Retrieve number of records @11-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close proveedores_proveedores_TotalRecords_BeforeShow @10-BE792148
    return $proveedores_proveedores_TotalRecords_BeforeShow;
}
//End Close proveedores_proveedores_TotalRecords_BeforeShow

//proveedores_ds_BeforeBuildSelect @6-0056A3C4
function proveedores_ds_BeforeBuildSelect(& $sender)
{
    $proveedores_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $proveedores; //Compatibility
//End proveedores_ds_BeforeBuildSelect

//Advanced Search @40-13310D57
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

//Close proveedores_ds_BeforeBuildSelect @6-8B625380
    return $proveedores_ds_BeforeBuildSelect;
}
//End Close proveedores_ds_BeforeBuildSelect


?>
