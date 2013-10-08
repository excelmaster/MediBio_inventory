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
				<Grid id="53" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="unidadesmedida" connection="Connection1" dataSource="unidadesmedida" orderBy="id" pageSizeLimit="100" pageSize="True" wizardCaption="{res:unidadesmedida_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="True" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="id" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="20" isParent="True">
					<Components>
						<Link id="58" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="unidadesmedida_Insert" hrefSource="unimed_mant.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentunidadesmedidaunidadesmedida_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="59" fieldSourceType="DBColumn" dataType="Text" html="False" name="unidadesmedida_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentunidadesmedidaunidadesmedida_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events>
								<Event name="BeforeShow" type="Server">
									<Actions>
										<Action actionName="Retrieve number of records" actionCategory="Database" id="60"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Label>
						<Panel id="61" visible="True" name="Header_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="62" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="ContentunidadesmedidaHeader_idSorter_id" wizardThemeVersion="3.0">
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
						<Panel id="63" visible="True" name="Header_descrp_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="64" visible="True" name="Sorter_descrp_unidad" column="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="descrp_unidad" wizardAddNbsp="False" PathID="ContentunidadesmedidaHeader_descrp_unidadSorter_descrp_unidad" wizardThemeVersion="3.0">
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
						<Panel id="65" visible="True" name="Header_obsv_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="66" visible="True" name="Sorter_obsv_unidad" column="obsv_unidad" wizardCaption="{res:obsv_unidad}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="obsv_unidad" wizardAddNbsp="False" PathID="ContentunidadesmedidaHeader_obsv_unidadSorter_obsv_unidad" wizardThemeVersion="3.0">
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
						<Panel id="67" visible="True" name="Data_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Link id="68" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" html="False" hrefType="Page" preserveParameters="GET" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" linkProperties="''" wizardAlign="right" wizardAddNbsp="True" wizardThemeItem="GridA" PathID="ContentunidadesmedidaData_idid" wizardTheme="Blueprint" wizardThemeVersion="3.0" urlType="Relative">
									<Components/>
									<Events/>
									<LinkParameters>
										<LinkParameter id="69" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
									</LinkParameters>
									<Attributes/>
									<Features/>
								</Link>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="70" visible="True" name="Data_descrp_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="71" fieldSourceType="DBColumn" dataType="Text" html="False" name="descrp_unidad" fieldSource="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentunidadesmedidaData_descrp_unidaddescrp_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="72" visible="True" name="Data_obsv_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="73" fieldSourceType="DBColumn" dataType="Text" html="False" name="obsv_unidad" fieldSource="obsv_unidad" wizardCaption="{res:obsv_unidad}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentunidadesmedidaData_obsv_unidadobsv_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="74" visible="True" name="Data_Alt_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Link id="75" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" html="False" hrefType="Page" preserveParameters="GET" name="Alt_id" fieldSource="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" hrefSource="unimed_mant.ccp" wizardThemeItem="FooterA" PathID="ContentunidadesmedidaData_Alt_idAlt_id" wizardThemeVersion="3.0" urlType="Relative">
									<Components/>
									<Events/>
									<LinkParameters>
										<LinkParameter id="76" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
									</LinkParameters>
									<Attributes/>
									<Features/>
								</Link>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="77" visible="True" name="Data_Alt_descrp_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="78" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_descrp_unidad" fieldSource="descrp_unidad" wizardCaption="{res:descrp_unidad}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentunidadesmedidaData_Alt_descrp_unidadAlt_descrp_unidad" wizardThemeVersion="3.0">
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
						<Panel id="79" visible="True" name="Data_Alt_obsv_unidad" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="80" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_obsv_unidad" fieldSource="obsv_unidad" wizardCaption="{res:obsv_unidad}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentunidadesmedidaData_Alt_obsv_unidadAlt_obsv_unidad" wizardThemeVersion="3.0">
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
						<Navigator id="81" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="90" searchForm="unidadesmedidaSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,descrp_unidad,obsv_unidad" eventType="Server"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="54" tableName="unidadesmedida"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="55" tableName="unidadesmedida" fieldName="id"/>
						<Field id="56" tableName="unidadesmedida" fieldName="descrp_unidad"/>
						<Field id="57" tableName="unidadesmedida" fieldName="obsv_unidad"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="82" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="unidadesmedidaSearch" searchIds="82" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="button" wizardDefaultButton="True" gridSearchSortField="True" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="unimed_mant.ccp" PathID="ContentunidadesmedidaSearch" wizardThemeVersion="3.0" composition="20">
					<Components>
						<Link id="83" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="unimed_mant.ccp" removeParameters="s_keyword;unidadesmedidaOrder;unidadesmedidaDir;unidadesmedidaPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="ContentunidadesmedidaSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="84" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" PathID="ContentunidadesmedidaSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="85" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,descrp_unidad,obsv_unidad" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="ContentunidadesmedidaSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="86" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="ContentunidadesmedidaSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="87" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="unidadesmedidaOrder" dataSource=";{res:CCS_SelectField};Sorter_id;{res:id};Sorter_descrp_unidad;{res:descrp_unidad};Sorter_obsv_unidad;{res:obsv_unidad}" wizardTheme="Blueprint" wizardCaption="{res:CCS_SortBy}" wizardThemeVersion="3.0">
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
						<ListBox id="88" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="unidadesmedidaDir" dataSource=";{res:CCS_SelectOrder};ASC;{res:CCS_ASC};DESC;{res:CCS_DESC}" wizardTheme="Blueprint" wizardCaption=" " PathID="ContentunidadesmedidaSearchunidadesmedidaDir" wizardThemeVersion="3.0">
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
						<ListBox id="89" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="unidadesmedidaPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="ContentunidadesmedidaSearchunidadesmedidaPageSize" wizardThemeVersion="3.0">
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
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
	</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="unimed_mant.php" forShow="True" url="unimed_mant.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="unimed_mant_events.php" forShow="False" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
