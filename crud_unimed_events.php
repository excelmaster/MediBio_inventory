<?php
//BindEvents Method @1-397EAC53
function BindEvents()
{
    global $CCSEvents;
    $CCSEvents["AfterInitialize"] = "Page_AfterInitialize";
}
//End BindEvents Method

//Page_AfterInitialize @1-89580187
function Page_AfterInitialize(& $sender)
{
    $Page_AfterInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $crud_unimed; //Compatibility
//End Page_AfterInitialize

//Logout @18-9B3D070E
    if(strlen(CCGetParam("Logout", ""))) 
    {
        CCLogoutUser();
        CCSetCookie("invt_bmLogin", "");
        global $Redirect;
        $Redirect = "crud_unimed.php";
    }
//End Logout

//Close Page_AfterInitialize @1-379D319D
    return $Page_AfterInitialize;
}
//End Close Page_AfterInitialize


?>
