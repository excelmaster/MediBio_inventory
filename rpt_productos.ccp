<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
				<Link id="5" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Report_Print" hrefSource="rpt_productos.ccp" wizardTheme="Report" wizardThemeType="File" wizardDefaultValue="Printable version" wizardUseTemplateBlock="True" wizardBeforeHTML="&lt;p align=&quot;right&quot;&gt;" wizardAfterHTML="&lt;/p&gt;" wizardLinkTarget="_blank" composition="6" PathID="ContentReport_Print">
=======
				<Link id="70" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Report_Print" hrefSource="rpt_productos.ccp" wizardTheme="Basic" wizardThemeType="File" wizardDefaultValue="{res:CCS_ReportPrintLink}" wizardUseTemplateBlock="True" wizardBeforeHTML="&lt;p align=&quot;right&quot;&gt;" wizardAfterHTML="&lt;/p&gt;" wizardLinkTarget="_blank" composition="25" PathID="ContentReport_Print">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
					<Components/>
					<Events>
						<Event name="BeforeShow" type="Server">
							<Actions>
<<<<<<< HEAD
								<Action actionName="Hide-Show Component" actionCategory="General" id="7" action="Hide" conditionType="Parameter" dataType="Text" condition="Equal" parameter1="Print" name1="ViewMode" sourceType1="URL" name2="&quot;Print&quot;" sourceType2="Expression"/>
=======
								<Action actionName="Hide-Show Component" actionCategory="General" id="72" action="Hide" conditionType="Parameter" dataType="Text" condition="Equal" parameter1="Print" name1="ViewMode" sourceType1="URL" name2="&quot;Print&quot;" sourceType2="Expression"/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
							</Actions>
						</Event>
					</Events>
					<LinkParameters>
<<<<<<< HEAD
						<LinkParameter id="6" sourceType="Expression" format="yyyy-mm-dd" name="ViewMode" source="&quot;Print&quot;"/>
=======
						<LinkParameter id="71" sourceType="Expression" format="yyyy-mm-dd" name="ViewMode" source="&quot;Print&quot;"/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
					</LinkParameters>
					<Attributes/>
					<Features/>
				</Link>
<<<<<<< HEAD
				<Report id="8" secured="False" enablePrint="True" showMode="Web" sourceType="Table" returnValueType="Number" linesPerWebPage="10" name="categoria_productos_unida" connection="Connection1" dataSource="categoria_productos, unidadesmedida, productos" composition="6" isParent="True" orderBy="name_producto" pageSizeLimit="100" wizardCaption=" Categoria Productos, Unidadesmedida, Productos " changedCaptionReport="False" wizardTheme="report" wizardLayoutType="GroupAbove" wizardGridPaging="Simple" wizardGridSortingType="SimpleDir" wizardHideDetail="False" wizardPercentForSums="False" wizardEnablePrintMode="True" wizardReportSeparator="True" wizardReportAddTotalRecords="True" wizardReportAddPageNumbers="True" wizardReportAddNbsp="False" wizardReportAddDateTime="True" wizardReportDateTimeAs="CurrentDateTime" wizardReportAddRowNumber="True" wizardReportRowNumberResetAt="categoria_descrip" wizardUseSearch="True" wizardNoRecords="No se ha encontrado ningun registro" wizardUseInterVariables="False" wizardThemeApplyTo="Component" reportAddTemplatePanel="False" wizardCreateLinkToPrintablePage="True" wizardUseClientPaging="False" wizardThemeVersion="3.0">
					<Components>
						<Section id="26" visible="True" lines="0" name="Report_Header" wizardSectionType="ReportHeader" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="35" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalRecords" function="Count" wizardTheme="report" wizardUseTemplateBlock="False" PathID="Contentcategoria_productos_unidaReport_HeaderReport_TotalRecords" wizardThemeVersion="3.0">
