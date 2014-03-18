<<<<<<< HEAD
<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_reports/medibio_reports/MasterPage.ccp">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
=======
<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_reports/medibio_reports/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
<Link id="5" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Report_Print" hrefSource="rpt_clientes.ccp" wizardTheme="Blueprint" wizardThemeType="File" wizardDefaultValue="{res:CCS_ReportPrintLink}" wizardUseTemplateBlock="True" wizardBeforeHTML="&lt;p align=&quot;right&quot;&gt;" wizardAfterHTML="&lt;/p&gt;" wizardLinkTarget="_blank" composition="18" PathID="ContentReport_Print">
<Components/>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Hide-Show Component" actionCategory="General" id="7" action="Hide" conditionType="Parameter" dataType="Text" condition="Equal" parameter1="Print" name1="ViewMode" sourceType1="URL" name2="&quot;Print&quot;" sourceType2="Expression"/>
</Actions>
</Event>
</Events>
<LinkParameters>
<LinkParameter id="6" sourceType="Expression" format="yyyy-mm-dd" name="ViewMode" source="&quot;Print&quot;"/>
</LinkParameters>
<Attributes/>
<Features/>
</Link>
<Report id="8" secured="False" enablePrint="True" showMode="Web" sourceType="Table" returnValueType="Number" linesPerWebPage="20" name="clientes" connection="Connection1" dataSource="clientes" composition="18" isParent="True" orderBy="priapellido" pageSizeLimit="100" wizardCaption="{res:clientes_ReportForm}" changedCaptionReport="False" wizardTheme="Blueprint" wizardLayoutType="Tabular" wizardGridPaging="Centered" wizardGridSortingType="SimpleDir" wizardHideDetail="False" wizardPercentForSums="False" wizardEnablePrintMode="True" wizardReportSeparator="False" wizardReportAddTotalRecords="True" wizardReportAddPageNumbers="False" wizardReportAddNbsp="False" wizardReportAddDateTime="True" wizardReportDateTimeAs="CurrentDateTime" wizardReportAddRowNumber="False" wizardReportRowNumberResetAt="Report" wizardUseSearch="True" wizardNoRecords="{res:CCS_NoRecords}" wizardUseInterVariables="True" wizardThemeApplyTo="Component" reportAddTemplatePanel="False" wizardCreateLinkToPrintablePage="True" wizardUseClientPaging="True" wizardThemeVersion="3.0">
<Components>
<Section id="10" visible="True" lines="0" name="Report_Header" wizardSectionType="ReportHeader" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<ReportLabel id="16" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalRecords" function="Count" wizardTheme="Blueprint" wizardUseTemplateBlock="False" PathID="ContentclientesReport_HeaderReport_TotalRecords" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Panel>
<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
=======
</ReportLabel>
</Components>
<Events/>
<Attributes/>
<Features/>
</Section>
<Section id="11" visible="True" lines="1" name="Page_Header" wizardSectionType="PageHeader" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="19" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Panel>
<Panel id="4" visible="True" name="Menu" contentPlaceholder="Menu">
=======
</Sorter>
<Sorter id="21" visible="True" name="Sorter_priapellido" column="priapellido" wizardCaption="{res:priapellido}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="priapellido" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="23" visible="True" name="Sorter_segapellido" column="segapellido" wizardCaption="{res:segapellido}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="segapellido" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="25" visible="True" name="Sorter_prinombre" column="prinombre" wizardCaption="{res:prinombre}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="prinombre" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="27" visible="True" name="Sorter_demasnombres" column="demasnombres" wizardCaption="{res:demasnombres}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="demasnombres" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="29" visible="True" name="Sorter_tipo_documento" column="tipo_documento" wizardCaption="{res:tipo_documento}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="tipo_documento" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="31" visible="True" name="Sorter_num_documento" column="num_documento" wizardCaption="{res:num_documento}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="num_documento" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Section>
<Section id="12" visible="True" lines="1" name="Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<ReportLabel id="20" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="id" fieldSource="id" fieldTableSource="clientes" wizardCaption="{res:id}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="ContentclientesDetailid" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
<ReportLabel id="22" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="priapellido" fieldSource="priapellido" fieldTableSource="clientes" wizardCaption="{res:priapellido}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentclientesDetailpriapellido" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
<ReportLabel id="24" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="segapellido" fieldSource="segapellido" fieldTableSource="clientes" wizardCaption="{res:segapellido}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentclientesDetailsegapellido" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
<ReportLabel id="26" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="prinombre" fieldSource="prinombre" fieldTableSource="clientes" wizardCaption="{res:prinombre}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentclientesDetailprinombre" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
<ReportLabel id="28" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="demasnombres" fieldSource="demasnombres" fieldTableSource="clientes" wizardCaption="{res:demasnombres}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentclientesDetaildemasnombres" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
<ReportLabel id="30" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="tipo_documento" fieldSource="tipo_documento" fieldTableSource="clientes" wizardCaption="{res:tipo Documento}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="ContentclientesDetailtipo_documento" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
<ReportLabel id="32" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="num_documento" fieldSource="num_documento" fieldTableSource="clientes" wizardCaption="{res:num Documento}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentclientesDetailnum_documento" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
</Components>
<Events/>
<Attributes/>
<Features/>
</Section>
<Section id="13" visible="True" lines="0" name="Report_Footer" wizardSectionType="ReportFooter" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Panel id="14" visible="True" name="NoRecords" wizardNoRecords="{res:CCS_NoRecords}" wizardTheme="Blueprint" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
</Panel>
</Components>
<<<<<<< HEAD
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="rpt_clientes.php" forShow="True" url="rpt_clientes.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
<CachingParameters/>
<Attributes/>
<Features/>
<Events/>
=======
<Events/>
<Attributes/>
<Features/>
</Section>
<Section id="15" visible="True" lines="1" name="Page_Footer" wizardSectionType="PageFooter" pageBreakAfter="True" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<ReportLabel id="17" fieldSourceType="SpecialValue" dataType="Date" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentDateTime" fieldSource="CurrentDateTime" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardInsertToDateTD="True" PathID="ContentclientesPage_FooterReport_CurrentDateTime" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</ReportLabel>
<Navigator id="18" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Centered" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
</Components>
<Events/>
<Attributes/>
<Features/>
</Section>
</Components>
<Events>
<Event name="BeforeBuildSelect" type="Server">
<Actions>
<Action actionName="Advanced Search" actionCategory="General" id="41" searchForm="clientesSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,prinombre,demasnombres,priapellido,segapellido,tipo_documento,num_documento,lugar_nacimiento,fecha_nacimiento,lugar_residencia,direccion_residencia,telfijo_cliente_1,telfijo_cliente_2,telfijo_cliente_3,celular_cliente_1,celular_cliente_2,celular_cliente_3,email_cliente_1,email_cliente_2,email_cliente_3"/>
</Actions>
</Event>
</Events>
<TableParameters/>
<JoinTables>
<JoinTable id="9" tableName="clientes"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields/>
<SPParameters/>
<SQLParameters/>
<ReportGroups/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Report>
<Record id="33" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="clientesSearch" searchIds="33" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="True" gridSearchSortField="True" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="Report" returnPage="rpt_clientes.ccp" PathID="ContentclientesSearch" wizardThemeVersion="3.0" composition="18">
<Components>
<Link id="34" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="rpt_clientes.ccp" removeParameters="s_keyword;clientesOrder;clientesDir;clientesPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="ContentclientesSearchClearParameters" wizardThemeVersion="3.0">
<Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
<Button id="35" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="ContentclientesSearchButton_DoSearch" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="36" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,prinombre,demasnombres,priapellido,segapellido,tipo_documento,num_documento,lugar_nacimiento,fecha_nacimiento,lugar_residencia,direccion_residencia,telfijo_cliente_1,telfijo_cliente_2,telfijo_cliente_3,celular_cliente_1,celular_cliente_2,celular_cliente_3,email_cliente_1,email_cliente_2,email_cliente_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="ContentclientesSearchs_keyword" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<ListBox id="37" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="ContentclientesSearchsearchConditions" wizardThemeVersion="3.0">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<PKFields/>
<Attributes/>
<Features/>
</ListBox>
<ListBox id="38" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="clientesOrder" dataSource=";{res:CCS_SelectField};Sorter_id;{res:id};Sorter_priapellido;{res:priapellido};Sorter_segapellido;{res:segapellido};Sorter_prinombre;{res:prinombre};Sorter_demasnombres;{res:demasnombres};Sorter_tipo_documento;{res:tipo_documento};Sorter_num_documento;{res:num_documento}" wizardTheme="Blueprint" wizardCaption="{res:CCS_SortBy}" wizardThemeVersion="3.0">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<PKFields/>
<Attributes/>
<Features/>
</ListBox>
<ListBox id="39" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="clientesDir" dataSource=";{res:CCS_SelectOrder};ASC;{res:CCS_ASC};DESC;{res:CCS_DESC}" wizardTheme="Blueprint" wizardCaption=" " PathID="ContentclientesSearchclientesDir" wizardThemeVersion="3.0">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<PKFields/>
<Attributes/>
<Features/>
</ListBox>
<ListBox id="40" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="clientesPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="ContentclientesSearchclientesPageSize" wizardThemeVersion="3.0">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<PKFields/>
<Attributes/>
<Features/>
</ListBox>
</Components>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<PKFields/>
<ISPParameters/>
<ISQLParameters/>
<IFormElements/>
<USPParameters/>
<USQLParameters/>
<UConditions/>
<UFormElements/>
<DSPParameters/>
<DSQLParameters/>
<DConditions/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Record>
</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="4" visible="True" name="Menu" contentPlaceholder="Menu">
			<Components>
<Link id="42" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="MenuLink1" hrefSource="Clientes_mant.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver a Clientes','textSourceDB':'','hrefSource':'Clientes_mant.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
	</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="rpt_clientes.php" forShow="True" url="rpt_clientes.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="rpt_clientes_events.php" forShow="False" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
</Page>
