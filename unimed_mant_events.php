<?php
//BindEvents Method @1-B49FFDD1
function BindEvents()
{
    global $unidadesmedida;
    global $CCSEvents;
    $unidadesmedida->unidadesmedida_TotalRecords->CCSEvents["BeforeShow"] = "unidadesmedida_unidadesmedida_TotalRecords_BeforeShow";
    $unidadesmedida->ds->CCSEvents["BeforeBuildSelect"] = "unidadesmedida_ds_BeforeBuildSelect";
    $CCSEvents["AfterInitialize"] = "Page_AfterInitialize";
}
//End BindEvents Method

//unidadesmedida_unidadesmedida_TotalRecords_BeforeShow @10-04CE86AB
function unidadesmedida_unidadesmedida_TotalRecords_BeforeShow(& $sender)
{
    $unidadesmedida_unidadesmedida_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $unidadesmedida; //Compatibility
//End unidadesmedida_unidadesmedida_TotalRecords_BeforeShow

//Retrieve number of records @11-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close unidadesmedida_unidadesmedida_TotalRecords_BeforeShow @10-169CF838
    return $unidadesmedida_unidadesmedida_TotalRecords_BeforeShow;
}
//End Close unidadesmedida_unidadesmedida_TotalRecords_BeforeShow

//unidadesmedida_ds_BeforeBuildSelect @6-9685732A
function unidadesmedida_ds_BeforeBuildSelect(& $sender)
{
    $unidadesmedida_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $unidadesmedida; //Compatibility
//End unidadesmedida_ds_BeforeBuildSelect

//Advanced Search @48-C353DCEE
    global $unidadesmedidaSearch;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_id = "";
        $f_descrp_unidad = "";
        $f_obsv_unidad = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " OR ";
                if (strlen($f_descrp_unidad)) $f_descrp_unidad .= " OR ";
                if (strlen($f_obsv_unidad)) $f_obsv_unidad .= " OR ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_descrp_unidad .= "descrp_unidad LIKE '%" . $keyword . "%'";
                $f_obsv_unidad .= "obsv_unidad LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " AND ";
                if (strlen($f_descrp_unidad)) $f_descrp_unidad .= " AND ";
                if (strlen($f_obsv_unidad)) $f_obsv_unidad .= " AND ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_descrp_unidad .= "descrp_unidad LIKE '%" . $keyword . "%'";
                $f_obsv_unidad .= "obsv_unidad LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_id = "id LIKE '%" . $keyword . "%'";
            $f_descrp_unidad = "descrp_unidad LIKE '%" . $keyword . "%'";
            $f_obsv_unidad = "obsv_unidad LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_id . ")";
        if (strlen($f_descrp_unidad))
            $Container->DataSource->Where .= " OR (". $f_descrp_unidad .")";
        if (strlen($f_obsv_unidad))
            $Container->DataSource->Where .= " OR (". $f_obsv_unidad .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $unidadesmedidaSearch->s_keyword->SetValue("");
    }
//End Advanced Search

//Close unidadesmedida_ds_BeforeBuildSelect @6-31D48BFE
    return $unidadesmedida_ds_BeforeBuildSelect;
}
//End Close unidadesmedida_ds_BeforeBuildSelect

//Page_AfterInitialize @1-352021A9
function Page_AfterInitialize(& $sender)
{
    $Page_AfterInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $unimed_mant; //Compatibility
//End Page_AfterInitialize

//Logout @53-C52B4B67
    if(strlen(CCGetParam("Logout", ""))) 
    {
        CCLogoutUser();
        CCSetCookie("invt_bmLogin", "");
        global $Redirect;
        $Redirect = "unimed_mant.php";
    }
//End Logout

//Close Page_AfterInitialize @1-379D319D
    return $Page_AfterInitialize;
}
//End Close Page_AfterInitialize


?>