=======
				<Report id="73" secured="False" enablePrint="True" showMode="Web" sourceType="Table" returnValueType="Number" linesPerWebPage="10" name="categoria_productos_unida" connection="Connection1" dataSource="productos, unidadesmedida, categoria_productos" composition="25" isParent="True" pageSizeLimit="100" wizardCaption="{res:productosunidadesmedidacategoria_productos_ReportForm}" changedCaptionReport="False" wizardTheme="Basic" wizardLayoutType="GroupLeftAbove" wizardGridPaging="Simple" wizardGridSortingType="SimpleDir" wizardHideDetail="False" wizardPercentForSums="False" wizardEnablePrintMode="True" wizardReportSeparator="True" wizardReportAddTotalRecords="True" wizardReportAddPageNumbers="True" wizardReportAddNbsp="False" wizardReportAddDateTime="True" wizardReportDateTimeAs="CurrentDateTime" wizardReportAddRowNumber="True" wizardReportRowNumberResetAt="Report" wizardUseSearch="True" wizardNoRecords="No se ha encontrado ningun registro" wizardUseInterVariables="True" wizardThemeApplyTo="Component" reportAddTemplatePanel="False" wizardCreateLinkToPrintablePage="True" wizardUseClientPaging="False" wizardThemeVersion="3.0">
					<Components>
						<Section id="86" visible="True" lines="0" name="Report_Header" wizardSectionType="ReportHeader" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="95" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalRecords" function="Count" wizardTheme="Basic" wizardUseTemplateBlock="False" PathID="Contentcategoria_productos_unidaReport_HeaderReport_TotalRecords" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
						<Section id="27" visible="True" lines="0" name="Page_Header" wizardSectionType="PageHeader" wizardTheme="report" wizardThemeVersion="3.0">
=======
<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" needGeneration="0">
	<Components>
		<Link id="67" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="Link1" hrefSource="productos_mant.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver a productos','textSourceDB':'','hrefSource':'productos_mant.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
			<Events/>
			<LinkParameters/>
			<Attributes/>
			<Features/>
		</Link>
		<Link id="68" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Report_Print" hrefSource="rpt_productos.ccp" wizardTheme="Report" wizardThemeType="File" wizardDefaultValue="{res:CCS_ReportPrintLink}" wizardUseTemplateBlock="True" wizardBeforeHTML="&lt;p align=&quot;right&quot;&gt;" wizardAfterHTML="&lt;/p&gt;" wizardLinkTarget="_blank" composition="13" PathID="Report_Print">
			<Components/>
			<Events>
				<Event name="BeforeShow" type="Server">
					<Actions>
						<Action actionName="Hide-Show Component" actionCategory="General" id="70" action="Hide" conditionType="Parameter" dataType="Text" condition="Equal" parameter1="Print" name1="ViewMode" sourceType1="URL" name2="&quot;Print&quot;" sourceType2="Expression"/>
					</Actions>
				</Event>
			</Events>
			<LinkParameters>
				<LinkParameter id="69" sourceType="Expression" format="yyyy-mm-dd" name="ViewMode" source="&quot;Print&quot;"/>
			</LinkParameters>
			<Attributes/>
			<Features/>
		</Link>
		<Report id="71" secured="False" enablePrint="True" showMode="Web" sourceType="Table" returnValueType="Number" linesPerWebPage="10" name="categoria_productos_unida" connection="Connection1" dataSource="categoria_productos, unidadesmedida, productos" composition="13" isParent="True" orderBy="name_producto" pageSizeLimit="100" wizardCaption="{res:categoria_productosunidadesmedidaproductos_ReportForm}" changedCaptionReport="False" wizardTheme="report" wizardLayoutType="GroupAbove" wizardGridPaging="Simple" wizardGridSortingType="SimpleDir" wizardHideDetail="False" wizardPercentForSums="False" wizardEnablePrintMode="True" wizardReportSeparator="True" wizardReportAddTotalRecords="True" wizardReportAddPageNumbers="True" wizardReportAddNbsp="False" wizardReportAddDateTime="True" wizardReportDateTimeAs="CurrentDateTime" wizardReportAddRowNumber="True" wizardReportRowNumberResetAt="categoria_descrip" wizardUseSearch="True" wizardNoRecords="{res:CCS_NoRecords}" wizardUseInterVariables="True" wizardThemeApplyTo="Component" reportAddTemplatePanel="False" wizardCreateLinkToPrintablePage="True" wizardUseClientPaging="False" wizardThemeVersion="3.0">
			<Components>
				<Section id="86" visible="True" lines="0" name="Report_Header" wizardSectionType="ReportHeader" wizardTheme="report" wizardThemeVersion="3.0">
					<Components>
						<ReportLabel id="95" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalRecords" function="Count" wizardTheme="report" wizardUseTemplateBlock="False" PathID="categoria_productos_unidaReport_HeaderReport_TotalRecords" wizardThemeVersion="3.0">
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
				<Section id="87" visible="True" lines="0" name="Page_Header" wizardSectionType="PageHeader" wizardTheme="report" wizardThemeVersion="3.0">
					<Components/>
					<Events/>
					<Attributes/>
					<Features/>
				</Section>
				<Section id="89" visible="True" lines="2" name="categoria_descrip_Header" wizardTheme="report" wizardThemeVersion="3.0">
					<Components>
						<ReportLabel id="96" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="categoria_descrip" fieldSource="categoria_descrip" fieldTableSource="categoria_productos" wizardCaption="{res:categoria Descrip}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="categoria_productos_unidacategoria_descrip_Headercategoria_descrip" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<Sorter id="103" visible="True" name="Sorter_descrp_unidad" column="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="descrp_unidad" wizardThemeVersion="3.0">
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
<<<<<<< HEAD
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
=======
						<Section id="87" visible="True" lines="1" name="Page_Header" wizardSectionType="PageHeader" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="103" visible="True" name="Sorter_name_producto" column="name_producto" wizardCaption="{res:name_producto}" wizardTheme="Basic" wizardSortingType="SimpleDir" wizardControl="name_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
