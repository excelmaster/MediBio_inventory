<?php
//BindEvents Method @1-DE4485E9
function BindEvents()
{
    global $clientes1;
    $clientes1->fecha_nacimiento->CCSEvents["BeforeShow"] = "clientes1_fecha_nacimiento_BeforeShow";
}
//End BindEvents Method

//clientes1_fecha_nacimiento_BeforeShow @19-7FF42A66
function clientes1_fecha_nacimiento_BeforeShow(& $sender)
{
    $clientes1_fecha_nacimiento_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $clientes1; //Compatibility
//End clientes1_fecha_nacimiento_BeforeShow

//Close clientes1_fecha_nacimiento_BeforeShow @19-1551B8F1
    return $clientes1_fecha_nacimiento_BeforeShow;
}
//End Close clientes1_fecha_nacimiento_BeforeShow


?>
