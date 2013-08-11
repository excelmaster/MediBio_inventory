<?php
//BindEvents Method @1-B5140E66
function BindEvents()
{
    global $detail_ent_alm_general1;
    $detail_ent_alm_general1->detail_ent_alm_general1_TotalRecords->CCSEvents["BeforeShow"] = "detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow";
    $detail_ent_alm_general1->CCSEvents["BeforeShow"] = "detail_ent_alm_general1_BeforeShow";
}
//End BindEvents Method

//detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow @49-E79BA438
function detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow(& $sender)
{
    $detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $detail_ent_alm_general1; //Compatibility
//End detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow

//Retrieve number of records @50-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow @49-76C5213F
    return $detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow;
}
//End Close detail_ent_alm_general1_detail_ent_alm_general1_TotalRecords_BeforeShow

//detail_ent_alm_general1_BeforeShow @46-33A8D93F
function detail_ent_alm_general1_BeforeShow(& $sender)
{
    $detail_ent_alm_general1_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $detail_ent_alm_general1; //Compatibility
//End detail_ent_alm_general1_BeforeShow

//Hide-Show Component @61-16FE48D1
    $Parameter1 = 1;
    $Parameter2 = 1;
    if (0 == CCCompareValues($Parameter1, $Parameter2, ccsInteger))
        $Component->Button_Submit->Visible = false;
//End Hide-Show Component

//Close detail_ent_alm_general1_BeforeShow @46-2BE58A7E
    return $detail_ent_alm_general1_BeforeShow;
}
//End Close detail_ent_alm_general1_BeforeShow


?>