<<<<<<< HEAD
								<Sorter id="45" visible="True" name="Sorter_name_producto" column="name_producto" wizardCaption="Name Producto" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="name_producto" wizardThemeVersion="3.0">
=======
								<Sorter id="105" visible="True" name="Sorter_cantidad_producto" column="cantidad_producto" wizardCaption="{res:cantidad_producto}" wizardTheme="Basic" wizardSortingType="SimpleDir" wizardControl="cantidad_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
<<<<<<< HEAD
								<Sorter id="47" visible="True" name="Sorter_cantidad_producto" column="cantidad_producto" wizardCaption="Cantidad Producto" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="cantidad_producto" wizardThemeVersion="3.0">
=======
								<Sorter id="107" visible="True" name="Sorter_descripcion_producto" column="descripcion_producto" wizardCaption="{res:descripcion_producto}" wizardTheme="Basic" wizardSortingType="SimpleDir" wizardControl="descripcion_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
<<<<<<< HEAD
								<Sorter id="49" visible="True" name="Sorter_descripcion_producto" column="descripcion_producto" wizardCaption="Descripcion Producto" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="descripcion_producto" wizardThemeVersion="3.0">
=======
								<Sorter id="109" visible="True" name="Sorter_categoria_producto_id" column="categoria_producto_id" wizardCaption="{res:categoria_producto_id}" wizardTheme="Basic" wizardSortingType="SimpleDir" wizardControl="categoria_producto_id" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
<<<<<<< HEAD
								<Sorter id="51" visible="True" name="Sorter_activo" column="activo" wizardCaption="Activo" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="activo" wizardThemeVersion="3.0">
=======
								<Sorter id="111" visible="True" name="Sorter_descrp_unidad" column="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardTheme="Basic" wizardSortingType="SimpleDir" wizardControl="descrp_unidad" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
<<<<<<< HEAD
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
=======
								<Sorter id="113" visible="True" name="Sorter_id_producto" column="id_producto" wizardCaption="{res:id_producto}" wizardTheme="Basic" wizardSortingType="SimpleDir" wizardControl="id_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
						<Section id="30" visible="True" lines="1" name="Detail" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="42" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="categoria_descrip" name="Report_Row_Number" fieldTableSource="False" wizardCaption="Report Row Number" wizardIsPassword="False" visible="Yes" function="Count" wizardAlign="right" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetailReport_Row_Number" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="44" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descrp_unidad" fieldSource="descrp_unidad" fieldTableSource="unidadesmedida" wizardCaption="Descrp Unidad" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetaildescrp_unidad" wizardThemeVersion="3.0">
