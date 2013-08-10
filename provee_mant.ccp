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
				<Grid id="6" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="proveedores" connection="Connection1" dataSource="proveedores" orderBy="razon_social" pageSizeLimit="100" pageSize="True" wizardCaption="{res:proveedores_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="custom" wizardGridRecordLinkField="{res:CCS_CustomLinkField}" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="15" isParent="True">
					<Components>
						<Link id="9" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="proveedores_Insert" hrefSource="crud_provee.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentproveedoresproveedores_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_InsertLink}','textSourceDB':'','hrefSource':'crud_provee.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="10" fieldSourceType="DBColumn" dataType="Text" html="False" name="proveedores_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentproveedoresproveedores_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Sorter id="12" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="ContentproveedoresSorter_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="13" visible="True" name="Sorter_razon_social" column="razon_social" wizardCaption="{res:razon_social}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="razon_social" wizardAddNbsp="False" PathID="ContentproveedoresSorter_razon_social" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="14" visible="True" name="Sorter_nombre" column="nombre" wizardCaption="{res:nombre}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="nombre" wizardAddNbsp="False" PathID="ContentproveedoresSorter_nombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="15" visible="True" name="Sorter_nit" column="nit" wizardCaption="{res:nit}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="nit" wizardAddNbsp="False" PathID="ContentproveedoresSorter_nit" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Link id="16" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Detail" wizardCaption="{res:Detail}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" hrefSource="crud_provee.ccp" wizardThemeItem="GridA" PathID="ContentproveedoresDetail" wizardTheme="Blueprint" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_CustomLinkField}','textSourceDB':'','hrefSource':'crud_provee.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'length':1,'objectType':'linkParameters'}}" urlType="Relative">
<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="17" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="18" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentproveedoresid" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="20" fieldSourceType="DBColumn" dataType="Text" html="False" name="razon_social" fieldSource="razon_social" wizardCaption="{res:razon_social}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentproveedoresrazon_social" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="22" fieldSourceType="DBColumn" dataType="Text" html="False" name="nombre" fieldSource="nombre" wizardCaption="{res:nombre}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentproveedoresnombre" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="24" fieldSourceType="DBColumn" dataType="Text" html="False" name="nit" fieldSource="nit" wizardCaption="{res:nit}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentproveedoresnit" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Link id="25" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Alt_Detail" wizardCaption="{res:Detail}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" wizardDefaultValue="{res:CCS_CustomLinkField}" hrefSource="crud_provee.ccp" wizardThemeItem="FooterA" PathID="ContentproveedoresAlt_Detail" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_CustomLinkField}','textSourceDB':'','hrefSource':'crud_provee.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'length':1,'objectType':'linkParameters'}}" urlType="Relative">
<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="26" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="27" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_id" fieldSource="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="ContentproveedoresAlt_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="28" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_razon_social" fieldSource="razon_social" wizardCaption="{res:razon_social}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentproveedoresAlt_razon_social" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="29" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_nombre" fieldSource="nombre" wizardCaption="{res:nombre}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentproveedoresAlt_nombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="30" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_nit" fieldSource="nit" wizardCaption="{res:nit}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentproveedoresAlt_nit" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Navigator id="31" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="40" searchForm="proveedoresSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,razon_social,nombre,nit,slogan,direccion_1,direccion_2,direccion_3,telfijo_1,telfijo_2,telfijo_3,celular_1,celular_2,celular_3,representante_legal"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="7" tableName="proveedores"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="8" tableName="proveedores" fieldName="id"/>
						<Field id="19" tableName="proveedores" fieldName="razon_social"/>
						<Field id="21" tableName="proveedores" fieldName="nombre"/>
						<Field id="23" tableName="proveedores" fieldName="nit"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="32" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="proveedoresSearch" searchIds="32" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="True" gridSearchSortField="True" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="provee_mant.ccp" PathID="ContentproveedoresSearch" wizardThemeVersion="3.0" composition="15">
					<Components>
						<Link id="33" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="provee_mant.ccp" removeParameters="s_keyword;proveedoresOrder;proveedoresDir;proveedoresPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="ContentproveedoresSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="34" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="ContentproveedoresSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="35" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,razon_social,nombre,nit,slogan,direccion_1,direccion_2,direccion_3,telfijo_1,telfijo_2,telfijo_3,celular_1,celular_2,celular_3,representante_legal" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="ContentproveedoresSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="36" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="ContentproveedoresSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="37" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="proveedoresOrder" dataSource=";{res:CCS_SelectField};Sorter_id;{res:id};Sorter_razon_social;{res:razon_social};Sorter_nombre;{res:nombre};Sorter_nit;{res:nit}" wizardTheme="Blueprint" wizardCaption="{res:CCS_SortBy}" wizardThemeVersion="3.0">
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
						<ListBox id="38" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="proveedoresDir" dataSource=";{res:CCS_SelectOrder};ASC;{res:CCS_ASC};DESC;{res:CCS_DESC}" wizardTheme="Blueprint" wizardCaption=" " PathID="ContentproveedoresSearchproveedoresDir" wizardThemeVersion="3.0">
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
						<ListBox id="39" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="proveedoresPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="ContentproveedoresSearchproveedoresPageSize" wizardThemeVersion="3.0">
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
				<Panel id="41" visible="True" name="Panel1" PathID="ContentPanel1">
					<Components>
						<Label id="42" fieldSourceType="DBColumn" dataType="Text" html="False" name="Label1" PathID="ContentPanel1Label1" defaultValue="&quot;MANTENIMIENTO DE PROVEEDORES&quot;">
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
			<Components>
				<Link id="43" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="admin.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver al panel principal','textSourceDB':'','hrefSource':'admin.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Link id="44" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link2" PathID="Sidebar1Link2" hrefSource="rpt_provee.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Ir a pagina de reportes','textSourceDB':'','hrefSource':'rpt_provee.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
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
	<CodeFiles>
		<CodeFile id="Events" language="PHPTemplates" name="provee_mant_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="provee_mant.php" forShow="True" url="provee_mant.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
