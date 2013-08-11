<?php
//BindEvents Method @1-F299463A
function BindEvents()
{
    global $unidadesmedida_productos;
    $unidadesmedida_productos->unidadesmedida_productos_TotalRecords->CCSEvents["BeforeShow"] = "unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow";
    $unidadesmedida_productos->ds->CCSEvents["BeforeBuildSelect"] = "unidadesmedida_productos_ds_BeforeBuildSelect";
}
//End BindEvents Method

//unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow @82-F066C5E0
function unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow(& $sender)
{
    $unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $unidadesmedida_productos; //Compatibility
//End unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow

//Retrieve number of records @83-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow @82-5E4C76FD
    return $unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow;
}
//End Close unidadesmedida_productos_unidadesmedida_productos_TotalRecords_BeforeShow

//unidadesmedida_productos_ds_BeforeBuildSelect @68-8D5A37B7
function unidadesmedida_productos_ds_BeforeBuildSelect(& $sender)
{
    $unidadesmedida_productos_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $unidadesmedida_productos; //Compatibility
//End unidadesmedida_productos_ds_BeforeBuildSelect

//Advanced Search @116-32324D1B
    global $unidadesmedida_productos1;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_categoria_descrip = "";
        $f_name_producto = "";
        $f_cantidad_producto = "";
        $f_descripcion_producto = "";
        $f_activo = "";
        $f_descrp_unidad = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_categoria_descrip)) $f_categoria_descrip .= " OR ";
                if (strlen($f_name_producto)) $f_name_producto .= " OR ";
                if (strlen($f_cantidad_producto)) $f_cantidad_producto .= " OR ";
                if (strlen($f_descripcion_producto)) $f_descripcion_producto .= " OR ";
                if (strlen($f_activo)) $f_activo .= " OR ";
                if (strlen($f_descrp_unidad)) $f_descrp_unidad .= " OR ";
                $f_categoria_descrip .= "categoria_descrip LIKE '%" . $keyword . "%'";
                $f_name_producto .= "name_producto LIKE '%" . $keyword . "%'";
                $f_cantidad_producto .= "cantidad_producto LIKE '%" . $keyword . "%'";
                $f_descripcion_producto .= "descripcion_producto LIKE '%" . $keyword . "%'";
                $f_activo .= "activo LIKE '%" . $keyword . "%'";
                $f_descrp_unidad .= "descrp_unidad LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_categoria_descrip)) $f_categoria_descrip .= " AND ";
                if (strlen($f_name_producto)) $f_name_producto .= " AND ";
                if (strlen($f_cantidad_producto)) $f_cantidad_producto .= " AND ";
                if (strlen($f_descripcion_producto)) $f_descripcion_producto .= " AND ";
                if (strlen($f_activo)) $f_activo .= " AND ";
                if (strlen($f_descrp_unidad)) $f_descrp_unidad .= " AND ";
                $f_categoria_descrip .= "categoria_descrip LIKE '%" . $keyword . "%'";
                $f_name_producto .= "name_producto LIKE '%" . $keyword . "%'";
                $f_cantidad_producto .= "cantidad_producto LIKE '%" . $keyword . "%'";
                $f_descripcion_producto .= "descripcion_producto LIKE '%" . $keyword . "%'";
                $f_activo .= "activo LIKE '%" . $keyword . "%'";
                $f_descrp_unidad .= "descrp_unidad LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_categoria_descrip = "categoria_descrip LIKE '%" . $keyword . "%'";
            $f_name_producto = "name_producto LIKE '%" . $keyword . "%'";
            $f_cantidad_producto = "cantidad_producto LIKE '%" . $keyword . "%'";
            $f_descripcion_producto = "descripcion_producto LIKE '%" . $keyword . "%'";
            $f_activo = "activo LIKE '%" . $keyword . "%'";
            $f_descrp_unidad = "descrp_unidad LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_categoria_descrip . ")";
        if (strlen($f_name_producto))
            $Container->DataSource->Where .= " OR (". $f_name_producto .")";
        if (strlen($f_cantidad_producto))
            $Container->DataSource->Where .= " OR (". $f_cantidad_producto .")";
        if (strlen($f_descripcion_producto))
            $Container->DataSource->Where .= " OR (". $f_descripcion_producto .")";
        if (strlen($f_activo))
            $Container->DataSource->Where .= " OR (". $f_activo .")";
        if (strlen($f_descrp_unidad))
            $Container->DataSource->Where .= " OR (". $f_descrp_unidad .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $unidadesmedida_productos1->s_keyword->SetValue("");
    }
//End Advanced Search

//Close unidadesmedida_productos_ds_BeforeBuildSelect @68-435CE391
    return $unidadesmedida_productos_ds_BeforeBuildSelect;
}
//End Close unidadesmedida_productos_ds_BeforeBuildSelect
?>