=======
						<Section id="89" visible="True" lines="1" name="categoria_descrip_Header" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="96" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="categoria_descrip" fieldSource="categoria_descrip" fieldTableSource="categoria_productos" wizardCaption="{res:categoria Descrip}" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidacategoria_descrip_Headercategoria_descrip" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="46" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="name_producto" fieldSource="name_producto" fieldTableSource="productos" wizardCaption="Name Producto" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetailname_producto" wizardThemeVersion="3.0">
=======
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="90" visible="True" lines="1" name="Detail" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="102" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_Row_Number" fieldTableSource="False" wizardCaption="{res: Report Row Number}" wizardIsPassword="False" visible="Yes" function="Count" wizardAlign="right" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetailReport_Row_Number" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="48" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="cantidad_producto" fieldSource="cantidad_producto" fieldTableSource="productos" wizardCaption="Cantidad Producto" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailcantidad_producto" wizardThemeVersion="3.0">
=======
								<ReportLabel id="104" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="name_producto" fieldSource="name_producto" fieldTableSource="productos" wizardCaption="{res:name Producto}" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetailname_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="50" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descripcion_producto" fieldSource="descripcion_producto" fieldTableSource="productos" wizardCaption="Descripcion Producto" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetaildescripcion_producto" wizardThemeVersion="3.0">
=======
								<ReportLabel id="106" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="cantidad_producto" fieldSource="cantidad_producto" fieldTableSource="productos" wizardCaption="{res:cantidad Producto}" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailcantidad_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="52" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="activo" fieldSource="activo" fieldTableSource="productos" wizardCaption="Activo" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailactivo" wizardThemeVersion="3.0">
=======
								<ReportLabel id="108" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descripcion_producto" fieldSource="descripcion_producto" fieldTableSource="productos" wizardCaption="{res:descripcion Producto}" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetaildescripcion_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="54" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="min_stock" fieldSource="min_stock" fieldTableSource="productos" wizardCaption="Min Stock" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailmin_stock" wizardThemeVersion="3.0">
=======
								<ReportLabel id="110" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="categoria_producto_id" fieldSource="categoria_producto_id" fieldTableSource="productos" wizardCaption="{res:categoria Producto Id}" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailcategoria_producto_id" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="56" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="max_stock" fieldSource="max_stock" fieldTableSource="productos" wizardCaption="Max Stock" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailmax_stock" wizardThemeVersion="3.0">
=======
								<ReportLabel id="112" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descrp_unidad" fieldSource="descrp_unidad" fieldTableSource="unidadesmedida" wizardCaption="{res:descrp Unidad}" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="Contentcategoria_productos_unidaDetaildescrp_unidad" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="58" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="nivel_pedido" fieldSource="nivel_pedido" fieldTableSource="productos" wizardCaption="Nivel Pedido" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailnivel_pedido" wizardThemeVersion="3.0">
=======
								<ReportLabel id="114" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="id_producto" fieldSource="id_producto" fieldTableSource="productos" wizardCaption="{res:id Producto}" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="Contentcategoria_productos_unidaDetailid_producto" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<Panel id="59" visible="True" name="Separator" wizardTheme="report" wizardThemeVersion="3.0">
=======
								<Panel id="115" visible="True" name="Separator" wizardTheme="Basic" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
						<Section id="31" visible="True" lines="0" name="categoria_descrip_Footer" wizardTheme="report" wizardThemeVersion="3.0">
=======
						</Sorter>
						<Sorter id="105" visible="True" name="Sorter_name_producto" column="name_producto" wizardCaption="{res:name_producto}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="name_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="107" visible="True" name="Sorter_cantidad_producto" column="cantidad_producto" wizardCaption="{res:cantidad_producto}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="cantidad_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="109" visible="True" name="Sorter_descripcion_producto" column="descripcion_producto" wizardCaption="{res:descripcion_producto}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="descripcion_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="111" visible="True" name="Sorter_activo" column="activo" wizardCaption="{res:activo}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="activo" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="113" visible="True" name="Sorter_min_stock" column="min_stock" wizardCaption="{res:min_stock}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="min_stock" wizardThemeVersion="3.0">
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
						<Section id="91" visible="True" lines="0" name="categoria_descrip_Footer" wizardTheme="Basic" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
