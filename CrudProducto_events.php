<?php
//BindEvents Method @1-DBAE459E
function BindEvents()
{
    global $productos;
    $productos->Button_Insert->CCSEvents["OnClick"] = "productos_Button_Insert_OnClick";
    $productos->ds->CCSEvents["BeforeExecuteInsert"] = "productos_ds_BeforeExecuteInsert";
}
//End BindEvents Method

//productos_Button_Insert_OnClick @7-852CD558
function productos_Button_Insert_OnClick(& $sender)
{
    $productos_Button_Insert_OnClick = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $productos; //Compatibility
//End productos_Button_Insert_OnClick

//Custom Code @27-2A29BDB7
// -------------------------
    // Write your own code here.
// -------------------------
//End Custom Code

//Close productos_Button_Insert_OnClick @7-17031C82
    return $productos_Button_Insert_OnClick;
}
//End Close productos_Button_Insert_OnClick

//productos_ds_BeforeExecuteInsert @6-AD71BAE1
function productos_ds_BeforeExecuteInsert(& $sender)
{
    $productos_ds_BeforeExecuteInsert = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $productos; //Compatibility
//End productos_ds_BeforeExecuteInsert

//Print Text @26-D5C3C989
    echo "antes de insertar";
//End Print Text

//Close productos_ds_BeforeExecuteInsert @6-A64375FD
    return $productos_ds_BeforeExecuteInsert;
}
//End Close productos_ds_BeforeExecuteInsert


?>
