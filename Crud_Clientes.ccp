<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content" wizardTheme="Blueprint" wizardThemeVersion="3.0">
			<Components>
				<Record id="6" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="clientes1" connection="Connection1" dataSource="clientes" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:clientes_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Users/Usuario.Usuario-PC/Documents/Humberto/CodeChargeStudio5_xyz/Projects/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentclientes1" wizardThemeVersion="3.0" composition="13">
					<Components>
						<Button id="7" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="Contentclientes1Button_Insert" wizardThemeVersion="3.0" returnPage="Clientes_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="8" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentclientes1Button_Update" wizardThemeVersion="3.0" returnPage="Clientes_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="9" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" PathID="Contentclientes1Button_Cancel" wizardThemeVersion="3.0" returnPage="Clientes_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="10" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="prinombre" fieldSource="prinombre" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:prinombre}" caption="{res:prinombre}" required="True" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1prinombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="11" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="demasnombres" fieldSource="demasnombres" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:demasnombres}" caption="{res:demasnombres}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1demasnombres" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="12" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="priapellido" fieldSource="priapellido" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:priapellido}" caption="{res:priapellido}" required="True" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1priapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="13" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="segapellido" fieldSource="segapellido" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:segapellido}" caption="{res:segapellido}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1segapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="14" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Text" returnValueType="Number" name="tipo_documento" fieldSource="tipo_documento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:tipo_documento}" caption="{res:tipo_documento}" required="True" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="tipo_doc" boundColumn="id_tip_doc" textColumn="sigla_tipDoc" PathID="Contentclientes1tipo_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="15" tableName="tipo_doc"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="num_documento" fieldSource="num_documento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:num_documento}" caption="{res:num_documento}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1num_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="17" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="lugar_nacimiento" fieldSource="lugar_nacimiento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:lugar_nacimiento}" caption="{res:lugar_nacimiento}" required="True" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="munc_dane" boundColumn="Id" textColumn="Munc_Depto" PathID="Contentclientes1lugar_nacimiento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="18" tableName="munc_dane"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="19" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fecha_nacimiento" fieldSource="fecha_nacimiento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fecha_nacimiento}" caption="{res:fecha_nacimiento}" required="False" format="yyyy/mm/dd" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentclientes1fecha_nacimiento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features>
								<InlineDatePicker id="20" enabled="Yes" name="InlineDatePicker2" category="YahooUI" featureNameChanged="No">
									<Components/>
									<Events/>
									<ControlPoints/>
									<Features/>
								</InlineDatePicker>
							</Features>
						</TextBox>
						<ListBox id="21" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="lugar_residencia" fieldSource="lugar_residencia" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:lugar_residencia}" caption="{res:lugar_residencia}" required="False" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="munc_dane" boundColumn="Id" textColumn="Munc_Depto" PathID="Contentclientes1lugar_residencia" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="22" tableName="munc_dane"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="23" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_residencia" fieldSource="direccion_residencia" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:direccion_residencia}" caption="{res:direccion_residencia}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentclientes1direccion_residencia" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="24" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_cliente_1" fieldSource="telfijo_cliente_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_cliente_1}" caption="{res:telfijo_cliente_1}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1telfijo_cliente_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="25" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_cliente_2" fieldSource="telfijo_cliente_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_cliente_2}" caption="{res:telfijo_cliente_2}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1telfijo_cliente_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="26" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_cliente_3" fieldSource="telfijo_cliente_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_cliente_3}" caption="{res:telfijo_cliente_3}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1telfijo_cliente_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="27" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_cliente_1" fieldSource="celular_cliente_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_cliente_1}" caption="{res:celular_cliente_1}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1celular_cliente_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="28" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_cliente_2" fieldSource="celular_cliente_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_cliente_2}" caption="{res:celular_cliente_2}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1celular_cliente_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="29" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_cliente_3" fieldSource="celular_cliente_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_cliente_3}" caption="{res:celular_cliente_3}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1celular_cliente_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="30" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="email_cliente_1" fieldSource="email_cliente_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:email_cliente_1}" caption="{res:email_cliente_1}" required="False" unique="False" wizardSize="50" wizardMaxLength="150" PathID="Contentclientes1email_cliente_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="31" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="email_cliente_2" fieldSource="email_cliente_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:email_cliente_2}" caption="{res:email_cliente_2}" required="False" unique="False" wizardSize="50" wizardMaxLength="150" PathID="Contentclientes1email_cliente_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="32" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="email_cliente_3" fieldSource="email_cliente_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:email_cliente_3}" caption="{res:email_cliente_3}" required="False" unique="False" wizardSize="50" wizardMaxLength="150" PathID="Contentclientes1email_cliente_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<DatePicker id="35" name="DatePicker_fecha_nacimiento1" wizardTheme="Blueprint" wizardThemeType="File" wizardThemeVersion="3.0" PathID="Contentclientes1DatePicker_fecha_nacimiento1" control="fecha_nacimiento" wizardDatePickerType="Image" wizardPicture="{CCS_PathToMasterPage}/Images/DatePicker.png" wizardCaption="escoja una fecha">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</DatePicker>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="33" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="34" tableName="clientes"/>
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
				<Panel id="36" visible="True" name="Panel1" wizardTheme="Blueprint" wizardThemeType="File" wizardThemeVersion="3.0" PathID="ContentPanel1">
<Components>
<Label id="37" fieldSourceType="DBColumn" dataType="Text" html="False" name="Label1" wizardTheme="Blueprint" wizardThemeType="File" wizardThemeVersion="3.0" PathID="ContentPanel1Label1" defaultValue="&quot;Registro y edición de clientes&quot;">
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
		<CodeFile id="Code" language="PHPTemplates" name="Crud_Clientes.php" forShow="True" url="Crud_Clientes.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
