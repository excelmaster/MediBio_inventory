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
				<Record id="6" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_general" connection="Connection1" dataSource="ent_alm_general" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:ent_alm_general_RecordForm}" wizardTheme="Compact" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="Record" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Users/betofierro/Documents/GitHub/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentent_alm_general" wizardThemeVersion="3.0" UseMasterRecord="UseExistRecordMaster" masterDetailType="Separate" ExistingMasterRecord="6" AddButtons="True" composition="47" isParent="True" wizardLinkField="id_ent_alm_general">
					<Components>
						<Button id="8" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Compact" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="Contentent_alm_generalButton_Insert" wizardThemeVersion="3.0" returnPage="ent_alm_general.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="9" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Compact" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentent_alm_generalButton_Update" wizardThemeVersion="3.0" returnPage="ent_alm_general.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="10" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Compact" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" PathID="Contentent_alm_generalButton_Cancel" wizardThemeVersion="3.0" returnPage="ent_alm_general.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="12" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fecha_proceso" fieldSource="fecha_proceso" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fecha_proceso}" caption="{res:fecha_proceso}" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentent_alm_generalfecha_proceso" wizardThemeVersion="3.0" DBFormat="yyyy-mm-dd HH:nn:ss">
							<Components/>
							<Events/>
							<Attributes/>
							<Features>
								<InlineDatePicker id="13" enabled="Yes" name="InlineDatePicker1" category="YahooUI">
									<Components/>
									<Events/>
									<ControlPoints/>
									<Features/>
								</InlineDatePicker>
							</Features>
						</TextBox>
						<ListBox id="14" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="Orden_compra" fieldSource="Orden_compra" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:Orden_compra}" caption="{res:Orden_compra}" required="False" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="orden_compra" boundColumn="Id" textColumn="Documento_Contable" PathID="Contentent_alm_generalOrden_compra" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="15" tableName="orden_compra"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="observaciones" fieldSource="observaciones" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:observaciones}" caption="{res:observaciones}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentent_alm_generalobservaciones" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="17" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="activa" fieldSource="activa" wizardTheme="Compact" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:activa}" caption="{res:activa}" required="False" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="Si;Si;No;No" PathID="Contentent_alm_generalactiva" wizardThemeVersion="3.0">
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
					<Events>
<Event name="BeforeExecuteInsert" type="Server">
<Actions>
<Action actionName="Master Detail Validate" actionCategory="General" id="35" detailsComponentName="detail_ent_alm_general"/>
</Actions>
</Event>
<Event name="OnSubmit" type="Client">
<Actions>
<Action actionName="Get Data From Form" actionCategory="General" id="36" detailForm="detail_ent_alm_general"/>
</Actions>
</Event>
</Events>
					<TableParameters>
						<TableParameter id="11" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="7" tableName="ent_alm_general"/>
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
		<CodeFile id="Code" language="PHPTemplates" name="Crud_entAlmGeneral.php" forShow="True" url="Crud_entAlmGeneral.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="Crud_entAlmGeneral_events.php" forShow="False" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