<<<<<<< HEAD
<<<<<<< HEAD
						</Section>
						<Section id="32" visible="True" lines="0" name="Report_Footer" wizardSectionType="ReportFooter" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<Panel id="33" visible="True" name="NoRecords" wizardNoRecords="No se ha encontrado ningun registro" wizardTheme="report" wizardThemeVersion="3.0">
=======
						</Section>
						<Section id="92" visible="True" lines="0" name="Report_Footer" wizardSectionType="ReportFooter" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<Panel id="93" visible="True" name="NoRecords" wizardNoRecords="No se ha encontrado ningun registro" wizardTheme="Basic" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
						<Section id="34" visible="True" lines="2" name="Page_Footer" wizardSectionType="PageFooter" pageBreakAfter="True" wizardTheme="report" wizardThemeVersion="3.0">
							<Components>
								<Panel id="37" visible="True" name="PageBreak" wizardTheme="report" wizardThemeVersion="3.0">
=======
						<Section id="94" visible="True" lines="2" name="Page_Footer" wizardSectionType="PageFooter" pageBreakAfter="True" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<Panel id="97" visible="True" name="PageBreak" wizardTheme="Basic" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Panel>
<<<<<<< HEAD
								<ReportLabel id="38" fieldSourceType="SpecialValue" dataType="Date" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentDateTime" fieldSource="CurrentDateTime" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardInsertToDateTD="True" PathID="Contentcategoria_productos_unidaPage_FooterReport_CurrentDateTime" wizardThemeVersion="3.0">
=======
								<ReportLabel id="98" fieldSourceType="SpecialValue" dataType="Date" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentDateTime" fieldSource="CurrentDateTime" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardInsertToDateTD="True" PathID="Contentcategoria_productos_unidaPage_FooterReport_CurrentDateTime" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="39" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentPage" fieldSource="PageNumber" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix="Page " PathID="Contentcategoria_productos_unidaPage_FooterReport_CurrentPage" wizardThemeVersion="3.0">
=======
								<ReportLabel id="99" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentPage" fieldSource="PageNumber" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix="{res:CCS_ReportPageNumber1} " PathID="Contentcategoria_productos_unidaPage_FooterReport_CurrentPage" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<ReportLabel id="40" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalPages" fieldSource="TotalPages" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix=" of " PathID="Contentcategoria_productos_unidaPage_FooterReport_TotalPages" wizardThemeVersion="3.0">
=======
								<ReportLabel id="100" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalPages" fieldSource="TotalPages" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix=" {res:CCS_ReportPageNumber2} " PathID="Contentcategoria_productos_unidaPage_FooterReport_TotalPages" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
<<<<<<< HEAD
								<Navigator id="41" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="First" wizardPrev="True" wizardPrevText="Prev" wizardNext="True" wizardNextText="Next" wizardLast="True" wizardLastText="Last" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="of" wizardTheme="report" wizardImagesScheme="Report" wizardThemeVersion="3.0">
=======
								<Navigator id="101" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardTheme="Basic" wizardImagesScheme="Basic" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
								<Action actionName="Advanced Search" actionCategory="General" id="66" searchForm="productos_unidadesmedida" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="name_producto,descripcion_producto"/>
=======
								<Action actionName="Advanced Search" actionCategory="General" id="122" searchForm="productos_unidadesmedida" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="name_producto,cantidad_producto,descripcion_producto"/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
<<<<<<< HEAD
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
=======
						<JoinTable id="74" posHeight="180" posLeft="10" posTop="10" posWidth="160" schemaName="u392883857_inven" tableName="productos"/>
						<JoinTable id="75" posHeight="121" posLeft="236" posTop="123" posWidth="106" schemaName="u392883857_inven" tableName="unidadesmedida"/>
						<JoinTable id="76" posHeight="136" posLeft="363" posTop="10" posWidth="144" schemaName="u392883857_inven" tableName="categoria_productos"/>
					</JoinTables>
					<JoinLinks>
						<JoinTable2 id="77" fieldLeft="productos.unidad_medida_id" fieldRight="unidadesmedida.id" joinType="inner" tableLeft="productos" tableRight="unidadesmedida"/>
						<JoinTable2 id="78" fieldLeft="productos.categoria_producto_id" fieldRight="categoria_productos.id" joinType="inner" tableLeft="productos" tableRight="categoria_productos"/>
					</JoinLinks>
					<Fields>
						<Field id="79" fieldName="id_producto" tableName="productos"/>
						<Field id="80" fieldName="name_producto" tableName="productos"/>
						<Field id="81" fieldName="categoria_producto_id" tableName="productos"/>
						<Field id="82" fieldName="descrp_unidad" tableName="unidadesmedida"/>
						<Field id="83" fieldName="cantidad_producto" tableName="productos"/>
						<Field id="84" fieldName="descripcion_producto" tableName="productos"/>
						<Field id="85" fieldName="categoria_descrip" tableName="categoria_productos"/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<ReportGroups>
