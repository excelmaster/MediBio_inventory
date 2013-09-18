<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" needGeneration="0" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp">
	<Components>
		<Panel id="123" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="124" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Grid id="68" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="clientes" connection="Connection1" dataSource="clientes, tipo_doc" orderBy="priapellido, segapellido, prinombre desc" pageSizeLimit="100" pageSize="True" wizardCaption="{res:clientestipo_doc_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="custom" wizardGridRecordLinkField="{res:CCS_CustomLinkField}" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="13" isParent="True">
					<Components>
						<Label id="82" fieldSourceType="DBColumn" dataType="Text" html="False" name="clientes_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentclientesclientes_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Sorter id="84" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="ContentclientesSorter_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="85" visible="True" name="Sorter_prinombre" column="prinombre" wizardCaption="{res:prinombre}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="prinombre" wizardAddNbsp="False" PathID="ContentclientesSorter_prinombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="86" visible="True" name="Sorter_demasnombres" column="demasnombres" wizardCaption="{res:demasnombres}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="demasnombres" wizardAddNbsp="False" PathID="ContentclientesSorter_demasnombres" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="87" visible="True" name="Sorter_priapellido" column="priapellido" wizardCaption="{res:priapellido}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="priapellido" wizardAddNbsp="False" PathID="ContentclientesSorter_priapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="88" visible="True" name="Sorter_segapellido" column="segapellido" wizardCaption="{res:segapellido}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="segapellido" wizardAddNbsp="False" PathID="ContentclientesSorter_segapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="89" visible="True" name="Sorter_tipo_documento" column="tipo_documento" wizardCaption="{res:tipo_documento}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="tipo_documento" wizardAddNbsp="False" PathID="ContentclientesSorter_tipo_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="90" visible="True" name="Sorter_num_documento" column="num_documento" wizardCaption="{res:num_documento}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="num_documento" wizardAddNbsp="False" PathID="ContentclientesSorter_num_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Link id="91" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Detail" wizardCaption="{res:Detail}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" hrefSource="Crud_Clentes.ccp" wizardThemeItem="GridA" PathID="ContentclientesDetail" wizardTheme="Blueprint" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_CustomLinkField}','textSourceDB':'','hrefSource':'Crud_Clentes.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'length':1,'objectType':'linkParameters'}}" urlType="Relative">
							<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="92" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="93" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentclientesid" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="94" fieldSourceType="DBColumn" dataType="Text" html="False" name="prinombre" fieldSource="prinombre" wizardCaption="{res:prinombre}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientesprinombre" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="95" fieldSourceType="DBColumn" dataType="Text" html="False" name="demasnombres" fieldSource="demasnombres" wizardCaption="{res:demasnombres}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientesdemasnombres" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="96" fieldSourceType="DBColumn" dataType="Text" html="False" name="priapellido" fieldSource="priapellido" wizardCaption="{res:priapellido}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientespriapellido" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="97" fieldSourceType="DBColumn" dataType="Text" html="False" name="segapellido" fieldSource="segapellido" wizardCaption="{res:segapellido}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientessegapellido" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="98" fieldSourceType="DBColumn" dataType="Text" html="False" name="tipo_documento" fieldSource="tipo_documento" wizardCaption="{res:tipo_documento}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientestipo_documento" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="99" fieldSourceType="DBColumn" dataType="Text" html="False" name="num_documento" fieldSource="num_documento" wizardCaption="{res:num_documento}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientesnum_documento" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Link id="100" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Alt_Detail" wizardCaption="{res:Detail}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" wizardDefaultValue="{res:CCS_CustomLinkField}" hrefSource="Crud_Clentes.ccp" wizardThemeItem="FooterA" PathID="ContentclientesAlt_Detail" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_CustomLinkField}','textSourceDB':'','hrefSource':'Crud_Clentes.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'id','parameterName':'id'},'length':1,'objectType':'linkParameters'}}" urlType="Relative">
							<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="101" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="102" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_id" fieldSource="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="ContentclientesAlt_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="103" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_prinombre" fieldSource="prinombre" wizardCaption="{res:prinombre}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_prinombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="104" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_demasnombres" fieldSource="demasnombres" wizardCaption="{res:demasnombres}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_demasnombres" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="105" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_priapellido" fieldSource="priapellido" wizardCaption="{res:priapellido}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_priapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="106" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_segapellido" fieldSource="segapellido" wizardCaption="{res:segapellido}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_segapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="107" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_tipo_documento" fieldSource="tipo_documento" wizardCaption="{res:tipo_documento}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_tipo_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="108" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_num_documento" fieldSource="num_documento" wizardCaption="{res:num_documento}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_num_documento" wizardThemeVersion="3.0">
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
						<Link id="119" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="clientes_Insert1" hrefSource="Crud_Clientes.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentclientesclientes_Insert1" wizardTheme="Blueprint" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_InsertLink}','textSourceDB':'','hrefSource':'Crud_Clientes.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Link id="122" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="clientes_Insert2" hrefSource="Crud_Clientes.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentclientesclientes_Insert2" wizardTheme="Blueprint" wizardThemeVersion="3.0" linkProperties="{'textSource':'{res:CCS_InsertLink}','textSourceDB':'','hrefSource':'Crud_Clientes.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="118" searchForm="clientesSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,prinombre,demasnombres,priapellido,segapellido,tipo_documento,num_documento"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="69" posHeight="358" posLeft="10" posTop="10" posWidth="198" schemaName="a4104228_mb" tableName="clientes"/>
						<JoinTable id="70" posHeight="103" posLeft="272" posTop="9" posWidth="121" schemaName="a4104228_mb" tableName="tipo_doc"/>
					</JoinTables>
					<JoinLinks>
						<JoinTable2 id="71" conditionType="Equal" fieldLeft="clientes.tipo_documento" fieldRight="tipo_doc.id_tip_doc" joinType="inner" tableLeft="clientes" tableRight="tipo_doc"/>
					</JoinLinks>
					<Fields>
						<Field id="72" fieldName="id" tableName="clientes"/>
						<Field id="73" fieldName="priapellido" tableName="clientes"/>
						<Field id="74" fieldName="segapellido" tableName="clientes"/>
						<Field id="75" fieldName="prinombre" tableName="clientes"/>
						<Field id="76" fieldName="demasnombres" tableName="clientes"/>
						<Field id="77" fieldName="tipo_documento" tableName="clientes"/>
						<Field id="78" fieldName="num_documento" tableName="clientes"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="110" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="clientesSearch" searchIds="110" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="True" gridSearchSortField="True" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="Clientes_mant.ccp" PathID="ContentclientesSearch" wizardThemeVersion="3.0" composition="13">
					<Components>
						<Link id="111" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="Clientes_mant.ccp" removeParameters="s_keyword;clientes_tipo_docOrder;clientes_tipo_docDir;clientes_tipo_docPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="ContentclientesSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="112" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="ContentclientesSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="113" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,prinombre,demasnombres,priapellido,segapellido,tipo_documento,num_documento" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="ContentclientesSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="114" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="ContentclientesSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="115" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="clientes_tipo_docOrder" dataSource=";{res:CCS_SelectField};Sorter_id;{res:id};Sorter_prinombre;{res:prinombre};Sorter_demasnombres;{res:demasnombres};Sorter_priapellido;{res:priapellido};Sorter_segapellido;{res:segapellido};Sorter_tipo_documento;{res:tipo_documento};Sorter_num_documento;{res:num_documento}" wizardTheme="Blueprint" wizardCaption="{res:CCS_SortBy}" wizardThemeVersion="3.0">
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
						<ListBox id="116" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="clientes_tipo_docDir" dataSource=";{res:CCS_SelectOrder};ASC;{res:CCS_ASC};DESC;{res:CCS_DESC}" wizardTheme="Blueprint" wizardCaption=" " PathID="ContentclientesSearchclientes_tipo_docDir" wizardThemeVersion="3.0">
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
						<ListBox id="117" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="clientes_tipo_docPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="ContentclientesSearchclientes_tipo_docPageSize" wizardThemeVersion="3.0">
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
				<Panel id="120" visible="True" name="Panel1" PathID="ContentPanel1">
					<Components>
						<Label id="121" fieldSourceType="DBColumn" dataType="Text" html="False" name="Label1" PathID="ContentPanel1Label1" defaultValue="&quot;MANTENIMIENTO DE CLIENTES&quot;">
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
		<Panel id="125" visible="True" name="Menu" contentPlaceholder="Menu">
			<Components>
				<Link id="127" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Logout" hrefSource="login.ccp" wizardDefaultValue="{res:CCS_LogoutBtn}" PathID="MenuLogout">
					<Components/>
					<Events>
						<Event name="BeforeShow" type="Server">
							<Actions>
								<Action actionName="Logout" actionCategory="Security" id="129" pageRedirects="True"/>
							</Actions>
						</Event>
					</Events>
					<LinkParameters>
						<LinkParameter id="128" sourceType="Expression" format="yyyy-mm-dd" name="Logout" source="&quot;True&quot;"/>
					</LinkParameters>
					<Attributes/>
					<Features/>
				</Link>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="126" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
			<Components>
				<Link id="66" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="admin.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver al panel principal','textSourceDB':'','hrefSource':'admin.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Link id="67" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link2" PathID="Sidebar1Link2" hrefSource="rpt_clientes.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Ir a pagina de reportes','textSourceDB':'','hrefSource':'rpt_clientes.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
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
		<CodeFile id="Code" language="PHPTemplates" name="Clientes_mant.php" forShow="True" url="Clientes_mant.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="Clientes_mant_events.php" forShow="False" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
