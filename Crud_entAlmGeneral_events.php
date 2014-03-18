<?php
//BindEvents Method @1-D6C82890
function BindEvents()
{
    global $ent_alm_general;
    $ent_alm_general->ds->CCSEvents["BeforeExecuteInsert"] = "ent_alm_general_ds_BeforeExecuteInsert";
}
//End BindEvents Method

//ent_alm_general_ds_BeforeExecuteInsert @6-D5414DB5
function ent_alm_general_ds_BeforeExecuteInsert(& $sender)
{
    $ent_alm_general_ds_BeforeExecuteInsert = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general; //Compatibility
//End ent_alm_general_ds_BeforeExecuteInsert

//Master Detail Validate @35-052D0C0B
    global $detail_ent_alm_general, $CCSLocales;
    if (!CCInitializeDetails($detail_ent_alm_general, "")) {
        $Component->DataSource->Errors->addError($CCSLocales->GetText("CCS_MasterDetailError_DetailsValidateFail"));
    }
//End Master Detail Validate

//Close ent_alm_general_ds_BeforeExecuteInsert @6-B349CB7E
    return $ent_alm_general_ds_BeforeExecuteInsert;
}
//End Close ent_alm_general_ds_BeforeExecuteInsert


?>
