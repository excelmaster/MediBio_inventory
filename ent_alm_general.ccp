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
				<Grid id="76" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="ent_alm_general1" connection="Connection1" dataSource="ent_alm_general" orderBy="id" pageSizeLimit="100" pageSize="True" wizardCaption="{res:ent_alm_general_GridForm}" wizardTheme="Compact" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="True" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="id" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="44" isParent="True">
					<Components>
						<Link id="79" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ent_alm_general1_Insert" hrefSource="Crud_entAlmGeneral.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_Insert" wizardTheme="Compact" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_InsertLink}','textSourceDB':'','hrefSource':'Crud_entAlmGeneral.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="80" fieldSourceType="DBColumn" dataType="Text" html="False" name="ent_alm_general1_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_TotalRecords" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components/>
							<Events>
								<Event name="BeforeShow" type="Server">
									<Actions>
										<Action actionName="Retrieve number of records" actionCategory="Database" id="81"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Label>
						<Panel id="82" visible="True" name="Header_id" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="83" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_idSorter_id" wizardThemeVersion="3.0">
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
						<Panel id="84" visible="True" name="Header_fecha_proceso" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="85" visible="True" name="Sorter_fecha_proceso" column="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="fecha_proceso" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_fecha_procesoSorter_fecha_proceso" wizardThemeVersion="3.0">
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
						<Panel id="86" visible="True" name="Header_Orden_compra" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="87" visible="True" name="Sorter_Orden_compra" column="Orden_compra" wizardCaption="{res:Orden_compra}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="Orden_compra" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_Orden_compraSorter_Orden_compra" wizardThemeVersion="3.0">
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
						<Panel id="88" visible="True" name="Header_observaciones" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="89" visible="True" name="Sorter_observaciones" column="observaciones" wizardCaption="{res:observaciones}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="observaciones" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_observacionesSorter_observaciones" wizardThemeVersion="3.0">
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
						<Panel id="90" visible="True" name="Header_activa" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="91" visible="True" name="Sorter_activa" column="activa" wizardCaption="{res:activa}" wizardTheme="Compact" wizardSortingType="SimpleDir" wizardControl="activa" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_activaSorter_activa" wizardThemeVersion="3.0">
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
						<Panel id="93" visible="True" name="Data_id" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Link id="94" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="id" fieldSource="id" hrefSource="Crud_entAlmGeneral.ccp" PathID="Contentent_alm_general1Data_idid" linkProperties="{'textSource':'Productos ','textSourceDB':'id','hrefSource':'Crud_entAlmGeneral.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'1':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'2':{'sourceType':'URL','parameterSource':'id','parameterName':'id'},'3':{'sourceType':'URL','parameterSource':'id','parameterName':'id'},'4':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'5':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'length':6,'objectType':'linkParameters'}}" wizardUseTemplateBlock="False">
<Components/>
<Events/>
<LinkParameters>
<LinkParameter id="95" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
</LinkParameters>
<Attributes/>
<Features/>
</Link>
</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="97" visible="True" name="Data_fecha_proceso" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="98" fieldSourceType="DBColumn" dataType="Date" html="False" name="fecha_proceso" fieldSource="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_fecha_procesofecha_proceso" wizardTheme="Compact" wizardThemeVersion="3.0" DBFormat="yyyy-mm-dd HH:nn:ss">
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
						<Panel id="100" visible="True" name="Data_Orden_compra" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="101" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Orden_compra" fieldSource="Orden_compra" wizardCaption="{res:Orden_compra}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Orden_compraOrden_compra" wizardTheme="Compact" wizardThemeVersion="3.0">
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
						<Panel id="103" visible="True" name="Data_observaciones" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="104" fieldSourceType="DBColumn" dataType="Text" html="False" name="observaciones" fieldSource="observaciones" wizardCaption="{res:observaciones}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_observacionesobservaciones" wizardTheme="Compact" wizardThemeVersion="3.0">
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
						<Panel id="106" visible="True" name="Data_activa" wizardTheme="Compact" wizardThemeVersion="3.0">
							<Components>
								<Label id="107" fieldSourceType="DBColumn" dataType="Text" html="False" name="activa" fieldSource="activa" wizardCaption="{res:activa}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_activaactiva" wizardTheme="Compact" wizardThemeVersion="3.0">
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
						<Navigator id="108" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Compact" wizardImagesScheme="Compact" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events>
						<Event name="BeforeShowRow" type="Server">
							<Actions>
								<Action actionName="Set Row Style" actionCategory="General" id="92" styles="RowCompact;AltRowCompact" name="rowStyle"/>
							</Actions>
						</Event>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="115" searchForm="ent_alm_generalSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,fecha_proceso,Orden_compra,observaciones,activa"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="77" tableName="ent_alm_general"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="78" tableName="ent_alm_general" fieldName="id"/>
						<Field id="96" tableName="ent_alm_general" fieldName="fecha_proceso"/>
						<Field id="99" tableName="ent_alm_general" fieldName="Orden_compra"/>
						<Field id="102" tableName="ent_alm_general" fieldName="observaciones"/>
						<Field id="105" tableName="ent_alm_general" fieldName="activa"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="109" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_generalSearch" searchIds="109" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Compact" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="button" wizardDefaultButton="True" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="ent_alm_general.ccp" PathID="Contentent_alm_generalSearch" wizardThemeVersion="3.0" composition="44">
					<Components>
						<Link id="110" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="ent_alm_general.ccp" removeParameters="s_keyword;ent_alm_generalPageSize" wizardTheme="Compact" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="Contentent_alm_generalSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="111" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Compact" wizardCaption="{res:CCS_Search}" PathID="Contentent_alm_generalSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="112" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,fecha_proceso,Orden_compra,observaciones,activa" wizardTheme="Compact" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_alm_generalSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="113" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Compact" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="Contentent_alm_generalSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="114" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="ent_alm_generalPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Compact" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentent_alm_generalSearchent_alm_generalPageSize" wizardThemeVersion="3.0">
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
				<Link id="72" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Logout" hrefSource="login.ccp" wizardDefaultValue="{res:CCS_LogoutBtn}" PathID="MenuLogout">
					<Components/>
					<Events/>
					<LinkParameters>
						<LinkParameter id="73" sourceType="Expression" format="yyyy-mm-dd" name="Logout" source="&quot;True&quot;"/>
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
			<Components>
				<Link id="74" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="almacen_main.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver al menú','textSourceDB':'','hrefSource':'almacen_main.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Link id="75" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link2" PathID="Sidebar1Link2" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Ingresar productos','textSourceDB':'','hrefSource':'ent_alm_detalle.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}" hrefSource="ent_alm_detalle.ccp">
					<Components/>
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
		<CodeFile id="Events" language="PHPTemplates" name="ent_alm_general_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="ent_alm_general.php" forShow="True" url="ent_alm_general.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
