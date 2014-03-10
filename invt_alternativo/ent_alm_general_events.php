<?php
//BindEvents Method @1-2CEC50F1
function BindEvents()
{
    global $ent_almc_general;
    global $detail_entalmgeneral;
    $ent_almc_general->Hide_Panel->CCSEvents["BeforeShow"] = "ent_almc_general_Hide_Panel_BeforeShow";
    $ent_almc_general->ds->CCSEvents["BeforeExecuteInsert"] = "ent_almc_general_ds_BeforeExecuteInsert";
    $ent_almc_general->ds->CCSEvents["AfterExecuteInsert"] = "ent_almc_general_ds_AfterExecuteInsert";
    $ent_almc_general->ds->CCSEvents["AfterExecuteUpdate"] = "ent_almc_general_ds_AfterExecuteUpdate";
    $detail_entalmgeneral->detail_entalmgeneral_TotalRecords->CCSEvents["BeforeShow"] = "detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow";
    $detail_entalmgeneral->CCSEvents["BeforeShow"] = "detail_entalmgeneral_BeforeShow";
}
//End BindEvents Method

//ent_almc_general_Hide_Panel_BeforeShow @8-6C22726C
function ent_almc_general_Hide_Panel_BeforeShow(& $sender)
{
    $ent_almc_general_Hide_Panel_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_Hide_Panel_BeforeShow

//Hide-Show Component @9-BE2455A5
    $Parameter1 = 1;
    $Parameter2 = 1;
    if (0 == CCCompareValues($Parameter1, $Parameter2, ccsInteger))
        $Component->Visible = false;
//End Hide-Show Component

//Close ent_almc_general_Hide_Panel_BeforeShow @8-44FEF498
    return $ent_almc_general_Hide_Panel_BeforeShow;
}
//End Close ent_almc_general_Hide_Panel_BeforeShow

//ent_almc_general_ds_BeforeExecuteInsert @6-F12A376C
function ent_almc_general_ds_BeforeExecuteInsert(& $sender)
{
    $ent_almc_general_ds_BeforeExecuteInsert = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_ds_BeforeExecuteInsert

//Master Detail Validate @44-C09BCE5E
    global $detail_entalmgeneral, $CCSLocales;
    if (!CCInitializeDetails($detail_entalmgeneral, "EditableGrid")) {
        $Component->DataSource->Errors->addError($CCSLocales->GetText("CCS_MasterDetailError_DetailsValidateFail"));
    }
//End Master Detail Validate

//Close ent_almc_general_ds_BeforeExecuteInsert @6-93A92C9B
    return $ent_almc_general_ds_BeforeExecuteInsert;
}
//End Close ent_almc_general_ds_BeforeExecuteInsert

//ent_almc_general_ds_AfterExecuteInsert @6-7FE6F9DD
function ent_almc_general_ds_AfterExecuteInsert(& $sender)
{
    $ent_almc_general_ds_AfterExecuteInsert = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_ds_AfterExecuteInsert

//Master Detail Insert @45-8E882D46
    global $detail_entalmgeneral;
    if ($ent_almc_general->DataSource->Errors->Count() == 0) {
        $ent_almc_general->DataSource->query("SELECT MAX() FROM ent_almc_general");
        $ent_almc_general->DataSource->next_record();
        $last_id = $ent_almc_general->DataSource->f(0);
        $_GET["id"] = $last_id;
    }
//End Master Detail Insert

//Close ent_almc_general_ds_AfterExecuteInsert @6-F5EEA851
    return $ent_almc_general_ds_AfterExecuteInsert;
}
//End Close ent_almc_general_ds_AfterExecuteInsert

//ent_almc_general_ds_AfterExecuteUpdate @6-FB0B5D5C
function ent_almc_general_ds_AfterExecuteUpdate(& $sender)
{
    $ent_almc_general_ds_AfterExecuteUpdate = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almc_general; //Compatibility
//End ent_almc_general_ds_AfterExecuteUpdate

//Master Detail Update @46-5817F65C
    global $detail_entalmgeneral;
    CCInitializeDetails($detail_entalmgeneral, "EditableGrid");
//End Master Detail Update

//Close ent_almc_general_ds_AfterExecuteUpdate @6-3AC769DE
    return $ent_almc_general_ds_AfterExecuteUpdate;
}
//End Close ent_almc_general_ds_AfterExecuteUpdate

//detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow @22-68F5CF18
function detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow(& $sender)
{
    $detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $detail_entalmgeneral; //Compatibility
//End detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow

//Retrieve number of records @23-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow @22-9E1B8B19
    return $detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow;
}
//End Close detail_entalmgeneral_detail_entalmgeneral_TotalRecords_BeforeShow

//detail_entalmgeneral_BeforeShow @19-4F43D67E
function detail_entalmgeneral_BeforeShow(& $sender)
{
    $detail_entalmgeneral_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $detail_entalmgeneral; //Compatibility
//End detail_entalmgeneral_BeforeShow

//Hide-Show Component @32-16FE48D1
    $Parameter1 = 1;
    $Parameter2 = 1;
    if (0 == CCCompareValues($Parameter1, $Parameter2, ccsInteger))
        $Component->Button_Submit->Visible = false;
//End Hide-Show Component

//Close detail_entalmgeneral_BeforeShow @19-66CD97B3
    return $detail_entalmgeneral_BeforeShow;
}
//End Close detail_entalmgeneral_BeforeShow


?>
