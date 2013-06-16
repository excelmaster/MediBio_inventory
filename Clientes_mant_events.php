<?php
//BindEvents Method @1-E6763133
function BindEvents()
{
    global $clientes;
    $clientes->clientes_TotalRecords->CCSEvents["BeforeShow"] = "clientes_clientes_TotalRecords_BeforeShow";
    $clientes->ds->CCSEvents["BeforeBuildSelect"] = "clientes_ds_BeforeBuildSelect";
}
//End BindEvents Method

//clientes_clientes_TotalRecords_BeforeShow @15-04F845CF
function clientes_clientes_TotalRecords_BeforeShow(& $sender)
{
    $clientes_clientes_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $clientes; //Compatibility
//End clientes_clientes_TotalRecords_BeforeShow

//Retrieve number of records @16-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close clientes_clientes_TotalRecords_BeforeShow @15-FA3E4560
    return $clientes_clientes_TotalRecords_BeforeShow;
}
//End Close clientes_clientes_TotalRecords_BeforeShow

//clientes_ds_BeforeBuildSelect @6-0892787C
function clientes_ds_BeforeBuildSelect(& $sender)
{
    $clientes_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $clientes; //Compatibility
//End clientes_ds_BeforeBuildSelect

//Advanced Search @46-29F031C9
    global $clientesSearch;
    $s_keyword = CCGetParam("s_keyword", "");
    $searchConditions = CCGetParam("searchConditions", "");
    if (!in_array($searchConditions, array("1", "2", "3"))) $searchConditions = 1;
    $keywords = explode(" ", trim($s_keyword));
    if (strlen($s_keyword)) {
        $f_prinombre = "";
        $f_priapellido = "";
        $f_num_documento = "";
        // Any of words
        if ($searchConditions == "1") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_prinombre)) $f_prinombre .= " OR ";
                if (strlen($f_priapellido)) $f_priapellido .= " OR ";
                if (strlen($f_num_documento)) $f_num_documento .= " OR ";
                $f_prinombre .= "prinombre LIKE '%" . $keyword . "%'";
                $f_priapellido .= "priapellido LIKE '%" . $keyword . "%'";
                $f_num_documento .= "num_documento LIKE '%" . $keyword . "%'";
            }
        // All words
        } else if ($searchConditions == "2") {
            foreach ($keywords as $keyword) {
                $keyword = str_replace("'", "''", trim($keyword));
                if (strlen($f_prinombre)) $f_prinombre .= " AND ";
                if (strlen($f_priapellido)) $f_priapellido .= " AND ";
                if (strlen($f_num_documento)) $f_num_documento .= " AND ";
                $f_prinombre .= "prinombre LIKE '%" . $keyword . "%'";
                $f_priapellido .= "priapellido LIKE '%" . $keyword . "%'";
                $f_num_documento .= "num_documento LIKE '%" . $keyword . "%'";
            }
        // Exact Phrase
        } else if ($searchConditions == "3") {
            $keyword = str_replace("'", "''", $s_keyword);
            $f_prinombre = "prinombre LIKE '%" . $keyword . "%'";
            $f_priapellido = "priapellido LIKE '%" . $keyword . "%'";
            $f_num_documento = "num_documento LIKE '%" . $keyword . "%'";
        }
        if (strlen($Container->DataSource->Where) > 0 ) $Container->DataSource->Where .= " AND ";
        $Container->DataSource->Where .= "((" . $f_prinombre . ")";
        if (strlen($f_priapellido))
            $Container->DataSource->Where .= " OR (". $f_priapellido .")";
        if (strlen($f_num_documento))
            $Container->DataSource->Where .= " OR (". $f_num_documento .")";
        $Container->DataSource->Where .= " ) ";
    } else {
        $clientesSearch->s_keyword->SetValue("");
    }
//End Advanced Search

//Close clientes_ds_BeforeBuildSelect @6-30AEC464
    return $clientes_ds_BeforeBuildSelect;
}
//End Close clientes_ds_BeforeBuildSelect


?>
