<?php
//BindEvents Method @1-79D42B24
function BindEvents()
{
    global $ent_alm_general;
    global $CCSEvents;
    $ent_alm_general->CCSEvents["BeforeShowRow"] = "ent_alm_general_BeforeShowRow";
}
//End BindEvents Method

//ent_alm_general_BeforeShowRow @6-A9FD7344
function ent_alm_general_BeforeShowRow(& $sender)
{
    $ent_alm_general_BeforeShowRow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_alm_general; //Compatibility
//End ent_alm_general_BeforeShowRow

//Set Row Style @21-58271A09
    $styles = array("RowBlueprint", "AltRowBlueprint");
    if (count($styles)) {
        $Style = $styles[($Component->RowNumber - 1) % count($styles)];
        if (strlen($Style) && !strpos($Style, "="))
            $Style = (strpos($Style, ":") ? 'style="' : 'class="'). $Style . '"';
        $Component->Attributes->SetValue("rowStyle", $Style);
    }
//End Set Row Style

//Close ent_alm_general_BeforeShowRow @6-5C506782
    return $ent_alm_general_BeforeShowRow;
}
//End Close ent_alm_general_BeforeShowRow

//Page_BeforeInitialize @1-458303F3
function Page_BeforeInitialize(& $sender)
{
    $Page_BeforeInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $ent_almGeneral; //Compatibility
//End Page_BeforeInitialize

//YahooAutocomplete1 Initialization @55-C7379AA6
    if ('Contentent_alm_generalSearchs_idYahooAutocomplete1' == CCGetParam('callbackControl')) {
        $Service = new Service();
        $Service->SetFormatter(new JsonFormatter());
//End YahooAutocomplete1 Initialization

//YahooAutocomplete1 DataSource @55-FEE87878
        $Service->DataSource = new clsDBConnection1();
        $Service->ds = & $Service->DataSource;
        $Service->DataSource->SQL = "SELECT * \n" .
"FROM ent_alm_general {SQL_Where} {SQL_OrderBy}";
        $Service->DataSource->Parameters["urlquery"] = CCGetFromGet("query", NULL);
        $Service->DataSource->wp = new clsSQLParameters();
        $Service->DataSource->wp->AddParameter("1", "urlquery", ccsText, "", "", $Service->DataSource->Parameters["urlquery"], -1, false);
        $Service->DataSource->wp->Criterion[1] = $Service->DataSource->wp->Operation(opBeginsWith, "id", $Service->DataSource->wp->GetDBValue("1"), $Service->DataSource->ToSQL($Service->DataSource->wp->GetDBValue("1"), ccsText),false);
        $Service->DataSource->Where = 
             $Service->DataSource->wp->Criterion[1];
        $Service->SetDataSourceQuery(CCBuildSQL($Service->DataSource->SQL, $Service->DataSource->Where, $Service->DataSource->Order));
//End YahooAutocomplete1 DataSource

//YahooAutocomplete1 DataFields @55-5B5F0D9E
        $Service->AddDataSourceField('id');
//End YahooAutocomplete1 DataFields

//YahooAutocomplete1 Execution @55-73F24F96
        echo '{"Result":' . $Service->Execute() . '}';
//End YahooAutocomplete1 Execution

//YahooAutocomplete1 Tail @55-27890EF8
        exit;
    }
//End YahooAutocomplete1 Tail

//Close Page_BeforeInitialize @1-23E6A029
    return $Page_BeforeInitialize;
}
//End Close Page_BeforeInitialize


?>
