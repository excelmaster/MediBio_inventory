<?php
//BindEvents Method @1-938386DC
function BindEvents()
{
    global $categoria_productos;
    global $CCSEvents;
    $categoria_productos->categoria_productos_TotalRecords->CCSEvents["BeforeShow"] = "categoria_productos_categoria_productos_TotalRecords_BeforeShow";
    $categoria_productos->ds->CCSEvents["BeforeBuildSelect"] = "categoria_productos_ds_BeforeBuildSelect";
    $CCSEvents["AfterInitialize"] = "Page_AfterInitialize";
}
//End BindEvents Method

//categoria_productos_categoria_productos_TotalRecords_BeforeShow @12-5FDDDE87
function categoria_productos_categoria_productos_TotalRecords_BeforeShow(& $sender)
{
    $categoria_productos_categoria_productos_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $categoria_productos; //Compatibility
//End categoria_productos_categoria_productos_TotalRecords_BeforeShow

//Retrieve number of records @13-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close categoria_productos_categoria_productos_TotalRecords_BeforeShow @12-C65B1FBE
    return $categoria_productos_categoria_productos_TotalRecords_BeforeShow;
}
//End Close categoria_productos_categoria_productos_TotalRecords_BeforeShow

//categoria_productos_ds_BeforeBuildSelect @8-3A93EA83
function categoria_productos_ds_BeforeBuildSelect(& $sender)
{
    $categoria_productos_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $categoria_productos; //Compatibility
//End categoria_productos_ds_BeforeBuildSelect

//Advanced Search @50-6A70B7E3
    global $categoria_productosSearch;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_id = "";
        $f_categoria_descrip = "";
        $f_unidad_medida_id = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " OR ";
                if (strlen($f_categoria_descrip)) $f_categoria_descrip .= " OR ";
                if (strlen($f_unidad_medida_id)) $f_unidad_medida_id .= " OR ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_categoria_descrip .= "categoria_descrip LIKE '%" . $keyword . "%'";
                $f_unidad_medida_id .= "unidad_medida_id LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " AND ";
                if (strlen($f_categoria_descrip)) $f_categoria_descrip .= " AND ";
                if (strlen($f_unidad_medida_id)) $f_unidad_medida_id .= " AND ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_categoria_descrip .= "categoria_descrip LIKE '%" . $keyword . "%'";
                $f_unidad_medida_id .= "unidad_medida_id LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_id = "id LIKE '%" . $keyword . "%'";
            $f_categoria_descrip = "categoria_descrip LIKE '%" . $keyword . "%'";
            $f_unidad_medida_id = "unidad_medida_id LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_id . ")";
        if (strlen($f_categoria_descrip))
            $Container->DataSource->Where .= " OR (". $f_categoria_descrip .")";
        if (strlen($f_unidad_medida_id))
            $Container->DataSource->Where .= " OR (". $f_unidad_medida_id .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $categoria_productosSearch->s_keyword->SetValue("");
    }
//End Advanced Search

//Close categoria_productos_ds_BeforeBuildSelect @8-95D74BB0
    return $categoria_productos_ds_BeforeBuildSelect;
}
//End Close categoria_productos_ds_BeforeBuildSelect

//Page_AfterInitialize @1-1FDF9C45
function Page_AfterInitialize(& $sender)
{
    $Page_AfterInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $catprod_mant; //Compatibility
//End Page_AfterInitialize

//Logout @62-2B09296B
    if(strlen(CCGetParam("Logout", ""))) 
    {
        CCLogoutUser();
        CCSetCookie("invt_bmLogin", "");
        global $Redirect;
        $Redirect = "catprod_mant.php";
    }
//End Logout

//Close Page_AfterInitialize @1-379D319D
    return $Page_AfterInitialize;
}
//End Close Page_AfterInitialize


?>
