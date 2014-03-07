<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
<EditableGrid id="6" urlType="Relative" secured="False" emptyRows="3" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" sourceType="Table" defaultPageSize="20" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="detail_ent_alm_general" connection="Connection1" dataSource="detail_ent_alm_general" pageSizeLimit="100" wizardGridPageSize="True" wizardUseSearch="False" allowCancel="True" wizardSubmitConfirmation="False" wizardCaption="{res:detail_ent_alm_general_EditableGridForm}" wizardTheme="Compact" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAltRecord="False" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridKey="id" wizardGridPaging="Simple" wizardAddNbsp="False" wizardTotalRecords="True" wizardButtonsType="button" changedCaptionEditableGrid="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardType="EditableGrid" wizardThemeApplyTo="Component" addTemplatePanel="False" PathID="Contentdetail_ent_alm_general" wizardThemeVersion="3.0">
<Components>
<Label id="10" fieldSourceType="DBColumn" dataType="Text" html="False" name="detail_ent_alm_general_TotalRecords" wizardTheme="Compact" wizardUseTemplateBlock="False" PathID="Contentdetail_ent_alm_generaldetail_ent_alm_general_TotalRecords" wizardThemeVersion="3.0">
<Components/>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Retrieve number of records" actionCategory="Database" id="11"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Label>
<Sorter id="12" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_generalSorter_id" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="13" visible="True" name="Sorter_id_ent_alm_general" column="id_ent_alm_general" wizardCaption="{res:id_ent_alm_general}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="id_ent_alm_general" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_generalSorter_id_ent_alm_general" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="14" visible="True" name="Sorter_id_producto" column="id_producto" wizardCaption="{res:id_producto}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="id_producto" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_generalSorter_id_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="15" visible="True" name="Sorter_cantidad" column="cantidad" wizardCaption="{res:cantidad}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="cantidad" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_generalSorter_cantidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="16" visible="True" name="Sorter_observacion" column="observacion" wizardCaption="{res:observacion}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="observacion" wizardAddNbsp="False" PathID="Contentdetail_ent_alm_generalSorter_observacion" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Label id="17" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:id}" PathID="Contentdetail_ent_alm_generalid" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
<ListBox id="18" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="id_ent_alm_general" fieldSource="id_ent_alm_general" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardEmptyCaption="{res:CCS_SelectValue}" wizardCaption="{res:id_ent_alm_general}" caption="{res:id_ent_alm_general}" required="False" unique="False" connection="Connection1" dataSource="ent_alm_general" boundColumn="id" textColumn="id" PathID="Contentdetail_ent_alm_generalid_ent_alm_general" wizardThemeVersion="3.0">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="19" posHeight="168" posLeft="10" posTop="10" posWidth="116" schemaName="u392883857_inven" tableName="ent_alm_general"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="20" fieldName="id" tableName="ent_alm_general"/>
</Fields>
<PKFields>
<PKField id="21" dataType="Integer" fieldName="id" tableName="ent_alm_general"/>
</PKFields>
<Attributes/>
<Features/>
</ListBox>
<ListBox id="22" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="id_producto" fieldSource="id_producto" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardEmptyCaption="{res:CCS_SelectValue}" wizardCaption="{res:id_producto}" caption="{res:id_producto}" required="False" unique="False" connection="Connection1" dataSource="productos" boundColumn="id_producto" textColumn="name_producto" PathID="Contentdetail_ent_alm_generalid_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="23" tableName="productos"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields/>
<Attributes/>
<Features/>
</ListBox>
<TextBox id="24" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="cantidad" fieldSource="cantidad" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:cantidad}" caption="{res:cantidad}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_ent_alm_generalcantidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="25" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="observacion" fieldSource="observacion" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:observacion}" caption="{res:observacion}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentdetail_ent_alm_generalobservacion" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<Navigator id="26" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardPageSize="True" wizardTheme="Compact" wizardImagesScheme="Compact" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
<Button id="27" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Submit" operation="Submit" wizardCaption="{res:CCS_Update}" wizardTheme="Compact" PathID="Contentdetail_ent_alm_generalButton_Submit" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="28" urlType="Relative" enableValidation="False" isDefault="False" name="Cancel" operation="Cancel" wizardCaption="{res:CCS_Cancel}" wizardTheme="Compact" PathID="Contentdetail_ent_alm_generalCancel" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
</Components>
<Events/>
<TableParameters>
<TableParameter id="8" conditionType="Parameter" useIsNull="False" dataType="Integer" field="id_ent_alm_general" logicOperator="And" parameterSource="id_ent_alm_general" parameterType="URL" searchConditionType="Equal"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="29" tableName="detail_ent_alm_general"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields>
<PKField id="9" tableName="detail_ent_alm_general" fieldName="id" dataType="Integer"/>
</PKFields>
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
		<CodeFile id="Code" language="PHPTemplates" name="ent_alm_detalle.php" forShow="True" url="ent_alm_detalle.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="ent_alm_detalle_events.php" forShow="False" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
