<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" needGeneration="0" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Panel id="63" visible="True" name="Panel1" PathID="ContentPanel1">
					<Components>
						<Label id="64" fieldSourceType="DBColumn" dataType="Text" html="False" name="Label1" defaultValue="&quot;FORMULARIO DE MANTENIMIENTO DE PRODUCTOS&quot;" PathID="ContentPanel1Label1">
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
				<Grid id="68" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="unidadesmedida_productos" connection="Connection1" dataSource="categoria_productos, productos, unidadesmedida" orderBy="id_producto" pageSizeLimit="100" pageSize="True" wizardCaption="Listado de Productos" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="Extended" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="custom" wizardGridRecordLinkField="Detalles" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="True" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="12" isParent="True" editableComponentTypeString="Grid">
					<Components>
						<Link id="81" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="unidadesmedida_productos_Insert" hrefSource="CrudProducto.ccp" removeParameters="id_producto" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentunidadesmedida_productosunidadesmedida_productos_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_InsertLink}','textSourceDB':'','hrefSource':'CrudProducto.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="82" fieldSourceType="DBColumn" dataType="Text" html="False" name="unidadesmedida_productos_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentunidadesmedida_productosunidadesmedida_productos_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events>
								<Event name="BeforeShow" type="Server">
									<Actions>
										<Action actionName="Retrieve number of records" actionCategory="Database" id="83"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Label>
						<Sorter id="84" visible="True" name="Sorter_categoria_descrip" column="categoria_descrip" wizardCaption="{res:categoria_descrip}" wizardTheme="Blueprint" wizardSortingType="Extended" wizardControl="categoria_descrip" wizardAddNbsp="False" PathID="Contentunidadesmedida_productosSorter_categoria_descrip" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="85" visible="True" name="Sorter_name_producto" column="name_producto" wizardCaption="{res:name_producto}" wizardTheme="Blueprint" wizardSortingType="Extended" wizardControl="name_producto" wizardAddNbsp="False" PathID="Contentunidadesmedida_productosSorter_name_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="86" visible="True" name="Sorter_cantidad_producto" column="cantidad_producto" wizardCaption="{res:cantidad_producto}" wizardTheme="Blueprint" wizardSortingType="Extended" wizardControl="cantidad_producto" wizardAddNbsp="False" PathID="Contentunidadesmedida_productosSorter_cantidad_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="87" visible="True" name="Sorter_descripcion_producto" column="descripcion_producto" wizardCaption="{res:descripcion_producto}" wizardTheme="Blueprint" wizardSortingType="Extended" wizardControl="descripcion_producto" wizardAddNbsp="False" PathID="Contentunidadesmedida_productosSorter_descripcion_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="88" visible="True" name="Sorter_activo" column="activo" wizardCaption="{res:activo}" wizardTheme="Blueprint" wizardSortingType="Extended" wizardControl="activo" wizardAddNbsp="False" PathID="Contentunidadesmedida_productosSorter_activo" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="89" visible="True" name="Sorter_descrp_unidad" column="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardTheme="Blueprint" wizardSortingType="Extended" wizardControl="descrp_unidad" wizardAddNbsp="False" PathID="Contentunidadesmedida_productosSorter_descrp_unidad" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Link id="91" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Detail" wizardCaption="{res:Detail}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" hrefSource="CrudProducto.ccp" wizardThemeItem="GridA" PathID="Contentunidadesmedida_productosDetail" wizardTheme="Blueprint" wizardThemeVersion="3.0" urlType="Relative" linkProperties="{'textSource':'Detalles','textSourceDB':'','hrefSource':'CrudProducto.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id_producto','parameterName':'id_producto'},'1':{'sourceType':'DataField','parameterSource':'id_producto','parameterName':'id_producto'},'length':2,'objectType':'linkParameters'}}">
							<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="92" sourceType="DataField" format="yyyy-mm-dd" name="id_producto" source="id_producto"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="93" fieldSourceType="DBColumn" dataType="Text" html="False" name="categoria_descrip" fieldSource="categoria_descrip" wizardCaption="{res:categoria_descrip}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productoscategoria_descrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="94" fieldSourceType="DBColumn" dataType="Text" html="False" name="name_producto" fieldSource="name_producto" wizardCaption="{res:name_producto}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosname_producto" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="95" fieldSourceType="DBColumn" dataType="Integer" html="False" name="cantidad_producto" fieldSource="cantidad_producto" wizardCaption="{res:cantidad_producto}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentunidadesmedida_productoscantidad_producto" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="96" fieldSourceType="DBColumn" dataType="Text" html="False" name="descripcion_producto" fieldSource="descripcion_producto" wizardCaption="{res:descripcion_producto}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosdescripcion_producto" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="97" fieldSourceType="DBColumn" dataType="Integer" html="False" name="activo" fieldSource="activo" wizardCaption="{res:activo}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosactivo" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="98" fieldSourceType="DBColumn" dataType="Text" html="False" name="descrp_unidad" fieldSource="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosdescrp_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Link id="100" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Alt_Detail" wizardCaption="{res:Detail}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" wizardDefaultValue="Detalles" hrefSource="CrudProducto.ccp" wizardThemeItem="FooterA" PathID="Contentunidadesmedida_productosAlt_Detail" wizardThemeVersion="3.0" urlType="Relative" linkProperties="{'textSource':'Detalles','textSourceDB':'','hrefSource':'CrudProducto.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id_producto','parameterName':'id_producto'},'length':1,'objectType':'linkParameters'}}">
							<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="101" sourceType="DataField" format="yyyy-mm-dd" name="id_producto" source="id_producto"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="102" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_categoria_descrip" fieldSource="categoria_descrip" wizardCaption="{res:categoria_descrip}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosAlt_categoria_descrip" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="103" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_name_producto" fieldSource="name_producto" wizardCaption="{res:name_producto}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosAlt_name_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="104" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_cantidad_producto" fieldSource="cantidad_producto" wizardCaption="{res:cantidad_producto}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosAlt_cantidad_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="105" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_descripcion_producto" fieldSource="descripcion_producto" wizardCaption="{res:descripcion_producto}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosAlt_descripcion_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="106" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_activo" fieldSource="activo" wizardCaption="{res:activo}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosAlt_activo" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="107" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_descrp_unidad" fieldSource="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentunidadesmedida_productosAlt_descrp_unidad" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Navigator id="109" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
						<Link id="137" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="unidadesmedida_productos_Insert1" hrefSource="CrudProducto.ccp" removeParameters="id_producto" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentunidadesmedida_productosunidadesmedida_productos_Insert1" wizardTheme="Blueprint" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_InsertLink}','textSourceDB':'','hrefSource':'CrudProducto.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="116" searchForm="unidadesmedida_productos1" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="categoria_descrip,name_producto,cantidad_producto,descripcion_producto,activo,descrp_unidad"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="69" posHeight="136" posLeft="10" posTop="10" posWidth="144" schemaName="inventario_mb" tableName="categoria_productos"/>
						<JoinTable id="70" posHeight="180" posLeft="175" posTop="10" posWidth="160" schemaName="inventario_mb" tableName="productos"/>
						<JoinTable id="71" posHeight="104" posLeft="356" posTop="10" posWidth="96" schemaName="inventario_mb" tableName="unidadesmedida"/>
					</JoinTables>
					<JoinLinks>
						<JoinTable2 id="72" fieldLeft="productos.categoria_producto_id" fieldRight="categoria_productos.id" joinType="inner" tableLeft="productos" tableRight="categoria_productos"/>
						<JoinTable2 id="73" fieldLeft="productos.unidad_medida_id" fieldRight="unidadesmedida.id" joinType="inner" tableLeft="productos" tableRight="unidadesmedida"/>
					</JoinLinks>
					<Fields>
						<Field id="74" fieldName="categoria_descrip" tableName="categoria_productos"/>
						<Field id="75" fieldName="descrp_unidad" tableName="unidadesmedida"/>
						<Field id="76" fieldName="name_producto" tableName="productos"/>
						<Field id="77" fieldName="cantidad_producto" tableName="productos"/>
						<Field id="78" fieldName="descripcion_producto" tableName="productos"/>
						<Field id="79" fieldName="activo" tableName="productos"/>
						<Field id="80" fieldName="id_producto" tableName="productos"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="110" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="unidadesmedida_productos1" searchIds="110" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="True" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="productos_mant.ccp" PathID="Contentunidadesmedida_productos1" wizardThemeVersion="3.0" composition="12">
					<Components>
						<Link id="111" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="productos_mant.ccp" removeParameters="s_keyword;categoria_productos_produPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="Contentunidadesmedida_productos1ClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="112" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="Contentunidadesmedida_productos1Button_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="113" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="categoria_descrip,name_producto,cantidad_producto,descripcion_producto,activo,descrp_unidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentunidadesmedida_productos1s_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="114" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="Contentunidadesmedida_productos1searchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="115" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productos_produPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentunidadesmedida_productos1categoria_productos_produPageSize" wizardThemeVersion="3.0">
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
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="5" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
			<Components>
				<Link id="66" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="admin.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver al panel principal','textSourceDB':'','hrefSource':'admin.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Link id="67" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link2" PathID="Sidebar1Link2" hrefSource="rpt_productos.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Ir a pagina de reportes','textSourceDB':'','hrefSource':'rpt_productos.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
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
		<CodeFile id="Code" language="PHPTemplates" name="productos_mant.php" forShow="True" url="productos_mant.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="productos_mant_events.php" forShow="False" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
