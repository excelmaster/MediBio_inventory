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
<Record id="6" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="unidadesmedida1" connection="Connection1" dataSource="unidadesmedida" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="button" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:unidadesmedida_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Users/betofierro/Documents/GitHub/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentunidadesmedida1" wizardThemeVersion="3.0" composition="20">
<Components>
<Button id="7" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" PathID="Contentunidadesmedida1Button_Insert" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="8" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" PathID="Contentunidadesmedida1Button_Update" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="9" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" PathID="Contentunidadesmedida1Button_Cancel" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="10" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="descrp_unidad" fieldSource="descrp_unidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:descrp_unidad}" caption="{res:descrp_unidad}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentunidadesmedida1descrp_unidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="11" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="obsv_unidad" fieldSource="obsv_unidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:obsv_unidad}" caption="{res:obsv_unidad}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentunidadesmedida1obsv_unidad" wizardThemeVersion="3.0">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
</Components>
<Events/>
<TableParameters>
<TableParameter id="12" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="13" tableName="unidadesmedida"/>
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
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
