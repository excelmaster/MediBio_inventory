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
<Record id="6" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_almc_general" connection="Connection1" dataSource="ent_almc_general" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:ent_almc_general_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="MasterDetails" changedCaptionRecord="False" recordDirection="Vertical" masterAddTemplatePanel="False" ChooseDetailForm="Record" PathID="Contentent_almc_general" wizardThemeVersion="3.0" UseMasterRecord="UseNewRecordMaster" masterDetailType="Separate" composition="17" isParent="True" wizardLinkField="id">
<Components>
<Panel id="8" visible="True" name="Hide_Panel" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Button id="10" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="Contentent_almc_generalHide_PanelButton_Insert" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="11" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentent_almc_generalHide_PanelButton_Update" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="12" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" PathID="Contentent_almc_generalHide_PanelButton_Cancel" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
</Components>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Hide-Show Component" actionCategory="General" id="9" action="Hide" conditionType="Parameter" dataType="Integer" componentName="Hide_Panel" condition="Equal" name1="1" sourceType1="Expression" name2="1" sourceType2="Expression"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Panel>
<TextBox id="14" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fecha_registro" fieldSource="fecha_registro" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fecha_registro}" caption="{res:fecha_registro}" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentent_almc_generalfecha_registro" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features>
<InlineDatePicker id="15" enabled="Yes" name="InlineDatePicker1" category="YahooUI">
<Components/>
<Events/>
<ControlPoints/>
<Features/>
</InlineDatePicker>
</Features>
</TextBox>
<TextBox id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_usuario" fieldSource="id_usuario" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:id_usuario}" caption="{res:id_usuario}" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_almc_generalid_usuario" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="17" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_producto" fieldSource="id_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:id_producto}" caption="{res:id_producto}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_almc_generalid_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="18" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="cantidad" fieldSource="cantidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:cantidad}" caption="{res:cantidad}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_almc_generalcantidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
</Components>
<Events>
<Event name="BeforeExecuteInsert" type="Server">
<Actions>
<Action actionName="Master Detail Validate" actionCategory="General" id="44" detailsComponentName="detail_entalmgeneral"/>
</Actions>
</Event>
<Event name="AfterExecuteInsert" type="Server">
<Actions>
<Action actionName="Master Detail Insert" actionCategory="General" id="45" detailsComponentName="detail_entalmgeneral" masterID="id"/>
</Actions>
</Event>
<Event name="AfterExecuteUpdate" type="Server">
<Actions>
<Action actionName="Master Detail Update" actionCategory="General" id="46" detailsComponentName="detail_entalmgeneral" masterID="id"/>
</Actions>
</Event>
<Event name="OnSubmit" type="Client">
<Actions>
<Action actionName="Get Data From Form" actionCategory="General" id="47" detailForm="detail_entalmgeneral"/>
</Actions>
</Event>
</Events>
<TableParameters>
<TableParameter id="13" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="7" tableName="ent_almc_general"/>
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
<EditableGrid id="19" urlType="Relative" secured="False" emptyRows="3" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" sourceType="Table" defaultPageSize="10" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="detail_entalmgeneral" connection="Connection1" dataSource="detail_entalmgeneral" pageSizeLimit="100" wizardGridPageSize="True" wizardUseSearch="False" allowCancel="False" wizardSubmitConfirmation="False" wizardCaption="{res:detail_entalmgeneral_EditableGridForm}" wizardTheme="Blueprint" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAltRecord="False" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridKey="id" wizardGridPaging="Simple" wizardAddNbsp="False" wizardTotalRecords="True" wizardButtonsType="image" changedCaptionEditableGrid="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardType="MasterDetails" wizardThemeApplyTo="Component" detailAddTemplatePanel="False" ChooseDetailForm="EditableGrid" PathID="Contentdetail_entalmgeneral" wizardThemeVersion="3.0" customInsertType="Table" customInsert="detail_entalmgeneral" UseDetailForm="UseNewDetailForm" composition="17">
<Components>
<Label id="22" fieldSourceType="DBColumn" dataType="Text" html="False" name="detail_entalmgeneral_TotalRecords" wizardTheme="Blueprint" wizardUseTemplateBlock="False" PathID="Contentdetail_entalmgeneraldetail_entalmgeneral_TotalRecords" wizardThemeVersion="3.0">
<Components/>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Retrieve number of records" actionCategory="Database" id="23"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Label>
<Sorter id="24" visible="True" name="Sorter_id_EntAlmGeneral" column="id_EntAlmGeneral" wizardCaption="{res:id_EntAlmGeneral}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id_EntAlmGeneral" wizardAddNbsp="False" PathID="Contentdetail_entalmgeneralSorter_id_EntAlmGeneral" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="25" visible="True" name="Sorter_id_producto" column="id_producto" wizardCaption="{res:id_producto}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id_producto" wizardAddNbsp="False" PathID="Contentdetail_entalmgeneralSorter_id_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="26" visible="True" name="Sorter_cantidad" column="cantidad" wizardCaption="{res:cantidad}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="cantidad" wizardAddNbsp="False" PathID="Contentdetail_entalmgeneralSorter_cantidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<TextBox id="27" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_EntAlmGeneral" fieldSource="id_EntAlmGeneral" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:id_EntAlmGeneral}" caption="{res:id_EntAlmGeneral}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_entalmgeneralid_EntAlmGeneral" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="28" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_producto" fieldSource="id_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:id_producto}" caption="{res:id_producto}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_entalmgeneralid_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="29" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="cantidad" fieldSource="cantidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:cantidad}" caption="{res:cantidad}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_entalmgeneralcantidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<Navigator id="30" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
<Button id="31" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Submit" operation="Submit" wizardCaption="{res:CCS_Update}" wizardTheme="Blueprint" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentdetail_entalmgeneralButton_Submit" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
</Components>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Hide-Show Component" actionCategory="General" id="32" action="Hide" conditionType="Parameter" dataType="Integer" componentName="Button_Submit" condition="Equal" name1="1" sourceType1="Expression" name2="1" sourceType2="Expression"/>
</Actions>
</Event>
</Events>
<TableParameters>
<TableParameter id="33" conditionType="Parameter" useIsNull="False" dataType="Integer" parameterSource="id" parameterType="URL" field="id" defaultValue="0" logicOperator="And" searchConditionType="Equal" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="20" tableName="detail_entalmgeneral"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields>
<PKField id="21" tableName="detail_entalmgeneral" fieldName="id" dataType="Integer"/>
</PKFields>
<ISPParameters/>
<ISQLParameters/>
<IFormElements>
<CustomParameter id="34" field="id_EntAlmGeneral" dataType="Integer" parameterType="Control" parameterSource="id_EntAlmGeneral"/>
<CustomParameter id="35" field="id_producto" dataType="Integer" parameterType="Control" parameterSource="id_producto"/>
<CustomParameter id="36" field="cantidad" dataType="Integer" parameterType="Control" parameterSource="cantidad"/>
<CustomParameter id="37" field="id" dataType="Integer" parameterSource="id" parameterType="URL"/>
</IFormElements>
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
</EditableGrid>
<Button id="38" urlType="Relative" enableValidation="True" isDefault="False" name="Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" composition="17" PathID="ContentInsert" wizardThemeVersion="3.0">
<Components/>
<Events>
<Event name="OnLoad" type="Client">
<Actions>
<Action actionName="Emulate Record Button" actionCategory="General" id="39" recordForm="ent_almc_general" operation="Insert"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Button>
<Button id="40" urlType="Relative" enableValidation="True" isDefault="False" name="Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" composition="17" PathID="ContentUpdate" wizardThemeVersion="3.0">
<Components/>
<Events>
<Event name="OnLoad" type="Client">
<Actions>
<Action actionName="Emulate Record Button" actionCategory="General" id="41" recordForm="ent_almc_general" operation="Update"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Button>
<Button id="42" urlType="Relative" enableValidation="False" isDefault="False" name="Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" composition="17" PathID="ContentCancel" wizardThemeVersion="3.0">
<Components/>
<Events>
<Event name="OnLoad" type="Client">
<Actions>
<Action actionName="Emulate Record Button" actionCategory="General" id="43" recordForm="ent_almc_general" operation="Cancel"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Button>
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
		<CodeFile id="Events" language="PHPTemplates" name="ent_alm_general_events.php" forShow="False" comment="//" codePage="windows-1252"/>
<CodeFile id="Code" language="PHPTemplates" name="ent_alm_general.php" forShow="True" url="ent_alm_general.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
<CachingParameters/>
<Attributes/>
<Features/>
<Events/>
</Page>
