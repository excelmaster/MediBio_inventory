<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
<<<<<<< HEAD
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Grid id="76" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="ent_alm_general1" connection="Connection1" dataSource="ent_alm_general" orderBy="id" pageSizeLimit="100" pageSize="True" wizardCaption="{res:ent_alm_general_GridForm}" wizardTheme="Compact" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="True" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="id" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="44" isParent="True">
					<Components>
						<Link id="79" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ent_alm_general1_Insert" hrefSource="Crud_entAlmGeneral.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_Insert" wizardTheme="Compact" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_InsertLink}','textSourceDB':'','hrefSource':'Crud_entAlmGeneral.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="80" fieldSourceType="DBColumn" dataType="Text" html="False" name="ent_alm_general1_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_TotalRecords" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components/>
							<Events>
								<Event name="BeforeShow" type="Server">
									<Actions>
										<Action actionName="Retrieve number of records" actionCategory="Database" id="81"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Label>
						<Panel id="82" visible="True" name="Header_id" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="83" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_idSorter_id" wizardThemeVersion="3.0">
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
						<Panel id="84" visible="True" name="Header_fecha_proceso" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="85" visible="True" name="Sorter_fecha_proceso" column="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="fecha_proceso" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_fecha_procesoSorter_fecha_proceso" wizardThemeVersion="3.0">
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
						<Panel id="86" visible="True" name="Header_Orden_compra" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="87" visible="True" name="Sorter_Orden_compra" column="Orden_compra" wizardCaption="{res:Orden_compra}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="Orden_compra" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_Orden_compraSorter_Orden_compra" wizardThemeVersion="3.0">
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
						<Panel id="88" visible="True" name="Header_observaciones" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="89" visible="True" name="Sorter_observaciones" column="observaciones" wizardCaption="{res:observaciones}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="observaciones" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_observacionesSorter_observaciones" wizardThemeVersion="3.0">
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
						<Panel id="90" visible="True" name="Header_activa" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="91" visible="True" name="Sorter_activa" column="activa" wizardCaption="{res:activa}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="activa" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_activaSorter_activa" wizardThemeVersion="3.0">
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
						<Panel id="93" visible="True" name="Data_id" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Link id="94" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="id" fieldSource="id" hrefSource="Crud_entAlmGeneral.ccp" PathID="Contentent_alm_general1Data_idid" linkProperties="{'textSource':'Productos ','textSourceDB':'id','hrefSource':'Crud_entAlmGeneral.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'1':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'2':{'sourceType':'URL','parameterSource':'id','parameterName':'id'},'3':{'sourceType':'URL','parameterSource':'id','parameterName':'id'},'4':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'5':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'length':6,'objectType':'linkParameters'}}" wizardUseTemplateBlock="False">