<<<<<<< HEAD
						<ReportGroup id="28" name="categoria_descrip" field="categoria_descrip" sqlField="categoria_productos.categoria_descrip" sortOrder="asc"/>
=======
						<ReportGroup id="88" name="categoria_descrip" field="categoria_descrip" sqlField="categoria_productos.categoria_descrip" sortOrder="asc"/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
					</ReportGroups>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Report>
<<<<<<< HEAD
				<Record id="60" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="productos_unidadesmedida" searchIds="60" fictitiousConnection="Connection1" wizardCaption="Search  " wizardTheme="report" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="False" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="Report" returnPage="rpt_productos.ccp" PathID="Contentproductos_unidadesmedida" wizardThemeVersion="3.0" composition="6">
					<Components>
						<Link id="61" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="rpt_productos.ccp" removeParameters="s_keyword;categoria_productos_unidaPageSize" wizardTheme="report" wizardThemeItem="SorterLink" wizardDefaultValue="Clear" PathID="Contentproductos_unidadesmedidaClearParameters" wizardThemeVersion="3.0">
=======
				<Record id="116" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="productos_unidadesmedida" searchIds="116" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Basic" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="Report" returnPage="rpt_productos.ccp" PathID="Contentproductos_unidadesmedida" wizardThemeVersion="3.0" composition="25">
					<Components>
						<Link id="117" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="rpt_productos.ccp" removeParameters="s_keyword;categoria_productos_unidaPageSize" wizardTheme="Basic" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="Contentproductos_unidadesmedidaClearParameters" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
<<<<<<< HEAD
						<Button id="62" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardTheme="report" wizardCaption="Search" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="Contentproductos_unidadesmedidaButton_DoSearch" wizardThemeVersion="3.0">
=======
						</Sorter>
						<Sorter id="115" visible="True" name="Sorter_max_stock" column="max_stock" wizardCaption="{res:max_stock}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="max_stock" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="117" visible="True" name="Sorter_nivel_pedido" column="nivel_pedido" wizardCaption="{res:nivel_pedido}" wizardTheme="report" wizardSortingType="SimpleDir" wizardControl="nivel_pedido" wizardThemeVersion="3.0">
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
				<Section id="90" visible="True" lines="1" name="Detail" wizardTheme="report" wizardThemeVersion="3.0">
					<Components>
						<ReportLabel id="102" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="categoria_descrip" name="Report_Row_Number" fieldTableSource="False" wizardCaption="{res: Report Row Number}" wizardIsPassword="False" visible="Yes" function="Count" wizardAlign="right" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="categoria_productos_unidaDetailReport_Row_Number" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<ReportLabel id="104" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descrp_unidad" fieldSource="descrp_unidad" fieldTableSource="unidadesmedida" wizardCaption="{res:descrp Unidad}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="categoria_productos_unidaDetaildescrp_unidad" wizardThemeVersion="3.0">
=======
						<Button id="118" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardTheme="Basic" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="Contentproductos_unidadesmedidaButton_DoSearch" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
