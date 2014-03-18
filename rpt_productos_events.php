<?php
//BindEvents Method @1-9C14EF3F
function BindEvents()
{
    global $Report_Print;
    global $categoria_productos_unida;
    $Report_Print->CCSEvents["BeforeShow"] = "Report_Print_BeforeShow";
    $categoria_productos_unida->ds->CCSEvents["BeforeBuildSelect"] = "categoria_productos_unida_ds_BeforeBuildSelect";
}
//End BindEvents Method

<<<<<<< HEAD
<<<<<<< HEAD
//Report_Print_BeforeShow @5-6CD7E3F9
=======
//Report_Print_BeforeShow @68-6CD7E3F9
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
//Report_Print_BeforeShow @70-6CD7E3F9
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
function Report_Print_BeforeShow(& $sender)
{
    $Report_Print_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Report_Print; //Compatibility
//End Report_Print_BeforeShow

<<<<<<< HEAD
<<<<<<< HEAD
//Hide-Show Component @7-286F3E6C
=======
//Hide-Show Component @70-286F3E6C
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
//Hide-Show Component @72-286F3E6C
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
    $Parameter1 = CCGetFromGet("ViewMode", "");
    $Parameter2 = "Print";
    if (0 == CCCompareValues($Parameter1, $Parameter2, ccsText))
        $Component->Visible = false;
//End Hide-Show Component

<<<<<<< HEAD
<<<<<<< HEAD
//Close Report_Print_BeforeShow @5-0DD1CC60
=======
//Close Report_Print_BeforeShow @68-0DD1CC60
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
//Close Report_Print_BeforeShow @70-0DD1CC60
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
    return $Report_Print_BeforeShow;
}
//End Close Report_Print_BeforeShow

<<<<<<< HEAD
<<<<<<< HEAD
//categoria_productos_unida_ds_BeforeBuildSelect @8-AD0464EB
=======
//categoria_productos_unida_ds_BeforeBuildSelect @71-AD0464EB
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
//categoria_productos_unida_ds_BeforeBuildSelect @73-AD0464EB
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
function categoria_productos_unida_ds_BeforeBuildSelect(& $sender)
{
    $categoria_productos_unida_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $categoria_productos_unida; //Compatibility
//End categoria_productos_unida_ds_BeforeBuildSelect

<<<<<<< HEAD
<<<<<<< HEAD
//Advanced Search @66-E493BC17
=======
//Advanced Search @126-E493BC17
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
//Advanced Search @122-267F5800
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
    global $productos_unidadesmedida;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_name_producto = "";
<<<<<<< HEAD
=======
        $f_cantidad_producto = "";
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
        $f_descripcion_producto = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_name_producto)) $f_name_producto .= " OR ";
<<<<<<< HEAD
                if (strlen($f_descripcion_producto)) $f_descripcion_producto .= " OR ";
                $f_name_producto .= "name_producto LIKE '%" . $keyword . "%'";
=======
                if (strlen($f_cantidad_producto)) $f_cantidad_producto .= " OR ";
                if (strlen($f_descripcion_producto)) $f_descripcion_producto .= " OR ";
                $f_name_producto .= "name_producto LIKE '%" . $keyword . "%'";
                $f_cantidad_producto .= "cantidad_producto LIKE '%" . $keyword . "%'";
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
                $f_descripcion_producto .= "descripcion_producto LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_name_producto)) $f_name_producto .= " AND ";
<<<<<<< HEAD
                if (strlen($f_descripcion_producto)) $f_descripcion_producto .= " AND ";
                $f_name_producto .= "name_producto LIKE '%" . $keyword . "%'";
=======
                if (strlen($f_cantidad_producto)) $f_cantidad_producto .= " AND ";
                if (strlen($f_descripcion_producto)) $f_descripcion_producto .= " AND ";
                $f_name_producto .= "name_producto LIKE '%" . $keyword . "%'";
                $f_cantidad_producto .= "cantidad_producto LIKE '%" . $keyword . "%'";
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
                $f_descripcion_producto .= "descripcion_producto LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_name_producto = "name_producto LIKE '%" . $keyword . "%'";
<<<<<<< HEAD
=======
            $f_cantidad_producto = "cantidad_producto LIKE '%" . $keyword . "%'";
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
            $f_descripcion_producto = "descripcion_producto LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_name_producto . ")";
<<<<<<< HEAD
=======
        if (strlen($f_cantidad_producto))
            $Container->DataSource->Where .= " OR (". $f_cantidad_producto .")";
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
        if (strlen($f_descripcion_producto))
            $Container->DataSource->Where .= " OR (". $f_descripcion_producto .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $productos_unidadesmedida->s_keyword->SetValue("");
    }
//End Advanced Search

<<<<<<< HEAD
<<<<<<< HEAD
//Close categoria_productos_unida_ds_BeforeBuildSelect @8-2226510E
    return $categoria_productos_unida_ds_BeforeBuildSelect;
}
//End Close categoria_productos_unida_ds_BeforeBuildSelect


=======
//Close categoria_productos_unida_ds_BeforeBuildSelect @71-2226510E
    return $categoria_productos_unida_ds_BeforeBuildSelect;
}
//End Close categoria_productos_unida_ds_BeforeBuildSelect
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
//Close categoria_productos_unida_ds_BeforeBuildSelect @73-2226510E
    return $categoria_productos_unida_ds_BeforeBuildSelect;
}
//End Close categoria_productos_unida_ds_BeforeBuildSelect
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
?>
