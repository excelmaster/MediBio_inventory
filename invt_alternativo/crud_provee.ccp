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
				<Record id="6" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="proveedores1" connection="Connection1" dataSource="proveedores" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:proveedores_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Users/Usuario.Usuario-PC/Documents/Humberto/CodeChargeStudio5_xyz/Projects/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentproveedores1" wizardThemeVersion="3.0" composition="15">
					<Components>
						<Button id="7" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="Contentproveedores1Button_Insert" wizardThemeVersion="3.0" returnPage="provee_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="8" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentproveedores1Button_Update" wizardThemeVersion="3.0" returnPage="provee_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="9" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" PathID="Contentproveedores1Button_Cancel" wizardThemeVersion="3.0" returnPage="provee_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="10" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="razon_social" fieldSource="razon_social" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:razon_social}" caption="{res:razon_social}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproveedores1razon_social" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="11" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="nombre" fieldSource="nombre" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:nombre}" caption="{res:nombre}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproveedores1nombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="12" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="nit" fieldSource="nit" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:nit}" caption="{res:nit}" required="False" unique="False" wizardSize="11" wizardMaxLength="11" PathID="Contentproveedores1nit" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="13" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="slogan" fieldSource="slogan" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:slogan}" caption="{res:slogan}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproveedores1slogan" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="14" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_1" fieldSource="direccion_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:direccion_1}" caption="{res:direccion_1}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproveedores1direccion_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="15" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_2" fieldSource="direccion_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:direccion_2}" caption="{res:direccion_2}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproveedores1direccion_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_3" fieldSource="direccion_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:direccion_3}" caption="{res:direccion_3}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproveedores1direccion_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="17" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_1" fieldSource="telfijo_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_1}" caption="{res:telfijo_1}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentproveedores1telfijo_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="18" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_2" fieldSource="telfijo_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_2}" caption="{res:telfijo_2}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentproveedores1telfijo_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="19" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_3" fieldSource="telfijo_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_3}" caption="{res:telfijo_3}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentproveedores1telfijo_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="20" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_1" fieldSource="celular_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_1}" caption="{res:celular_1}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentproveedores1celular_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="21" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_2" fieldSource="celular_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_2}" caption="{res:celular_2}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentproveedores1celular_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="22" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_3" fieldSource="celular_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_3}" caption="{res:celular_3}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentproveedores1celular_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="23" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="representante_legal" fieldSource="representante_legal" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:representante_legal}" caption="{res:representante_legal}" required="False" unique="False" wizardSize="50" wizardMaxLength="150" PathID="Contentproveedores1representante_legal" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="24" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="25" tableName="proveedores"/>
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
		<CodeFile id="Code" language="PHPTemplates" name="crud_provee.php" forShow="True" url="crud_provee.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
