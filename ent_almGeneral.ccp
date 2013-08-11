<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
<Components>
<Grid id="6" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="ent_alm_general" connection="Connection1" dataSource="ent_alm_general" pageSizeLimit="100" pageSize="True" wizardCaption="{res:ent_alm_general_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Centered" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="False" wizardAddPanels="True" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="id" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="20" isParent="True">
<Components>
<Link id="9" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ent_alm_general_Insert" hrefSource="ent_almGeneral.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentent_alm_generalent_alm_general_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
<Panel id="11" visible="True" name="Header_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="12" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentent_alm_generalHeader_idSorter_id" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="13" visible="True" name="Header_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="14" visible="True" name="Sorter_fecha_proceso" column="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="fecha_proceso" wizardAddNbsp="False" PathID="Contentent_alm_generalHeader_fecha_procesoSorter_fecha_proceso" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="15" visible="True" name="Header_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="16" visible="True" name="Sorter_num_factura" column="num_factura" wizardCaption="{res:num_factura}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="num_factura" wizardAddNbsp="False" PathID="Contentent_alm_generalHeader_num_facturaSorter_num_factura" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="17" visible="True" name="Header_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="18" visible="True" name="Sorter_observaciones" column="observaciones" wizardCaption="{res:observaciones}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="observaciones" wizardAddNbsp="False" PathID="Contentent_alm_generalHeader_observacionesSorter_observaciones" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="19" visible="True" name="Header_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="20" visible="True" name="Sorter_activa" column="activa" wizardCaption="{res:activa}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="activa" wizardAddNbsp="False" PathID="Contentent_alm_generalHeader_activaSorter_activa" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="22" visible="True" name="Data_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Link id="23" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" html="False" hrefType="Page" preserveParameters="GET" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" linkProperties="''" wizardAlign="right" wizardAddNbsp="True" wizardThemeItem="GridA" PathID="Contentent_alm_generalData_idid" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<LinkParameters>
<LinkParameter id="24" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
</LinkParameters>
<Attributes/>
<Features/>
</Link>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="26" visible="True" name="Data_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="27" fieldSourceType="DBColumn" dataType="Date" html="False" name="fecha_proceso" fieldSource="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_generalData_fecha_procesofecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="29" visible="True" name="Data_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="30" fieldSourceType="DBColumn" dataType="Text" html="False" name="num_factura" fieldSource="num_factura" wizardCaption="{res:num_factura}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_generalData_num_facturanum_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="32" visible="True" name="Data_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="33" fieldSourceType="DBColumn" dataType="Text" html="False" name="observaciones" fieldSource="observaciones" wizardCaption="{res:observaciones}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_generalData_observacionesobservaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="35" visible="True" name="Data_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="36" fieldSourceType="DBColumn" dataType="Text" html="False" name="activa" fieldSource="activa" wizardCaption="{res:activa}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_generalData_activaactiva" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Navigator id="37" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Centered" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
</Components>
<Events>
<Event name="BeforeShowRow" type="Server">
<Actions>
<Action actionName="Set Row Style" actionCategory="General" id="21" styles="RowBlueprint;AltRowBlueprint" name="rowStyle"/>
</Actions>
</Event>
</Events>
<TableParameters>
<TableParameter id="10" conditionType="Parameter" useIsNull="False" field="id" parameterSource="s_id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1" searchFormParameter="True"/>
</TableParameters>
<JoinTables>
<JoinTable id="7" tableName="ent_alm_general"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="8" tableName="ent_alm_general" fieldName="id"/>
<Field id="25" tableName="ent_alm_general" fieldName="fecha_proceso"/>
<Field id="28" tableName="ent_alm_general" fieldName="num_factura"/>
<Field id="31" tableName="ent_alm_general" fieldName="observaciones"/>
<Field id="34" tableName="ent_alm_general" fieldName="activa"/>
</Fields>
<PKFields/>
<SPParameters/>
<SQLParameters/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Grid>
<Record id="38" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_generalSearch" searchIds="38" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="False" wizardTypeComponent="Search" gridSearchType="And" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="button" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="ent_almGeneral.ccp" PathID="Contentent_alm_generalSearch" wizardThemeVersion="3.0" composition="20">
<Components>
<Button id="39" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" PathID="Contentent_alm_generalSearchButton_DoSearch" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="40" visible="Dynamic" fieldSourceType="DBColumn" dataType="Integer" name="s_id" fieldSource="id" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:id}" caption="{res:id}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_alm_generalSearchs_id" wizardThemeVersion="3.0" features="(assigned)">
<Components/>
<Events/>
<Attributes/>
<Features>
<YahooAutocomplete id="55" enabled="True" sourceType="Table" name="YahooAutocomplete1" servicePage="services/ent_almGeneral_s_id_YahooAutocomplete1.ccp" category="YahooUI" searchField="id" connection="Connection1" featureNameChanged="No" dataSource="ent_alm_general">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<Features/>
</YahooAutocomplete>
</Features>
</TextBox>
<ListBox id="41" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="ent_alm_generalPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentent_alm_generalSearchent_alm_generalPageSize" wizardThemeVersion="3.0">
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
<Record id="42" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_general1" connection="Connection1" dataSource="ent_alm_general" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:ent_alm_general_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Users/betofierro/Documents/GitHub/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentent_alm_general1" wizardThemeVersion="3.0" composition="20">
<Components>
<Button id="44" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="Contentent_alm_general1Button_Insert" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="45" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentent_alm_general1Button_Update" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="46" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" PathID="Contentent_alm_general1Button_Cancel" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="48" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fecha_proceso" fieldSource="fecha_proceso" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fecha_proceso}" caption="{res:fecha_proceso}" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentent_alm_general1fecha_proceso" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features>
<InlineDatePicker id="49" enabled="Yes" name="InlineDatePicker1" category="YahooUI">
<Components/>
<Events/>
<ControlPoints/>
<Features/>
</InlineDatePicker>
</Features>
</TextBox>
<TextBox id="50" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="num_factura" fieldSource="num_factura" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:num_factura}" caption="{res:num_factura}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentent_alm_general1num_factura" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="51" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="observaciones" fieldSource="observaciones" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:observaciones}" caption="{res:observaciones}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentent_alm_general1observaciones" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="52" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="activa" fieldSource="activa" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:activa}" caption="{res:activa}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentent_alm_general1activa" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="53" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fechareg" fieldSource="fechareg" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fechareg}" caption="{res:fechareg}" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentent_alm_general1fechareg" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features>
<InlineDatePicker id="54" enabled="Yes" name="InlineDatePicker2" category="YahooUI">
<Components/>
<Events/>
<ControlPoints/>
<Features/>
</InlineDatePicker>
</Features>
</TextBox>
</Components>
<Events/>
<TableParameters>
<TableParameter id="47" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="43" tableName="ent_alm_general"/>
</JoinTables>
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
<Components/>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="5" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Panel>
</Components>
	<CodeFiles>
		<CodeFile id="Page1" language="PHPTemplates" name="ent_almGeneral_style.css" forShow="False" comment="/*" commentEnd="*/" codePage="windows-1252"/>
<CodeFile id="Events" language="PHPTemplates" name="ent_almGeneral_events.php" forShow="False" comment="//" codePage="windows-1252"/>
<CodeFile id="Code" language="PHPTemplates" name="ent_almGeneral.php" forShow="True" url="ent_almGeneral.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
<CachingParameters/>
<Attributes/>
<Features/>
<Events/>
</Page>
