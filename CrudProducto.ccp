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
				<Record id="6" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="productos" connection="Connection1" dataSource="productos" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id_producto" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="Ingresar o editar Productos " wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="True" recordDirection="Vertical" templatePageRecord="C:/Documents and Settings/Usuario/Mis documentos/CodeCharge Studio 5 Projects/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentproductos" wizardThemeVersion="3.0" composition="12">
					<Components>
						<Button id="7" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="ContentproductosButton_Insert" wizardThemeVersion="3.0" returnPage="productos_mant.ccp">
							<Components/>
							<Events>
<Event name="OnClick" type="Server">
<Actions>
<Action actionName="Custom Code" actionCategory="General" id="27"/>
</Actions>
</Event>
</Events>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="8" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="ContentproductosButton_Update" wizardThemeVersion="3.0" returnPage="productos_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="9" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" PathID="ContentproductosButton_Cancel" wizardThemeVersion="3.0" returnPage="productos_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="10" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="name_producto" fieldSource="name_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:name_producto}" caption="{res:name_producto}" required="True" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductosname_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="11" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="categoria_producto_id" fieldSource="categoria_producto_id" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:categoria_producto_id}" caption="{res:categoria_producto_id}" required="True" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="categoria_productos" boundColumn="id" textColumn="categoria_descrip" PathID="Contentproductoscategoria_producto_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="12" tableName="categoria_productos"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<ListBox id="13" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="unidad_medida_id" fieldSource="unidad_medida_id" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:unidad_medida_id}" caption="{res:unidad_medida_id}" required="True" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="unidadesmedida" boundColumn="id" textColumn="descrp_unidad" PathID="Contentproductosunidad_medida_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="14" tableName="unidadesmedida"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="15" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="cantidad_producto" fieldSource="cantidad_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:cantidad_producto}" caption="{res:cantidad_producto}" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentproductoscantidad_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="descripcion_producto" fieldSource="descripcion_producto" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:descripcion_producto}" caption="{res:descripcion_producto}" required="True" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductosdescripcion_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="17" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="activo" fieldSource="activo" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:activo}" caption="{res:activo}" required="False" unique="False" wizardSize="4" wizardMaxLength="4" PathID="Contentproductosactivo" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="18" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="min_stock" fieldSource="min_stock" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:min_stock}" caption="{res:min_stock}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentproductosmin_stock" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="19" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="max_stock" fieldSource="max_stock" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:max_stock}" caption="{res:max_stock}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentproductosmax_stock" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="20" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="nivel_pedido" fieldSource="nivel_pedido" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:nivel_pedido}" caption="{res:nivel_pedido}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentproductosnivel_pedido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="21" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="img_producto_1" fieldSource="img_producto_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:img_producto_1}" caption="{res:img_producto_1}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductosimg_producto_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="22" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="img_producto_2" fieldSource="img_producto_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:img_producto_2}" caption="{res:img_producto_2}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductosimg_producto_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="23" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="img_producto_3" fieldSource="img_producto_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:img_producto_3}" caption="{res:img_producto_3}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductosimg_producto_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
					</Components>
					<Events>
<Event name="BeforeExecuteInsert" type="Server">
<Actions>
<Action actionName="Print Text" actionCategory="General" id="26" expr="&quot;antes de insertar&quot;"/>
</Actions>
</Event>
</Events>
					<TableParameters>
						<TableParameter id="24" conditionType="Parameter" useIsNull="False" field="id_producto" parameterSource="id_producto" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="25" tableName="productos"/>
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
		<CodeFile id="Code" language="PHPTemplates" name="CrudProducto.php" forShow="True" url="CrudProducto.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="CrudProducto_events.php" forShow="False" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
