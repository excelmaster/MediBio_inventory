<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="Designs/medibio_reports/medibio_reports/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Link id="5" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Report_Print" hrefSource="rpt_productos.ccp" wizardTheme="Report" wizardThemeType="File" wizardDefaultValue="Printable version" wizardUseTemplateBlock="True" wizardBeforeHTML="&lt;p align=&quot;right&quot;&gt;" wizardAfterHTML="&lt;/p&gt;" wizardLinkTarget="_blank" composition="6" PathID="ContentReport_Print">
					<Components/>
					<Events>
						<Event name="BeforeShow" type="Server">
							<Actions>
								<Action actionName="Hide-Show Component" actionCategory="General" id="7" action="Hide" conditionType="Parameter" dataType="Text" condition="Equal" parameter1="Print" name1="ViewMode" sourceType1="URL" name2="&quot;Print&quot;" sourceType2="Expression"/>
							</Actions>
						</Event>
					</Events>
					<LinkParameters>
						<LinkParameter id="6" sourceType="Expression" format="yyyy-mm-dd" name="ViewMode" source="&quot;Print&quot;"/>
					</LinkParameters>
					<Attributes/>
					<Features/>
				</Link>
				<Report id="8" secured="False" enablePrint="True" showMode="Web" sourceType="Table" returnValueType="Number" linesPerWebPage="10" name="categoria_productos_unida" connection="Connection1" dataSource="categoria_productos, unidadesmedida, productos" composition="6" isParent="True" orderBy="name_producto" pageSizeLimit="100" wizardCaption=" Categoria Productos, Unidadesmedida, Productos " changedCaptionReport="False" wizardTheme="report" wizardLayoutType="GroupAbove" wizardGridPaging="Simple" wizardGridSortingType="SimpleDir" wizardHideDetail="False" wizardPercentForSums="False" wizardEnablePrintMode="True" wizardReportSeparator="True" wizardReportAddTotalRecords="True" wizardReportAddPageNumbers="True" wizardReportAddNbsp="False" wizardReportAddDateTime="True" wizardReportDateTimeAs="CurrentDateTime" wizardReportAddRowNumber="True" wizardReportRowNumberResetAt="categoria_descrip" wizardUseSearch="True" wizardNoRecords="No se ha encontrado ningun registro" wizardUseInterVariables="False" wizardThemeApplyTo="Component" reportAddTemplatePanel="False" wizardCreateLinkToPrintablePage="True" wizardUseClientPaging="False" wizardThemeVersion="3.0">
					<Components>
						<Section id="26" visible="True" lines="0" name="Report_Header" wizardSectionType="ReportHeader" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="35" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalRecords" function="Count" wizardTheme="report" wizardUseTemplateBlock="False" PathID="Contentcategoria_productos_unidaReport_HeaderReport_TotalRecords" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="27" visible="True" lines="0" name="Page_Header" wizardSectionType="PageHeader" wizardTheme="report" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="29" visible="True" lines="2" name="categoria_descrip_Header" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="36" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="categoria_descrip" fieldSource="categoria_descrip" fieldTableSource="categoria_productos" wizardCaption="Categoria Descrip" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidacategoria_descrip_Headercategoria_descrip" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<Sorter id="43" visible="True" name="Sorter_descrp_unidad" column="descrp_unidad" wizardCaption="Descrp Unidad" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="descrp_unidad" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="45" visible="True" name="Sorter_name_producto" column="name_producto" wizardCaption="Name Producto" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="name_producto" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="47" visible="True" name="Sorter_cantidad_producto" column="cantidad_producto" wizardCaption="Cantidad Producto" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="cantidad_producto" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="49" visible="True" name="Sorter_descripcion_producto" column="descripcion_producto" wizardCaption="Descripcion Producto" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="descripcion_producto" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="51" visible="True" name="Sorter_activo" column="activo" wizardCaption="Activo" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="activo" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="53" visible="True" name="Sorter_min_stock" column="min_stock" wizardCaption="Min Stock" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="min_stock" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="55" visible="True" name="Sorter_max_stock" column="max_stock" wizardCaption="Max Stock" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="max_stock" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="57" visible="True" name="Sorter_nivel_pedido" column="nivel_pedido" wizardCaption="Nivel Pedido" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="nivel_pedido" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="30" visible="True" lines="1" name="Detail" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="42" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="categoria_descrip" name="Report_Row_Number" fieldTableSource="False" wizardCaption="Report Row Number" wizardIsPassword="False" visible="Yes" function="Count" wizardAlign="right" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetailReport_Row_Number" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="44" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descrp_unidad" fieldSource="descrp_unidad" fieldTableSource="unidadesmedida" wizardCaption="Descrp Unidad" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetaildescrp_unidad" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="46" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="name_producto" fieldSource="name_producto" fieldTableSource="productos" wizardCaption="Name Producto" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetailname_producto" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="48" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="cantidad_producto" fieldSource="cantidad_producto" fieldTableSource="productos" wizardCaption="Cantidad Producto" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailcantidad_producto" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="50" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descripcion_producto" fieldSource="descripcion_producto" fieldTableSource="productos" wizardCaption="Descripcion Producto" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetaildescripcion_producto" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="52" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="activo" fieldSource="activo" fieldTableSource="productos" wizardCaption="Activo" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailactivo" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="54" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="min_stock" fieldSource="min_stock" fieldTableSource="productos" wizardCaption="Min Stock" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailmin_stock" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="56" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="max_stock" fieldSource="max_stock" fieldTableSource="productos" wizardCaption="Max Stock" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailmax_stock" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="58" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="nivel_pedido" fieldSource="nivel_pedido" fieldTableSource="productos" wizardCaption="Nivel Pedido" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailnivel_pedido" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<Panel id="59" visible="True" name="Separator" wizardTheme="report" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Panel>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="31" visible="True" lines="0" name="categoria_descrip_Footer" wizardTheme="report" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="32" visible="True" lines="0" name="Report_Footer" wizardSectionType="ReportFooter" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<Panel id="33" visible="True" name="NoRecords" wizardNoRecords="No se ha encontrado ningun registro" wizardTheme="report" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Panel>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="34" visible="True" lines="2" name="Page_Footer" wizardSectionType="PageFooter" pageBreakAfter="True" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<Panel id="37" visible="True" name="PageBreak" wizardTheme="report" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Panel>
								<ReportLabel id="38" fieldSourceType="SpecialValue" dataType="Date" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentDateTime" fieldSource="CurrentDateTime" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardInsertToDateTD="True" PathID="Contentcategoria_productos_unidaPage_FooterReport_CurrentDateTime" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="39" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentPage" fieldSource="PageNumber" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix="Page " PathID="Contentcategoria_productos_unidaPage_FooterReport_CurrentPage" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="40" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalPages" fieldSource="TotalPages" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix=" of " PathID="Contentcategoria_productos_unidaPage_FooterReport_TotalPages" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<Navigator id="41" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="First" wizardPrev="True" wizardPrevText="Prev" wizardNext="True" wizardNextText="Next" wizardLast="True" wizardLastText="Last" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="of" wizardTheme="report" wizardImagesScheme="Report" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Navigator>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="66" searchForm="productos_unidadesmedida" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="name_producto,descripcion_producto"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="9" posHeight="136" posLeft="272" posTop="9" posWidth="144" schemaName="inventario_mb" tableName="categoria_productos"/>
						<JoinTable id="10" posHeight="104" posLeft="270" posTop="169" posWidth="152" schemaName="inventario_mb" tableName="unidadesmedida"/>
						<JoinTable id="11" posHeight="180" posLeft="21" posTop="10" posWidth="160" schemaName="inventario_mb" tableName="productos"/>
					</JoinTables>
					<JoinLinks>
						<JoinTable2 id="12" fieldLeft="productos.categoria_producto_id" fieldRight="categoria_productos.id" joinType="inner" tableLeft="productos" tableRight="categoria_productos"/>
						<JoinTable2 id="13" conditionType="Equal" fieldLeft="productos.unidad_medida_id" fieldRight="unidadesmedida.id" joinType="inner" tableLeft="productos" tableRight="unidadesmedida"/>
					</JoinLinks>
					<Fields>
						<Field id="14" fieldName="categoria_descrip" tableName="categoria_productos"/>
						<Field id="15" fieldName="descrp_unidad" tableName="unidadesmedida"/>
						<Field id="16" fieldName="name_producto" tableName="productos"/>
						<Field id="17" fieldName="cantidad_producto" tableName="productos"/>
						<Field id="18" fieldName="descripcion_producto" tableName="productos"/>
						<Field id="19" fieldName="activo" tableName="productos"/>
						<Field id="20" fieldName="min_stock" tableName="productos"/>
						<Field id="21" fieldName="max_stock" tableName="productos"/>
						<Field id="22" fieldName="nivel_pedido" tableName="productos"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<ReportGroups>
						<ReportGroup id="28" name="categoria_descrip" field="categoria_descrip" sqlField="categoria_productos.categoria_descrip" sortOrder="asc"/>
					</ReportGroups>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Report>
				<Record id="60" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="productos_unidadesmedida" searchIds="60" fictitiousConnection="Connection1" wizardCaption="Search  " wizardTheme="report" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="False" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="Report" returnPage="rpt_productos.ccp" PathID="Contentproductos_unidadesmedida" wizardThemeVersion="3.0" composition="6">
					<Components>
						<Link id="61" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="rpt_productos.ccp" removeParameters="s_keyword;categoria_productos_unidaPageSize" wizardTheme="report" wizardThemeItem="SorterLink" wizardDefaultValue="Clear" PathID="Contentproductos_unidadesmedidaClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="62" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardTheme="report" wizardCaption="Search" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="Contentproductos_unidadesmedidaButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="63" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="name_producto,descripcion_producto" wizardTheme="report" wizardIsPassword="False" wizardCaption="Keyword" caption="Keyword" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductos_unidadesmedidas_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="64" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;Any Of Words;2;All Words;3;Exact Phrase" wizardTheme="report" wizardCaption="Search For" PathID="Contentproductos_unidadesmedidasearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="65" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productos_unidaPageSize" dataSource=";Select Value;5;5;10;10;25;25;100;100" wizardTheme="report" wizardCaption="Records per page" wizardNoEmptyValue="True" PathID="Contentproductos_unidadesmedidacategoria_productos_unidaPageSize" wizardThemeVersion="3.0">
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
				<Link id="67" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="MenuLink1" hrefSource="productos_mant.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver a productos','textSourceDB':'','hrefSource':'productos_mant.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
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
		<CodeFile id="Events" language="PHPTemplates" name="rpt_productos_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="rpt_productos.php" forShow="True" url="rpt_productos.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
