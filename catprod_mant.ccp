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
				<Panel id="6" visible="True" name="Panel1" PathID="ContentPanel1">
					<Components>
						<Label id="7" fieldSourceType="DBColumn" dataType="Text" html="False" name="Label1" PathID="ContentPanel1Label1" defaultValue="&quot;CATEGORIAS DE PRODUCTOS&quot;">
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
				<Grid id="8" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="categoria_productos" connection="Connection1" dataSource="categoria_productos" pageSizeLimit="100" pageSize="True" wizardCaption="{res:categoria_productos_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="True" wizardType="GridRecord" wizardGridRecordLinkFieldType="custom" wizardGridRecordLinkField="{res:CCS_CustomLinkField}" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="22" isParent="True" editableComponentTypeString="Grid">
					<Components>
						<Link id="11" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="categoria_productos_Insert" hrefSource="catprod_mant.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentcategoria_productoscategoria_productos_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="12" fieldSourceType="DBColumn" dataType="Text" html="False" name="categoria_productos_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentcategoria_productoscategoria_productos_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events>
								<Event name="BeforeShow" type="Server">
									<Actions>
										<Action actionName="Retrieve number of records" actionCategory="Database" id="13"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Label>
						<Panel id="14" visible="True" name="Header_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="15" visible="True" name="Header_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="16" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentcategoria_productosHeader_idSorter_id" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="17" visible="True" name="Header_categoria_descrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="18" visible="True" name="Sorter_categoria_descrip" column="categoria_descrip" wizardCaption="{res:categoria_descrip}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="categoria_descrip" wizardAddNbsp="False" PathID="Contentcategoria_productosHeader_categoria_descripSorter_categoria_descrip" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="19" visible="True" name="Header_observa_categdescrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="20" visible="True" name="Sorter_observa_categdescrip" column="observa_categdescrip" wizardCaption="{res:observa_categdescrip}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="observa_categdescrip" wizardAddNbsp="False" PathID="Contentcategoria_productosHeader_observa_categdescripSorter_observa_categdescrip" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="21" visible="True" name="Data_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Link id="22" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Detail" wizardCaption="{res:Detail}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" hrefSource="catprod_mant.ccp" wizardThemeItem="GridA" PathID="Contentcategoria_productosData_DetailDetail" wizardTheme="Blueprint" wizardThemeVersion="3.0" urlType="Relative">
									<Components/>
									<Events/>
									<LinkParameters>
										<LinkParameter id="23" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
									</LinkParameters>
									<Attributes/>
									<Features/>
								</Link>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="24" visible="True" name="Data_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="25" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentcategoria_productosData_idid" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="27" visible="True" name="Data_categoria_descrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="28" fieldSourceType="DBColumn" dataType="Text" html="False" name="categoria_descrip" fieldSource="categoria_descrip" wizardCaption="{res:categoria_descrip}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentcategoria_productosData_categoria_descripcategoria_descrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="30" visible="True" name="Data_observa_categdescrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="31" fieldSourceType="DBColumn" dataType="Text" html="False" name="observa_categdescrip" fieldSource="observa_categdescrip" wizardCaption="{res:observa_categdescrip}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentcategoria_productosData_observa_categdescripobserva_categdescrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="32" visible="True" name="Data_Alt_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Link id="33" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Alt_Detail" wizardCaption="{res:Detail}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" wizardDefaultValue="{res:CCS_CustomLinkField}" hrefSource="catprod_mant.ccp" wizardThemeItem="FooterA" PathID="Contentcategoria_productosData_Alt_DetailAlt_Detail" wizardThemeVersion="3.0" urlType="Relative">
									<Components/>
									<Events/>
									<LinkParameters>
										<LinkParameter id="34" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
									</LinkParameters>
									<Attributes/>
									<Features/>
								</Link>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="35" visible="True" name="Data_Alt_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="36" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_id" fieldSource="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentcategoria_productosData_Alt_idAlt_id" wizardThemeVersion="3.0">
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
						<Panel id="37" visible="True" name="Data_Alt_categoria_descrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="38" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_categoria_descrip" fieldSource="categoria_descrip" wizardCaption="{res:categoria_descrip}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentcategoria_productosData_Alt_categoria_descripAlt_categoria_descrip" wizardThemeVersion="3.0">
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
						<Panel id="39" visible="True" name="Data_Alt_observa_categdescrip" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="40" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_observa_categdescrip" fieldSource="observa_categdescrip" wizardCaption="{res:observa_categdescrip}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentcategoria_productosData_Alt_observa_categdescripAlt_observa_categdescrip" wizardThemeVersion="3.0">
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
						<Navigator id="41" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="50" searchForm="categoria_productosSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,categoria_descrip,unidad_medida_id"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="9" tableName="categoria_productos"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="10" tableName="categoria_productos" fieldName="id"/>
						<Field id="26" tableName="categoria_productos" fieldName="categoria_descrip"/>
						<Field id="29" tableName="categoria_productos" fieldName="observa_categdescrip"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="42" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="categoria_productosSearch" searchIds="42" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="button" wizardDefaultButton="True" gridSearchSortField="True" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="catprod_mant.ccp" PathID="Contentcategoria_productosSearch" wizardThemeVersion="3.0" composition="22">
					<Components>
						<Link id="43" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="catprod_mant.ccp" removeParameters="s_keyword;categoria_productosOrder;categoria_productosDir;categoria_productosPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="Contentcategoria_productosSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="44" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" PathID="Contentcategoria_productosSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="45" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,categoria_descrip,unidad_medida_id" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentcategoria_productosSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="46" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="Contentcategoria_productosSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="47" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productosOrder" dataSource=";{res:CCS_SelectField};Sorter_id;{res:id};Sorter_categoria_descrip;{res:categoria_descrip};Sorter_observa_categdescrip;{res:observa_categdescrip}" wizardTheme="Blueprint" wizardCaption="{res:CCS_SortBy}" wizardThemeVersion="3.0">
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
						<ListBox id="48" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productosDir" dataSource=";{res:CCS_SelectOrder};ASC;{res:CCS_ASC};DESC;{res:CCS_DESC}" wizardTheme="Blueprint" wizardCaption=" " PathID="Contentcategoria_productosSearchcategoria_productosDir" wizardThemeVersion="3.0">
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
						<ListBox id="49" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="categoria_productosPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentcategoria_productosSearchcategoria_productosPageSize" wizardThemeVersion="3.0">
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
				<Link id="60" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Logout" hrefSource="login.ccp" wizardDefaultValue="{res:CCS_LogoutBtn}" PathID="MenuLogout">
					<Components/>
					<Events/>
					<LinkParameters>
						<LinkParameter id="61" sourceType="Expression" format="yyyy-mm-dd" name="Logout" source="&quot;True&quot;"/>
					</LinkParameters>
					<Attributes/>
					<Features/>
				</Link>
			</Components>
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
		<CodeFile id="Events" language="PHPTemplates" name="catprod_mant_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="catprod_mant.php" forShow="True" url="catprod_mant.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events>
		<Event name="AfterInitialize" type="Server">
			<Actions>
				<Action actionName="Logout" actionCategory="Security" id="62" pageRedirects="True" parameterName="Logout" returnPage="catprod_mant.ccp"/>
			</Actions>
		</Event>
	</Events>
</Page>
