<?php
//BindEvents Method @1-979DE65C
function BindEvents()
{
    global $Logout;
    $Logout->CCSEvents["BeforeShow"] = "Logout_BeforeShow";
}
//End BindEvents Method

//Logout_BeforeShow @11-9E4497AF
function Logout_BeforeShow(& $sender)
{
    $Logout_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Logout; //Compatibility
//End Logout_BeforeShow

//Logout @13-84D4CBDD
    CCLogoutUser();
    CCSetCookie("invt_bmLogin", "");
        global $Redirect;
        $Redirect = "login.php";
//End Logout

//Close Logout_BeforeShow @11-5AB7ACC1
    return $Logout_BeforeShow;
}
//End Close Logout_BeforeShow


?>
