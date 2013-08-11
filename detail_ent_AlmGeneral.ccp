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
<EditableGrid id="46" urlType="Relative" secured="False" emptyRows="3" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" sourceType="Table" defaultPageSize="20" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="detail_ent_alm_general1" connection="Connection1" dataSource="detail_ent_alm_general" pageSizeLimit="100" wizardGridPageSize="False" wizardUseSearch="False" allowCancel="False" wizardSubmitConfirmation="False" wizardCaption="{res:detail_ent_alm_general_EditableGridForm}" wizardTheme="Blueprint" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAltRecord="False" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridKey="id" wizardGridPaging="Simple" wizardAddNbsp="False" wizardTotalRecords="True" wizardButtonsType="image" changedCaptionEditableGrid="True" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardType="MasterDetails" wizardThemeApplyTo="Component" detailAddTemplatePanel="False" ChooseDetailForm="EditableGrid" PathID="Contentdetail_ent_alm_general1" wizardThemeVersion="3.0" customInsertType="Table" customInsert="detail_ent_alm_general" UseDetailForm="UseNewDetailForm" composition="22">
<Components>
<Label id="49" fieldSourceType="DBColumn" dataType="Text" html="False" name="detail_ent_alm_general1_TotalRecords" wizardTheme="Blueprint" wizardUseTemplateBlock="False" PathID="Contentdetail_ent_alm_general1detail_ent_alm_general1_TotalRecords" wizardThemeVersion="3.0">
<Components/>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Retrieve number of records" actionCategory="Database" id="50"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Label>
<Sorter id="51" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_general1Sorter_id" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="52" visible="True" name="Sorter_id_producto" column="id_producto" wizardCaption="{res:id_producto}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id_producto" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_general1Sorter_id_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="53" visible="True" name="Sorter_cantidad" column="cantidad" wizardCaption="{res:cantidad}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="cantidad" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_general1Sorter_cantidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="54" visible="True" name="Sorter_observacion" column="observacion" wizardCaption="{res:observacion}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="observacion" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_general1Sorter_observacion" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Label id="55" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:id}" PathID="Contentdetail_ent_alm_general1id" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
<TextBox id="56" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_producto" fieldSource="id_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:id_producto}" caption="{res:id_producto}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_ent_alm_general1id_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="57" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="cantidad" fieldSource="cantidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:cantidad}" caption="{res:cantidad}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_ent_alm_general1cantidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="58" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="observacion" fieldSource="observacion" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:observacion}" caption="{res:observacion}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_ent_alm_general1observacion" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<Navigator id="59" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardPageSize="False" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
<Button id="60" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Submit" operation="Submit" wizardCaption="{res:CCS_Update}" wizardTheme="Blueprint" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentdetail_ent_alm_general1Button_Submit" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
</Components>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Hide-Show Component" actionCategory="General" id="61" action="Hide" conditionType="Parameter" dataType="Integer" componentName="Button_Submit" condition="Equal" name1="1" sourceType1="Expression" name2="1" sourceType2="Expression"/>
</Actions>
</Event>
</Events>
<TableParameters>
<TableParameter id="62" conditionType="Parameter" useIsNull="False" dataType="Integer" parameterSource="id_ent_alm_general" parameterType="URL" field="id_ent_alm_general" defaultValue="0" logicOperator="And" searchConditionType="Equal" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="47" tableName="detail_ent_alm_general"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields>
<PKField id="48" tableName="detail_ent_alm_general" fieldName="id" dataType="Integer"/>
</PKFields>
<ISPParameters/>
<ISQLParameters/>
<IFormElements>
<CustomParameter id="63" field="id_producto" dataType="Integer" parameterType="Control" parameterSource="id_producto"/>
<CustomParameter id="64" field="cantidad" dataType="Integer" parameterType="Control" parameterSource="cantidad"/>
<CustomParameter id="65" field="observacion" dataType="Integer" parameterType="Control" parameterSource="observacion"/>
<CustomParameter id="66" field="id_ent_alm_general" dataType="Integer" parameterSource="id_ent_alm_general" parameterType="URL"/>
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
		<CodeFile id="Events" language="PHPTemplates" name="detail_ent_AlmGeneral_events.php" forShow="False" comment="//" codePage="windows-1252"/>
<CodeFile id="Code" language="PHPTemplates" name="detail_ent_AlmGeneral.php" forShow="True" url="detail_ent_AlmGeneral.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
<CachingParameters/>
<Attributes/>
<Features/>
<Events/>
</Page>
