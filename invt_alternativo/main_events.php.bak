<?php
//BindEvents Method @1-AC98F56B
function BindEvents()
{
    global $main_redirection;
    $main_redirection->main_redirection_TotalRecords->CCSEvents["BeforeShow"] = "main_redirection_main_redirection_TotalRecords_BeforeShow";
    $main_redirection->ds->CCSEvents["BeforeBuildSelect"] = "main_redirection_ds_BeforeBuildSelect";
}
//End BindEvents Method

//main_redirection_main_redirection_TotalRecords_BeforeShow @8-B0F66DE1
function main_redirection_main_redirection_TotalRecords_BeforeShow(& $sender)
{
    $main_redirection_main_redirection_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $main_redirection; //Compatibility
//End main_redirection_main_redirection_TotalRecords_BeforeShow

//Retrieve number of records @9-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close main_redirection_main_redirection_TotalRecords_BeforeShow @8-6F334C21
    return $main_redirection_main_redirection_TotalRecords_BeforeShow;
}
//End Close main_redirection_main_redirection_TotalRecords_BeforeShow

//main_redirection_ds_BeforeBuildSelect @6-0B14B809
function main_redirection_ds_BeforeBuildSelect(& $sender)
{
    $main_redirection_ds_BeforeBuildSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $main_redirection; //Compatibility
//End main_redirection_ds_BeforeBuildSelect

//Custom Code @15-2A29BDB7
// -------------------------
  

  
// -------------------------
//End Custom Code

//Close main_redirection_ds_BeforeBuildSelect @6-849B47F8
    return $main_redirection_ds_BeforeBuildSelect;
}
//End Close main_redirection_ds_BeforeBuildSelect


?>
