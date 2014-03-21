<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
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
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Grid id="6" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="ent_alm_general1" connection="Connection1" dataSource="ent_alm_general" pageSizeLimit="100" pageSize="True" wizardCaption="{res:ent_alm_general_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="True" wizardType="GridRecord" wizardGridRecordLinkFieldType="custom" wizardGridRecordLinkField="{res:CCS_CustomLinkField}" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="30" isParent="True">
					<Components>
						<Link id="13" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ent_alm_general1_Insert" hrefSource="ent_alm_general.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="14" fieldSourceType="DBColumn" dataType="Text" html="False" name="ent_alm_general1_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentent_alm_general1ent_alm_general1_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events>
								<Event name="BeforeShow" type="Server">
									<Actions>
										<Action actionName="Retrieve number of records" actionCategory="Database" id="15"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Label>
						<Panel id="16" visible="True" name="Header_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="17" visible="True" name="Header_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="18" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_idSorter_id" wizardThemeVersion="3.0">
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
						<Panel id="19" visible="True" name="Header_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="20" visible="True" name="Sorter_fecha_proceso" column="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="fecha_proceso" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_fecha_procesoSorter_fecha_proceso" wizardThemeVersion="3.0">
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
						<Panel id="21" visible="True" name="Header_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="22" visible="True" name="Sorter_num_factura" column="num_factura" wizardCaption="{res:num_factura}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="num_factura" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_num_facturaSorter_num_factura" wizardThemeVersion="3.0">
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
						<Panel id="23" visible="True" name="Header_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="24" visible="True" name="Sorter_observaciones" column="observaciones" wizardCaption="{res:observaciones}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="observaciones" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_observacionesSorter_observaciones" wizardThemeVersion="3.0">
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
						<Panel id="25" visible="True" name="Header_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="26" visible="True" name="Sorter_activa" column="activa" wizardCaption="{res:activa}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="activa" wizardAddNbsp="False" PathID="Contentent_alm_general1Header_activaSorter_activa" wizardThemeVersion="3.0">
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
						<Panel id="27" visible="True" name="Data_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Link id="28" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Detail" wizardCaption="{res:Detail}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" hrefSource="ent_alm_general.ccp" wizardThemeItem="GridA" PathID="Contentent_alm_general1Data_DetailDetail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<LinkParameters>
										<LinkParameter id="29" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
									</LinkParameters>
									<Attributes/>
									<Features/>
								</Link>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="30" visible="True" name="Data_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="31" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_idid" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="32" visible="True" name="Data_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="33" fieldSourceType="DBColumn" dataType="Date" html="False" name="fecha_proceso" fieldSource="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_fecha_procesofecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="34" visible="True" name="Data_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="35" fieldSourceType="DBColumn" dataType="Text" html="False" name="num_factura" fieldSource="num_factura" wizardCaption="{res:num_factura}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_num_facturanum_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="36" visible="True" name="Data_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="37" fieldSourceType="DBColumn" dataType="Text" html="False" name="observaciones" fieldSource="observaciones" wizardCaption="{res:observaciones}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_observacionesobservaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="38" visible="True" name="Data_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="39" fieldSourceType="DBColumn" dataType="Text" html="False" name="activa" fieldSource="activa" wizardCaption="{res:activa}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_activaactiva" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Panel id="40" visible="True" name="Data_Alt_Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Link id="41" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Alt_Detail" wizardCaption="{res:Detail}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" wizardDefaultValue="{res:CCS_CustomLinkField}" hrefSource="ent_alm_general.ccp" wizardThemeItem="FooterA" PathID="Contentent_alm_general1Data_Alt_DetailAlt_Detail" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<LinkParameters>
										<LinkParameter id="42" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
									</LinkParameters>
									<Attributes/>
									<Features/>
								</Link>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Panel>
						<Panel id="43" visible="True" name="Data_Alt_id" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="44" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_id" fieldSource="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_idAlt_id" wizardThemeVersion="3.0">
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
						<Panel id="45" visible="True" name="Data_Alt_fecha_proceso" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="46" fieldSourceType="DBColumn" dataType="Date" html="False" name="Alt_fecha_proceso" fieldSource="fecha_proceso" wizardCaption="{res:fecha_proceso}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_fecha_procesoAlt_fecha_proceso" wizardThemeVersion="3.0">
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
						<Panel id="47" visible="True" name="Data_Alt_num_factura" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="48" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_num_factura" fieldSource="num_factura" wizardCaption="{res:num_factura}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_num_facturaAlt_num_factura" wizardThemeVersion="3.0">
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
						<Panel id="49" visible="True" name="Data_Alt_observaciones" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="50" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_observaciones" fieldSource="observaciones" wizardCaption="{res:observaciones}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_observacionesAlt_observaciones" wizardThemeVersion="3.0">
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
						<Panel id="51" visible="True" name="Data_Alt_activa" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Label id="52" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_activa" fieldSource="activa" wizardCaption="{res:activa}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentent_alm_general1Data_Alt_activaAlt_activa" wizardThemeVersion="3.0">
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
						<Navigator id="53" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="60" searchForm="ent_alm_generalSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,fecha_proceso,num_factura,observaciones,activa"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="7" tableName="ent_alm_general"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="8" tableName="ent_alm_general" fieldName="id"/>
						<Field id="9" tableName="ent_alm_general" fieldName="fecha_proceso"/>
						<Field id="10" tableName="ent_alm_general" fieldName="num_factura"/>
						<Field id="11" tableName="ent_alm_general" fieldName="observaciones"/>
						<Field id="12" tableName="ent_alm_general" fieldName="activa"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="54" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_generalSearch" searchIds="54" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="button" wizardDefaultButton="True" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="ent_alm_general.ccp" PathID="Contentent_alm_generalSearch" wizardThemeVersion="3.0" composition="30">
					<Components>
						<Link id="55" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="ent_alm_general.ccp" removeParameters="s_keyword;ent_alm_generalPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="Contentent_alm_generalSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="56" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" PathID="Contentent_alm_generalSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="57" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,fecha_proceso,num_factura,observaciones,activa" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentent_alm_generalSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="58" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="Contentent_alm_generalSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="59" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="ent_alm_generalPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="Contentent_alm_generalSearchent_alm_generalPageSize" wizardThemeVersion="3.0">
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
				<Record id="61" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="ent_alm_general2" connection="Connection1" dataSource="ent_alm_general" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="button" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:ent_alm_general_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Users/betofierro/Documents/GitHub/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentent_alm_general2" wizardThemeVersion="3.0" composition="30">
					<Components>
						<Button id="64" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" PathID="Contentent_alm_general2Button_Insert" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="65" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" PathID="Contentent_alm_general2Button_Cancel" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="66" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fecha_proceso" fieldSource="fecha_proceso" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fecha_proceso}" caption="{res:fecha_proceso}" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentent_alm_general2fecha_proceso" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features>
								<JDateTimePicker id="67" enabled="True" name="InlineDatePicker1" category="jQuery"><Components/>
									<Events/>
									<ControlPoints/>
									<Features/>
								</JDateTimePicker></Features>
						</TextBox>
						<TextBox id="68" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="num_factura" fieldSource="num_factura" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:num_factura}" caption="{res:num_factura}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentent_alm_general2num_factura" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="69" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="observaciones" fieldSource="observaciones" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:observaciones}" caption="{res:observaciones}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentent_alm_general2observaciones" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="70" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="activa" fieldSource="activa" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:activa}" caption="{res:activa}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentent_alm_general2activa" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="63" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="62" tableName="ent_alm_general"/>
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
		<CodeFile id="Events" language="PHPTemplates" name="ent_alm_general_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="ent_alm_general.php" forShow="True" url="ent_alm_general.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
