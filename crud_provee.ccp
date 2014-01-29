<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" needGeneration="0" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp">
	<Components>
		<Panel id="49" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="51" visible="True" name="Menu" contentPlaceholder="Menu">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="52" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
			<Components>
				<Link id="53" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="provee_mant.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver a Proveedores','textSourceDB':'','hrefSource':'provee_mant.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Link id="54" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link2" PathID="Sidebar1Link2" hrefSource="rpt_provee.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Ir a reporte de proveedores','textSourceDB':'','hrefSource':'rpt_provee.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
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
		<Panel id="50" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Record id="30" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="proveedores1" connection="Connection1" dataSource="proveedores" PathID="Contentproveedores1">
					<Components>
						<Button id="33" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" PathID="Contentproveedores1Button_Insert" returnPage="provee_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="34" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" PathID="Contentproveedores1Button_Update" returnPage="provee_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="35" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" PathID="Contentproveedores1Button_Cancel" returnPage="provee_mant.ccp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="36" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="razon_social" caption="{res:razon_social}" fieldSource="razon_social" required="False" unique="False" PathID="Contentproveedores1razon_social">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="37" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="nombre" caption="{res:nombre}" fieldSource="nombre" required="False" unique="False" PathID="Contentproveedores1nombre">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="38" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="nit" caption="{res:nit}" fieldSource="nit" required="False" unique="False" PathID="Contentproveedores1nit">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="39" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="slogan" caption="{res:slogan}" fieldSource="slogan" required="False" unique="False" PathID="Contentproveedores1slogan">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="40" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_1" caption="{res:direccion_1}" fieldSource="direccion_1" required="False" unique="False" PathID="Contentproveedores1direccion_1">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="41" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_2" caption="{res:direccion_2}" fieldSource="direccion_2" required="False" unique="False" PathID="Contentproveedores1direccion_2">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="42" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_3" caption="{res:direccion_3}" fieldSource="direccion_3" required="False" unique="False" PathID="Contentproveedores1direccion_3">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="43" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_1" caption="{res:telfijo_1}" fieldSource="telfijo_1" required="False" unique="False" PathID="Contentproveedores1telfijo_1">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="44" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_2" caption="{res:telfijo_2}" fieldSource="telfijo_2" required="False" unique="False" PathID="Contentproveedores1telfijo_2">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="45" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_3" caption="{res:telfijo_3}" fieldSource="telfijo_3" required="False" unique="False" PathID="Contentproveedores1telfijo_3">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="46" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_1" caption="{res:celular_1}" fieldSource="celular_1" required="False" unique="False" PathID="Contentproveedores1celular_1">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="47" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_2" caption="{res:celular_2}" fieldSource="celular_2" required="False" unique="False" PathID="Contentproveedores1celular_2">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="48" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_3" caption="{res:celular_3}" fieldSource="celular_3" required="False" unique="False" PathID="Contentproveedores1celular_3">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="32" conditionType="Parameter" useIsNull="False" field="id" dataType="Integer" searchConditionType="Equal" parameterType="URL" parameterSource="id" logicOperator="And" orderNumber="1"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="31" tableName="proveedores"/>
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