<<<<<<< HEAD
						</ReportLabel>
						<ReportLabel id="106" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="name_producto" fieldSource="name_producto" fieldTableSource="productos" wizardCaption="{res:name Producto}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="categoria_productos_unidaDetailname_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<ReportLabel id="108" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="cantidad_producto" fieldSource="cantidad_producto" fieldTableSource="productos" wizardCaption="{res:cantidad Producto}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="categoria_productos_unidaDetailcantidad_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<ReportLabel id="110" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="descripcion_producto" fieldSource="descripcion_producto" fieldTableSource="productos" wizardCaption="{res:descripcion Producto}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="categoria_productos_unidaDetaildescripcion_producto" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<ReportLabel id="112" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="activo" fieldSource="activo" fieldTableSource="productos" wizardCaption="{res:activo}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="categoria_productos_unidaDetailactivo" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<ReportLabel id="114" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="min_stock" fieldSource="min_stock" fieldTableSource="productos" wizardCaption="{res:min Stock}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="categoria_productos_unidaDetailmin_stock" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<ReportLabel id="116" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="max_stock" fieldSource="max_stock" fieldTableSource="productos" wizardCaption="{res:max Stock}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="categoria_productos_unidaDetailmax_stock" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<ReportLabel id="118" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="nivel_pedido" fieldSource="nivel_pedido" fieldTableSource="productos" wizardCaption="{res:nivel Pedido}" wizardIsPassword="False" visible="Yes" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="categoria_productos_unidaDetailnivel_pedido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<Panel id="119" visible="True" name="Separator" wizardTheme="report" wizardThemeVersion="3.0">
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
				<Section id="91" visible="True" lines="0" name="categoria_descrip_Footer" wizardTheme="report" wizardThemeVersion="3.0">
					<Components/>
					<Events/>
					<Attributes/>
					<Features/>
				</Section>
				<Section id="92" visible="True" lines="0" name="Report_Footer" wizardSectionType="ReportFooter" wizardTheme="report" wizardThemeVersion="3.0">
					<Components>
						<Panel id="93" visible="True" name="NoRecords" wizardNoRecords="{res:CCS_NoRecords}" wizardTheme="report" wizardThemeVersion="3.0">
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
				<Section id="94" visible="True" lines="2" name="Page_Footer" wizardSectionType="PageFooter" pageBreakAfter="True" wizardTheme="report" wizardThemeVersion="3.0">
					<Components>
						<Panel id="97" visible="True" name="PageBreak" wizardTheme="report" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<ReportLabel id="98" fieldSourceType="SpecialValue" dataType="Date" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentDateTime" fieldSource="CurrentDateTime" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardInsertToDateTD="True" PathID="categoria_productos_unidaPage_FooterReport_CurrentDateTime" wizardThemeVersion="3.0">
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
<<<<<<< HEAD
						</Button>
						<TextBox id="63" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="name_producto,descripcion_producto" wizardTheme="report" wizardIsPassword="False" wizardCaption="Keyword" caption="Keyword" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductos_unidadesmedidas_keyword" wizardThemeVersion="3.0">
=======
						</ReportLabel>
						<ReportLabel id="99" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentPage" fieldSource="PageNumber" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix="{res:CCS_ReportPageNumber1} " PathID="categoria_productos_unidaPage_FooterReport_CurrentPage" wizardThemeVersion="3.0">
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
						</Button>
						<TextBox id="119" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="name_producto,cantidad_producto,descripcion_producto" wizardTheme="Basic" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentproductos_unidadesmedidas_keyword" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
<<<<<<< HEAD
<<<<<<< HEAD
						</TextBox>
						<ListBox id="64" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;Any Of Words;2;All Words;3;Exact Phrase" wizardTheme="report" wizardCaption="Search For" PathID="Contentproductos_unidadesmedidasearchConditions" wizardThemeVersion="3.0">
=======
						</TextBox>
						<ListBox id="120" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Basic" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="Contentproductos_unidadesmedidasearchConditions" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
						<ListBox id="65" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productos_unidaPageSize" dataSource=";Select Value;5;5;10;10;25;25;100;100" wizardTheme="report" wizardCaption="Records per page" wizardNoEmptyValue="True" PathID="Contentproductos_unidadesmedidacategoria_productos_unidaPageSize" wizardThemeVersion="3.0">
