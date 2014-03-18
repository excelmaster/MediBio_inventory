<?php
//BindEvents Method @1-20C10194
function BindEvents()
{
    global $detail_ent_alm_general;
    $detail_ent_alm_general->detail_ent_alm_general_TotalRecords->CCSEvents["BeforeShow"] = "detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow";
}
//End BindEvents Method

//detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow @10-42372971
function detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow(& $sender)
{
    $detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $detail_ent_alm_general; //Compatibility
//End detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow

//Retrieve number of records @11-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow @10-42533231
    return $detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow;
}
//End Close detail_ent_alm_general_detail_ent_alm_general_TotalRecords_BeforeShow
?>