=======
<Components/>
<Events/>
<Attributes/>
<Features/>
</Panel>
<<<<<<< HEAD
<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
<Components>
<Record id="6" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_almc_general" connection="Connection1" dataSource="ent_almc_general" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:ent_almc_general_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="MasterDetails" changedCaptionRecord="False" recordDirection="Vertical" masterAddTemplatePanel="False" ChooseDetailForm="Record" PathID="Contentent_almc_general" wizardThemeVersion="3.0" UseMasterRecord="UseNewRecordMaster" masterDetailType="Separate" composition="17" isParent="True" wizardLinkField="id">
<Components>
<Panel id="8" visible="True" name="Hide_Panel" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Button id="10" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="Contentent_almc_generalHide_PanelButton_Insert" wizardThemeVersion="3.0">
=======
<Panel id="4" visible="True" name="Menu" contentPlaceholder="Menu">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Button>
<Button id="11" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentent_almc_generalHide_PanelButton_Update" wizardThemeVersion="3.0">
=======
</Panel>
<Panel id="5" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
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
=======
</Panel>
<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
<Components>
<Grid id="6" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="ent_alm_general1" connection="Connection1" dataSource="ent_alm_general" pageSizeLimit="100" pageSize="True" wizardCaption="{res:ent_alm_general_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="True" wizardType="GridRecord" wizardGridRecordLinkFieldType="custom" wizardGridRecordLinkField="{res:CCS_CustomLinkField}" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="30" isParent="True">
<Components>
<Link id="13" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ent_alm_general1_Insert" hrefSource="ent_alm_general.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
<Label id="14" fieldSourceType="DBColumn" dataType="Text" html="False" name="ent_alm_general1_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Retrieve number of records" actionCategory="Database" id="15"/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
<<<<<<< HEAD
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
=======
</Label>
<Panel id="16" visible="True" name="Header_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="17" visible="True" name="Header_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="18" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_idSorter_id" wizardThemeVersion="3.0">
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
<Panel id="19" visible="True" name="Header_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="20" visible="True" name="Sorter_fecha_proceso" column="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="fecha_proceso" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_fecha_procesoSorter_fecha_proceso" wizardThemeVersion="3.0">
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
<Panel id="21" visible="True" name="Header_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="22" visible="True" name="Sorter_num_factura" column="num_factura" wizardCaption="{res:num_factura}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="num_factura" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_num_facturaSorter_num_factura" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</TextBox>
<TextBox id="17" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_producto" fieldSource="id_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:id_producto}" caption="{res:id_producto}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_almc_generalid_producto" wizardThemeVersion="3.0">
=======
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="23" visible="True" name="Header_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="24" visible="True" name="Sorter_observaciones" column="observaciones" wizardCaption="{res:observaciones}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="observaciones" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_observacionesSorter_observaciones" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</TextBox>
<TextBox id="18" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="cantidad" fieldSource="cantidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:cantidad}" caption="{res:cantidad}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_almc_generalcantidad" wizardThemeVersion="3.0">
=======
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="25" visible="True" name="Header_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Sorter id="26" visible="True" name="Sorter_activa" column="activa" wizardCaption="{res:activa}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="activa" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_activaSorter_activa" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
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
=======
</Sorter>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="27" visible="True" name="Data_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Link id="28" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Detail" wizardCaption="{res:Detail}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" hrefSource="ent_alm_general.ccp" wizardThemeItem="GridA" PathID="Contentent_alm_general1Data_DetailDetail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<LinkParameters>
<LinkParameter id="29" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
</LinkParameters>
<Attributes/>
<Features/>
</Link>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="30" visible="True" name="Data_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="31" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_idid" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
<Panel id="32" visible="True" name="Data_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="33" fieldSourceType="DBColumn" dataType="Date" html="False" name="fecha_proceso" fieldSource="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_fecha_procesofecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Sorter>
<Sorter id="25" visible="True" name="Sorter_id_producto" column="id_producto" wizardCaption="{res:id_producto}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id_producto" wizardAddNbsp="False" PathID="Contentdetail_entalmgeneralSorter_id_producto" wizardThemeVersion="3.0">
=======
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="34" visible="True" name="Data_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="35" fieldSourceType="DBColumn" dataType="Text" html="False" name="num_factura" fieldSource="num_factura" wizardCaption="{res:num_factura}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_num_facturanum_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Sorter>
<Sorter id="26" visible="True" name="Sorter_cantidad" column="cantidad" wizardCaption="{res:cantidad}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="cantidad" wizardAddNbsp="False" PathID="Contentdetail_entalmgeneralSorter_cantidad" wizardThemeVersion="3.0">
=======
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="36" visible="True" name="Data_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="37" fieldSourceType="DBColumn" dataType="Text" html="False" name="observaciones" fieldSource="observaciones" wizardCaption="{res:observaciones}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_observacionesobservaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Sorter>
<TextBox id="27" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_EntAlmGeneral" fieldSource="id_EntAlmGeneral" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:id_EntAlmGeneral}" caption="{res:id_EntAlmGeneral}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_entalmgeneralid_EntAlmGeneral" wizardThemeVersion="3.0">
=======
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="38" visible="True" name="Data_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="39" fieldSourceType="DBColumn" dataType="Text" html="False" name="activa" fieldSource="activa" wizardCaption="{res:activa}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_activaactiva" wizardTheme="Blueprint" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</TextBox>
<TextBox id="28" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="id_producto" fieldSource="id_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:id_producto}" caption="{res:id_producto}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_entalmgeneralid_producto" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="29" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="cantidad" fieldSource="cantidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardCaption="{res:cantidad}" caption="{res:cantidad}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentdetail_entalmgeneralcantidad" wizardThemeVersion="3.0">
=======
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="40" visible="True" name="Data_Alt_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Link id="41" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Alt_Detail" wizardCaption="{res:Detail}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" wizardDefaultValue="{res:CCS_CustomLinkField}" hrefSource="ent_alm_general.ccp" wizardThemeItem="FooterA" PathID="Contentent_alm_general1Data_Alt_DetailAlt_Detail" wizardThemeVersion="3.0">
>>>>>>> 0d9d85a9b3ba8ba0f7f763b55455aa47c1a421ab
<Components/>
<Events/>
<LinkParameters>
<LinkParameter id="95" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
</LinkParameters>
<Attributes/>
<Features/>
</Link>
</Components>
<<<<<<< HEAD
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="97" visible="True" name="Data_fecha_proceso" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="98" fieldSourceType="DBColumn" dataType="Date" html="False" name="fecha_proceso" fieldSource="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_fecha_procesofecha_proceso" wizardTheme="Compact" wizardThemeVersion="3.0" DBFormat="yyyy-mm-dd HH:nn:ss">
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
						<Panel id="100" visible="True" name="Data_Orden_compra" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="101" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Orden_compra" fieldSource="Orden_compra" wizardCaption="{res:Orden_compra}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Orden_compraOrden_compra" wizardTheme="Compact" wizardThemeVersion="3.0">
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
						<Panel id="103" visible="True" name="Data_observaciones" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="104" fieldSourceType="DBColumn" dataType="Text" html="False" name="observaciones" fieldSource="observaciones" wizardCaption="{res:observaciones}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_observacionesobservaciones" wizardTheme="Compact" wizardThemeVersion="3.0">
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
						<Panel id="106" visible="True" name="Data_activa" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="107" fieldSourceType="DBColumn" dataType="Text" html="False" name="activa" fieldSource="activa" wizardCaption="{res:activa}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_activaactiva" wizardTheme="Compact" wizardThemeVersion="3.0">
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
						<Navigator id="108" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Compact" wizardImagesScheme="Compact" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events>
						<Event name="BeforeShowRow" type="Server">
							<Actions>
								<Action actionName="Set Row Style" actionCategory="General" id="92" styles="RowCompact;AltRowCompact" name="rowStyle"/>
							</Actions>
						</Event>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="115" searchForm="ent_alm_generalSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,fecha_proceso,Orden_compra,observaciones,activa"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="77" tableName="ent_alm_general"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="78" tableName="ent_alm_general" fieldName="id"/>
						<Field id="96" tableName="ent_alm_general" fieldName="fecha_proceso"/>
						<Field id="99" tableName="ent_alm_general" fieldName="Orden_compra"/>
						<Field id="102" tableName="ent_alm_general" fieldName="observaciones"/>
						<Field id="105" tableName="ent_alm_general" fieldName="activa"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="109" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_generalSearch" searchIds="109" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Compact" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="button" wizardDefaultButton="True" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="ent_alm_general.ccp" PathID="Contentent_alm_generalSearch" wizardThemeVersion="3.0" composition="44">
					<Components>
						<Link id="110" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="ent_alm_general.ccp" removeParameters="s_keyword;ent_alm_generalPageSize" wizardTheme="Compact" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="Contentent_alm_generalSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="111" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Compact" wizardCaption="{res:CCS_Search}" PathID="Contentent_alm_generalSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="112" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,fecha_proceso,Orden_compra,observaciones,activa" wizardTheme="Compact" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_alm_generalSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="113" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Compact" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="Contentent_alm_generalSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="114" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="ent_alm_generalPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Compact" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentent_alm_generalSearchent_alm_generalPageSize" wizardThemeVersion="3.0">
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
				<Link id="72" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Logout" hrefSource="login.ccp" wizardDefaultValue="{res:CCS_LogoutBtn}" PathID="MenuLogout">
					<Components/>
					<Events/>
					<LinkParameters>
						<LinkParameter id="73" sourceType="Expression" format="yyyy-mm-dd" name="Logout" source="&quot;True&quot;"/>
					</LinkParameters>
					<Attributes/>
					<Features/>
				</Link>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="5" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
			<Components>
				<Link id="74" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="almacen_main.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver al menú','textSourceDB':'','hrefSource':'almacen_main.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Link id="75" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link2" PathID="Sidebar1Link2" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Ingresar productos','textSourceDB':'','hrefSource':'ent_alm_detalle.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}" hrefSource="ent_alm_detalle.ccp">
					<Components/>
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
=======
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="43" visible="True" name="Data_Alt_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="44" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_id" fieldSource="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_idAlt_id" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</TextBox>
<Navigator id="30" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
=======
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="45" visible="True" name="Data_Alt_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="46" fieldSourceType="DBColumn" dataType="Date" html="False" name="Alt_fecha_proceso" fieldSource="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_fecha_procesoAlt_fecha_proceso" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Navigator>
<Button id="31" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Submit" operation="Submit" wizardCaption="{res:CCS_Update}" wizardTheme="Blueprint" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentdetail_entalmgeneralButton_Submit" wizardThemeVersion="3.0">
=======
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="47" visible="True" name="Data_Alt_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="48" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_num_factura" fieldSource="num_factura" wizardCaption="{res:num_factura}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_num_facturaAlt_num_factura" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
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
=======
</Label>
</Components>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="49" visible="True" name="Data_Alt_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="50" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_observaciones" fieldSource="observaciones" wizardCaption="{res:observaciones}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_observacionesAlt_observaciones" wizardThemeVersion="3.0">
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
<Panel id="51" visible="True" name="Data_Alt_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
<Components>
<Label id="52" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_activa" fieldSource="activa" wizardCaption="{res:activa}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_activaAlt_activa" wizardThemeVersion="3.0">
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
<Navigator id="53" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
</Components>
<Events>
<Event name="BeforeBuildSelect" type="Server">
<Actions>
<Action actionName="Advanced Search" actionCategory="General" id="60" searchForm="ent_alm_generalSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,fecha_proceso,num_factura,observaciones,activa"/>
</Actions>
</Event>
</Events>
<TableParameters/>
<JoinTables>
<JoinTable id="7" tableName="ent_alm_general"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="8" tableName="ent_alm_general" fieldName="id"/>
<Field id="9" tableName="ent_alm_general" fieldName="fecha_proceso"/>
<Field id="10" tableName="ent_alm_general" fieldName="num_factura"/>
<Field id="11" tableName="ent_alm_general" fieldName="observaciones"/>
<Field id="12" tableName="ent_alm_general" fieldName="activa"/>
</Fields>
<PKFields/>
<SPParameters/>
<SQLParameters/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Grid>
<Record id="54" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_generalSearch" searchIds="54" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="button" wizardDefaultButton="True" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="ent_alm_general.ccp" PathID="Contentent_alm_generalSearch" wizardThemeVersion="3.0" composition="30">
<Components>
<Link id="55" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="ent_alm_general.ccp" removeParameters="s_keyword;ent_alm_generalPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="Contentent_alm_generalSearchClearParameters" wizardThemeVersion="3.0">
<Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
<Button id="56" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" PathID="Contentent_alm_generalSearchButton_DoSearch" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="57" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,fecha_proceso,num_factura,observaciones,activa" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_alm_generalSearchs_keyword" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<ListBox id="58" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="Contentent_alm_generalSearchsearchConditions" wizardThemeVersion="3.0">
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
<ListBox id="59" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="ent_alm_generalPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentent_alm_generalSearchent_alm_generalPageSize" wizardThemeVersion="3.0">
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
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
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
=======
</Record>
<Record id="61" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_general2" connection="Connection1" dataSource="ent_alm_general" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="button" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:ent_alm_general_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Users/betofierro/Documents/GitHub/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentent_alm_general2" wizardThemeVersion="3.0" composition="30">
<Components>
<Button id="64" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" PathID="Contentent_alm_general2Button_Insert" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="65" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" PathID="Contentent_alm_general2Button_Cancel" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="66" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fecha_proceso" fieldSource="fecha_proceso" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fecha_proceso}" caption="{res:fecha_proceso}" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentent_alm_general2fecha_proceso" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features>
<InlineDatePicker id="67" enabled="Yes" name="InlineDatePicker1" category="YahooUI">
<Components/>
<Events/>
<ControlPoints/>
<Features/>
</InlineDatePicker>
</Features>
</TextBox>
<TextBox id="68" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="num_factura" fieldSource="num_factura" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:num_factura}" caption="{res:num_factura}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentent_alm_general2num_factura" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="69" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="observaciones" fieldSource="observaciones" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:observaciones}" caption="{res:observaciones}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentent_alm_general2observaciones" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</Panel>
<Panel id="5" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
=======
</TextBox>
<TextBox id="70" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="activa" fieldSource="activa" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:activa}" caption="{res:activa}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentent_alm_general2activa" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Components/>
<Events/>
<Attributes/>
<Features/>
<<<<<<< HEAD
=======
</TextBox>
</Components>
<Events/>
<TableParameters>
<TableParameter id="63" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="62" tableName="ent_alm_general"/>
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
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
</Panel>
</Components>
>>>>>>> 0d9d85a9b3ba8ba0f7f763b55455aa47c1a421ab
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