=======
						<ListBox id="121" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productos_unidaPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Basic" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentproductos_unidadesmedidacategoria_productos_unidaPageSize" wizardThemeVersion="3.0">
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
=======
						</ReportLabel>
						<ReportLabel id="100" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalPages" fieldSource="TotalPages" wizardTheme="report" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" wizardPrefix=" {res:CCS_ReportPageNumber2} " PathID="categoria_productos_unidaPage_FooterReport_TotalPages" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</ReportLabel>
						<Navigator id="101" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardTheme="report" wizardImagesScheme="Report" wizardThemeVersion="3.0">
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
						<Action actionName="Advanced Search" actionCategory="General" id="126" searchForm="productos_unidadesmedida" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="name_producto,descripcion_producto"/>
					</Actions>
				</Event>
			</Events>
			<TableParameters/>
			<JoinTables>
				<JoinTable id="72" posHeight="136" posLeft="272" posTop="9" posWidth="144" schemaName="inventario_mb" tableName="categoria_productos"/>
				<JoinTable id="73" posHeight="104" posLeft="270" posTop="169" posWidth="152" schemaName="inventario_mb" tableName="unidadesmedida"/>
				<JoinTable id="74" posHeight="180" posLeft="21" posTop="10" posWidth="160" schemaName="inventario_mb" tableName="productos"/>
			</JoinTables>
			<JoinLinks>
				<JoinTable2 id="75" fieldLeft="productos.categoria_producto_id" fieldRight="categoria_productos.id" joinType="inner" tableLeft="productos" tableRight="categoria_productos"/>
				<JoinTable2 id="76" conditionType="Equal" fieldLeft="productos.unidad_medida_id" fieldRight="unidadesmedida.id" joinType="inner" tableLeft="productos" tableRight="unidadesmedida"/>
			</JoinLinks>
			<Fields>
				<Field id="77" fieldName="categoria_descrip" tableName="categoria_productos"/>
				<Field id="78" fieldName="descrp_unidad" tableName="unidadesmedida"/>
				<Field id="79" fieldName="name_producto" tableName="productos"/>
				<Field id="80" fieldName="cantidad_producto" tableName="productos"/>
				<Field id="81" fieldName="descripcion_producto" tableName="productos"/>
				<Field id="82" fieldName="activo" tableName="productos"/>
				<Field id="83" fieldName="min_stock" tableName="productos"/>
				<Field id="84" fieldName="max_stock" tableName="productos"/>
				<Field id="85" fieldName="nivel_pedido" tableName="productos"/>
			</Fields>
			<PKFields/>
			<SPParameters/>
			<SQLParameters/>
			<ReportGroups>
				<ReportGroup id="88" name="categoria_descrip" field="categoria_descrip" sqlField="categoria_productos.categoria_descrip" sortOrder="asc"/>
			</ReportGroups>
			<SecurityGroups/>
			<Attributes/>
			<Features/>
		</Report>
		<Record id="120" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="productos_unidadesmedida" searchIds="120" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="report" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="Report" returnPage="rpt_productos.ccp" PathID="productos_unidadesmedida" wizardThemeVersion="3.0" composition="13">
			<Components>
				<Link id="121" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="rpt_productos.ccp" removeParameters="s_keyword;categoria_productos_unidaPageSize" wizardTheme="report" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="productos_unidadesmedidaClearParameters" wizardThemeVersion="3.0">
					<Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Button id="122" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardTheme="report" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="productos_unidadesmedidaButton_DoSearch" wizardThemeVersion="3.0">
					<Components/>
					<Events/>
					<Attributes/>
					<Features/>
				</Button>
				<TextBox id="123" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="name_producto,descripcion_producto" wizardTheme="report" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="productos_unidadesmedidas_keyword" wizardThemeVersion="3.0">
					<Components/>
					<Events/>
					<Attributes/>
					<Features/>
				</TextBox>
				<ListBox id="124" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="report" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="productos_unidadesmedidasearchConditions" wizardThemeVersion="3.0">
					<Components/>
					<Events/>
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
					<TableParameters/>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables/>
					<JoinLinks/>
					<Fields/>
					<PKFields/>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
<<<<<<< HEAD
=======
					<Attributes/>
					<Features/>
				</ListBox>
				<ListBox id="125" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productos_unidaPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="report" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="productos_unidadesmedidacategoria_productos_unidaPageSize" wizardThemeVersion="3.0">
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
>>>>>>> 98f0fd6e5605492a464ab15470b9fd57f723f449
=======
		<Panel id="68" visible="True" name="Panel1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="Panel1">
			<Components>
				<Label id="69" fieldSourceType="CodeExpression" dataType="Text" html="False" name="Label1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="Panel1Label1" defaultValue="&quot;REPORTE DE PRODUCTOS&quot;">
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
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
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
