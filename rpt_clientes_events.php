<?php
//BindEvents Method @1-6A41133D
function BindEvents()
{
    global $Report_Print;
    global $clientes;
    $Report_Print->CCSEvents["BeforeShow"] = "Report_Print_BeforeShow";
    $clientes->ds->CCSEvents["BeforeBuildSelect"] = "clientes_ds_BeforeBuildSelect";
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

//clientes_ds_BeforeBuildSelect @8-0892787C
function clientes_ds_BeforeBuildSelect(& $sender)
{
    $clientes_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $clientes; //Compatibility
//End clientes_ds_BeforeBuildSelect

//Advanced Search @41-4A95BCF4
    global $clientesSearch;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_id = "";
        $f_prinombre = "";
        $f_demasnombres = "";
        $f_priapellido = "";
        $f_segapellido = "";
        $f_tipo_documento = "";
        $f_num_documento = "";
        $f_lugar_nacimiento = "";
        $f_fecha_nacimiento = "";
        $f_lugar_residencia = "";
        $f_direccion_residencia = "";
        $f_telfijo_cliente_1 = "";
        $f_telfijo_cliente_2 = "";
        $f_telfijo_cliente_3 = "";
        $f_celular_cliente_1 = "";
        $f_celular_cliente_2 = "";
        $f_celular_cliente_3 = "";
        $f_email_cliente_1 = "";
        $f_email_cliente_2 = "";
        $f_email_cliente_3 = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " OR ";
                if (strlen($f_prinombre)) $f_prinombre .= " OR ";
                if (strlen($f_demasnombres)) $f_demasnombres .= " OR ";
                if (strlen($f_priapellido)) $f_priapellido .= " OR ";
                if (strlen($f_segapellido)) $f_segapellido .= " OR ";
                if (strlen($f_tipo_documento)) $f_tipo_documento .= " OR ";
                if (strlen($f_num_documento)) $f_num_documento .= " OR ";
                if (strlen($f_lugar_nacimiento)) $f_lugar_nacimiento .= " OR ";
                if (strlen($f_fecha_nacimiento)) $f_fecha_nacimiento .= " OR ";
                if (strlen($f_lugar_residencia)) $f_lugar_residencia .= " OR ";
                if (strlen($f_direccion_residencia)) $f_direccion_residencia .= " OR ";
                if (strlen($f_telfijo_cliente_1)) $f_telfijo_cliente_1 .= " OR ";
                if (strlen($f_telfijo_cliente_2)) $f_telfijo_cliente_2 .= " OR ";
                if (strlen($f_telfijo_cliente_3)) $f_telfijo_cliente_3 .= " OR ";
                if (strlen($f_celular_cliente_1)) $f_celular_cliente_1 .= " OR ";
                if (strlen($f_celular_cliente_2)) $f_celular_cliente_2 .= " OR ";
                if (strlen($f_celular_cliente_3)) $f_celular_cliente_3 .= " OR ";
                if (strlen($f_email_cliente_1)) $f_email_cliente_1 .= " OR ";
                if (strlen($f_email_cliente_2)) $f_email_cliente_2 .= " OR ";
                if (strlen($f_email_cliente_3)) $f_email_cliente_3 .= " OR ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_prinombre .= "prinombre LIKE '%" . $keyword . "%'";
                $f_demasnombres .= "demasnombres LIKE '%" . $keyword . "%'";
                $f_priapellido .= "priapellido LIKE '%" . $keyword . "%'";
                $f_segapellido .= "segapellido LIKE '%" . $keyword . "%'";
                $f_tipo_documento .= "tipo_documento LIKE '%" . $keyword . "%'";
                $f_num_documento .= "num_documento LIKE '%" . $keyword . "%'";
                $f_lugar_nacimiento .= "lugar_nacimiento LIKE '%" . $keyword . "%'";
                $f_fecha_nacimiento .= "fecha_nacimiento LIKE '%" . $keyword . "%'";
                $f_lugar_residencia .= "lugar_residencia LIKE '%" . $keyword . "%'";
                $f_direccion_residencia .= "direccion_residencia LIKE '%" . $keyword . "%'";
                $f_telfijo_cliente_1 .= "telfijo_cliente_1 LIKE '%" . $keyword . "%'";
                $f_telfijo_cliente_2 .= "telfijo_cliente_2 LIKE '%" . $keyword . "%'";
                $f_telfijo_cliente_3 .= "telfijo_cliente_3 LIKE '%" . $keyword . "%'";
                $f_celular_cliente_1 .= "celular_cliente_1 LIKE '%" . $keyword . "%'";
                $f_celular_cliente_2 .= "celular_cliente_2 LIKE '%" . $keyword . "%'";
                $f_celular_cliente_3 .= "celular_cliente_3 LIKE '%" . $keyword . "%'";
                $f_email_cliente_1 .= "email_cliente_1 LIKE '%" . $keyword . "%'";
                $f_email_cliente_2 .= "email_cliente_2 LIKE '%" . $keyword . "%'";
                $f_email_cliente_3 .= "email_cliente_3 LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_id)) $f_id .= " AND ";
                if (strlen($f_prinombre)) $f_prinombre .= " AND ";
                if (strlen($f_demasnombres)) $f_demasnombres .= " AND ";
                if (strlen($f_priapellido)) $f_priapellido .= " AND ";
                if (strlen($f_segapellido)) $f_segapellido .= " AND ";
                if (strlen($f_tipo_documento)) $f_tipo_documento .= " AND ";
                if (strlen($f_num_documento)) $f_num_documento .= " AND ";
                if (strlen($f_lugar_nacimiento)) $f_lugar_nacimiento .= " AND ";
                if (strlen($f_fecha_nacimiento)) $f_fecha_nacimiento .= " AND ";
                if (strlen($f_lugar_residencia)) $f_lugar_residencia .= " AND ";
                if (strlen($f_direccion_residencia)) $f_direccion_residencia .= " AND ";
                if (strlen($f_telfijo_cliente_1)) $f_telfijo_cliente_1 .= " AND ";
                if (strlen($f_telfijo_cliente_2)) $f_telfijo_cliente_2 .= " AND ";
                if (strlen($f_telfijo_cliente_3)) $f_telfijo_cliente_3 .= " AND ";
                if (strlen($f_celular_cliente_1)) $f_celular_cliente_1 .= " AND ";
                if (strlen($f_celular_cliente_2)) $f_celular_cliente_2 .= " AND ";
                if (strlen($f_celular_cliente_3)) $f_celular_cliente_3 .= " AND ";
                if (strlen($f_email_cliente_1)) $f_email_cliente_1 .= " AND ";
                if (strlen($f_email_cliente_2)) $f_email_cliente_2 .= " AND ";
                if (strlen($f_email_cliente_3)) $f_email_cliente_3 .= " AND ";
                $f_id .= "id LIKE '%" . $keyword . "%'";
                $f_prinombre .= "prinombre LIKE '%" . $keyword . "%'";
                $f_demasnombres .= "demasnombres LIKE '%" . $keyword . "%'";
                $f_priapellido .= "priapellido LIKE '%" . $keyword . "%'";
                $f_segapellido .= "segapellido LIKE '%" . $keyword . "%'";
                $f_tipo_documento .= "tipo_documento LIKE '%" . $keyword . "%'";
                $f_num_documento .= "num_documento LIKE '%" . $keyword . "%'";
                $f_lugar_nacimiento .= "lugar_nacimiento LIKE '%" . $keyword . "%'";
                $f_fecha_nacimiento .= "fecha_nacimiento LIKE '%" . $keyword . "%'";
                $f_lugar_residencia .= "lugar_residencia LIKE '%" . $keyword . "%'";
                $f_direccion_residencia .= "direccion_residencia LIKE '%" . $keyword . "%'";
                $f_telfijo_cliente_1 .= "telfijo_cliente_1 LIKE '%" . $keyword . "%'";
                $f_telfijo_cliente_2 .= "telfijo_cliente_2 LIKE '%" . $keyword . "%'";
                $f_telfijo_cliente_3 .= "telfijo_cliente_3 LIKE '%" . $keyword . "%'";
                $f_celular_cliente_1 .= "celular_cliente_1 LIKE '%" . $keyword . "%'";
                $f_celular_cliente_2 .= "celular_cliente_2 LIKE '%" . $keyword . "%'";
                $f_celular_cliente_3 .= "celular_cliente_3 LIKE '%" . $keyword . "%'";
                $f_email_cliente_1 .= "email_cliente_1 LIKE '%" . $keyword . "%'";
                $f_email_cliente_2 .= "email_cliente_2 LIKE '%" . $keyword . "%'";
                $f_email_cliente_3 .= "email_cliente_3 LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_id = "id LIKE '%" . $keyword . "%'";
            $f_prinombre = "prinombre LIKE '%" . $keyword . "%'";
            $f_demasnombres = "demasnombres LIKE '%" . $keyword . "%'";
            $f_priapellido = "priapellido LIKE '%" . $keyword . "%'";
            $f_segapellido = "segapellido LIKE '%" . $keyword . "%'";
            $f_tipo_documento = "tipo_documento LIKE '%" . $keyword . "%'";
            $f_num_documento = "num_documento LIKE '%" . $keyword . "%'";
            $f_lugar_nacimiento = "lugar_nacimiento LIKE '%" . $keyword . "%'";
            $f_fecha_nacimiento = "fecha_nacimiento LIKE '%" . $keyword . "%'";
            $f_lugar_residencia = "lugar_residencia LIKE '%" . $keyword . "%'";
            $f_direccion_residencia = "direccion_residencia LIKE '%" . $keyword . "%'";
            $f_telfijo_cliente_1 = "telfijo_cliente_1 LIKE '%" . $keyword . "%'";
            $f_telfijo_cliente_2 = "telfijo_cliente_2 LIKE '%" . $keyword . "%'";
            $f_telfijo_cliente_3 = "telfijo_cliente_3 LIKE '%" . $keyword . "%'";
            $f_celular_cliente_1 = "celular_cliente_1 LIKE '%" . $keyword . "%'";
            $f_celular_cliente_2 = "celular_cliente_2 LIKE '%" . $keyword . "%'";
            $f_celular_cliente_3 = "celular_cliente_3 LIKE '%" . $keyword . "%'";
            $f_email_cliente_1 = "email_cliente_1 LIKE '%" . $keyword . "%'";
            $f_email_cliente_2 = "email_cliente_2 LIKE '%" . $keyword . "%'";
            $f_email_cliente_3 = "email_cliente_3 LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_id . ")";
        if (strlen($f_prinombre))
            $Container->DataSource->Where .= " OR (". $f_prinombre .")";
        if (strlen($f_demasnombres))
            $Container->DataSource->Where .= " OR (". $f_demasnombres .")";
        if (strlen($f_priapellido))
            $Container->DataSource->Where .= " OR (". $f_priapellido .")";
        if (strlen($f_segapellido))
            $Container->DataSource->Where .= " OR (". $f_segapellido .")";
        if (strlen($f_tipo_documento))
            $Container->DataSource->Where .= " OR (". $f_tipo_documento .")";
        if (strlen($f_num_documento))
            $Container->DataSource->Where .= " OR (". $f_num_documento .")";
        if (strlen($f_lugar_nacimiento))
            $Container->DataSource->Where .= " OR (". $f_lugar_nacimiento .")";
        if (strlen($f_fecha_nacimiento))
            $Container->DataSource->Where .= " OR (". $f_fecha_nacimiento .")";
        if (strlen($f_lugar_residencia))
            $Container->DataSource->Where .= " OR (". $f_lugar_residencia .")";
        if (strlen($f_direccion_residencia))
            $Container->DataSource->Where .= " OR (". $f_direccion_residencia .")";
        if (strlen($f_telfijo_cliente_1))
            $Container->DataSource->Where .= " OR (". $f_telfijo_cliente_1 .")";
        if (strlen($f_telfijo_cliente_2))
            $Container->DataSource->Where .= " OR (". $f_telfijo_cliente_2 .")";
        if (strlen($f_telfijo_cliente_3))
            $Container->DataSource->Where .= " OR (". $f_telfijo_cliente_3 .")";
        if (strlen($f_celular_cliente_1))
            $Container->DataSource->Where .= " OR (". $f_celular_cliente_1 .")";
        if (strlen($f_celular_cliente_2))
            $Container->DataSource->Where .= " OR (". $f_celular_cliente_2 .")";
        if (strlen($f_celular_cliente_3))
            $Container->DataSource->Where .= " OR (". $f_celular_cliente_3 .")";
        if (strlen($f_email_cliente_1))
            $Container->DataSource->Where .= " OR (". $f_email_cliente_1 .")";
        if (strlen($f_email_cliente_2))
            $Container->DataSource->Where .= " OR (". $f_email_cliente_2 .")";
        if (strlen($f_email_cliente_3))
            $Container->DataSource->Where .= " OR (". $f_email_cliente_3 .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $clientesSearch->s_keyword->SetValue("");
    }
//End Advanced Search

//Close clientes_ds_BeforeBuildSelect @8-30AEC464
    return $clientes_ds_BeforeBuildSelect;
}
//End Close clientes_ds_BeforeBuildSelect


?>
