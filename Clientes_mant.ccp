<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0" showSyncDlg="false">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Grid id="6" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="20" name="clientes" connection="Connection1" dataSource="clientes" pageSizeLimit="100" pageSize="True" wizardCaption="{res:clientes_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="True" wizardAltRecordType="Controls" wizardRecordSeparator="True" wizardNoRecords="{res:CCS_NoRecords}" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="custom" wizardGridRecordLinkField="Detalles" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0" composition="17" isParent="True">
					<Components>
						<Link id="14" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="clientes_Insert" hrefSource="Clientes_mant.ccp" removeParameters="id" wizardThemeItem="FooterA" wizardDefaultValue="{res:CCS_InsertLink}" wizardUseTemplateBlock="False" PathID="Contentclientesclientes_Insert" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="15" fieldSourceType="DBColumn" dataType="Text" html="False" name="clientes_TotalRecords" wizardUseTemplateBlock="False" PathID="Contentclientesclientes_TotalRecords" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events>
								<Event name="BeforeShow" type="Server">
									<Actions>
										<Action actionName="Retrieve number of records" actionCategory="Database" id="16"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Label>
						<Sorter id="17" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardAddNbsp="False" PathID="ContentclientesSorter_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="18" visible="True" name="Sorter_prinombre" column="prinombre" wizardCaption="{res:prinombre}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="prinombre" wizardAddNbsp="False" PathID="ContentclientesSorter_prinombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="19" visible="True" name="Sorter_demasnombres" column="demasnombres" wizardCaption="{res:demasnombres}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="demasnombres" wizardAddNbsp="False" PathID="ContentclientesSorter_demasnombres" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="20" visible="True" name="Sorter_priapellido" column="priapellido" wizardCaption="{res:priapellido}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="priapellido" wizardAddNbsp="False" PathID="ContentclientesSorter_priapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="21" visible="True" name="Sorter_segapellido" column="segapellido" wizardCaption="{res:segapellido}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="segapellido" wizardAddNbsp="False" PathID="ContentclientesSorter_segapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="22" visible="True" name="Sorter_num_documento" column="num_documento" wizardCaption="{res:num_documento}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="num_documento" wizardAddNbsp="False" PathID="ContentclientesSorter_num_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Link id="23" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Detail" wizardCaption="{res:Detail}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" hrefSource="Clientes_mant.ccp" wizardThemeItem="GridA" PathID="ContentclientesDetail" wizardTheme="Blueprint" wizardThemeVersion="3.0" urlType="Relative">
							<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="24" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="25" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id" wizardCaption="{res:id}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentclientesid" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="26" fieldSourceType="DBColumn" dataType="Text" html="False" name="prinombre" fieldSource="prinombre" wizardCaption="{res:prinombre}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientesprinombre" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="27" fieldSourceType="DBColumn" dataType="Text" html="False" name="demasnombres" fieldSource="demasnombres" wizardCaption="{res:demasnombres}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientesdemasnombres" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="28" fieldSourceType="DBColumn" dataType="Text" html="False" name="priapellido" fieldSource="priapellido" wizardCaption="{res:priapellido}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientespriapellido" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="29" fieldSourceType="DBColumn" dataType="Text" html="False" name="segapellido" fieldSource="segapellido" wizardCaption="{res:segapellido}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientessegapellido" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="30" fieldSourceType="DBColumn" dataType="Text" html="False" name="num_documento" fieldSource="num_documento" wizardCaption="{res:num_documento}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentclientesnum_documento" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Link id="31" visible="Yes" fieldSourceType="CodeExpression" html="False" hrefType="Page" preserveParameters="GET" name="Alt_Detail" wizardCaption="{res:Detail}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" dataType="Text" wizardDefaultValue="Detalles" hrefSource="Clientes_mant.ccp" wizardThemeItem="FooterA" PathID="ContentclientesAlt_Detail" wizardThemeVersion="3.0" urlType="Relative">
							<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="32" sourceType="DataField" format="yyyy-mm-dd" name="id" source="id"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="33" fieldSourceType="DBColumn" dataType="Integer" html="False" name="Alt_id" fieldSource="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="ContentclientesAlt_id" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="34" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_prinombre" fieldSource="prinombre" wizardCaption="{res:prinombre}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_prinombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="35" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_demasnombres" fieldSource="demasnombres" wizardCaption="{res:demasnombres}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_demasnombres" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="36" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_priapellido" fieldSource="priapellido" wizardCaption="{res:priapellido}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_priapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="37" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_segapellido" fieldSource="segapellido" wizardCaption="{res:segapellido}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_segapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="38" fieldSourceType="DBColumn" dataType="Text" html="False" name="Alt_num_documento" fieldSource="num_documento" wizardCaption="{res:num_documento}" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentclientesAlt_num_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Navigator id="39" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardPageSize="True" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events>
						<Event name="BeforeBuildSelect" type="Server">
							<Actions>
								<Action actionName="Advanced Search" actionCategory="General" id="46" searchForm="clientesSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="prinombre,priapellido,num_documento"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="7" tableName="clientes"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="8" tableName="clientes" fieldName="id"/>
						<Field id="9" tableName="clientes" fieldName="demasnombres"/>
						<Field id="10" tableName="clientes" fieldName="prinombre"/>
						<Field id="11" tableName="clientes" fieldName="priapellido"/>
						<Field id="12" tableName="clientes" fieldName="segapellido"/>
						<Field id="13" tableName="clientes" fieldName="num_documento"/>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="40" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="clientesSearch" searchIds="40" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Horizontal" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="True" gridSearchSortField="False" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="Clientes_mant.ccp" PathID="ContentclientesSearch" wizardThemeVersion="3.0" composition="17">
					<Components>
						<Link id="41" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="Clientes_mant.ccp" removeParameters="s_keyword;clientesPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="ContentclientesSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="42" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="ContentclientesSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="43" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="prinombre,priapellido,num_documento" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="ContentclientesSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="44" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="ContentclientesSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="45" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="clientesPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="ContentclientesSearchclientesPageSize" wizardThemeVersion="3.0">
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
				<Record id="47" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="clientes1" connection="Connection1" dataSource="clientes" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="False" buttonsType="image" wizardRecordKey="id" encryptPasswordField="False" wizardUseInterVariables="True" pkIsAutoincrement="True" wizardCaption="{res:clientes_RecordForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Documents and Settings/Usuario/Mis documentos/CodeCharge Studio 5 Projects/invt_alternativo/Templates/Record/Horizontal.ccp|userTemplate" recordAddTemplatePanel="False" PathID="Contentclientes1" wizardThemeVersion="3.0" composition="17">
					<Components>
						<Button id="50" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardTheme="Blueprint" wizardCaption="{res:CCS_Insert}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonInsertOn" PathID="Contentclientes1Button_Insert" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="51" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardTheme="Blueprint" wizardCaption="{res:CCS_Update}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonUpdateOn" PathID="Contentclientes1Button_Update" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="52" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardTheme="Blueprint" wizardCaption="{res:CCS_Cancel}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonCancelOn" PathID="Contentclientes1Button_Cancel" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="53" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="prinombre" fieldSource="prinombre" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:prinombre}" caption="{res:prinombre}" required="True" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1prinombre" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="54" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="demasnombres" fieldSource="demasnombres" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:demasnombres}" caption="{res:demasnombres}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1demasnombres" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="55" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="priapellido" fieldSource="priapellido" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:priapellido}" caption="{res:priapellido}" required="True" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1priapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="56" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="segapellido" fieldSource="segapellido" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:segapellido}" caption="{res:segapellido}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1segapellido" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="57" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Text" returnValueType="Number" name="tipo_documento" fieldSource="tipo_documento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:tipo_documento}" caption="{res:tipo_documento}" required="True" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="tipo_doc" boundColumn="id_tip_doc" textColumn="sigla_tipDoc" PathID="Contentclientes1tipo_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="58" tableName="tipo_doc"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="59" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="num_documento" fieldSource="num_documento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:num_documento}" caption="{res:num_documento}" required="False" unique="False" wizardSize="50" wizardMaxLength="100" PathID="Contentclientes1num_documento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="60" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="lugar_nacimiento" fieldSource="lugar_nacimiento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:lugar_nacimiento}" caption="{res:lugar_nacimiento}" required="True" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="munc_dane" boundColumn="cod_Ciudad_DANE" textColumn="Munc_Depto" PathID="Contentclientes1lugar_nacimiento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="61" tableName="munc_dane"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="62" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="fecha_nacimiento" fieldSource="fecha_nacimiento" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="{res:fecha_nacimiento}" caption="{res:fecha_nacimiento}" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="Contentclientes1fecha_nacimiento" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features>
								<InlineDatePicker id="63" enabled="Yes" name="InlineDatePicker1" category="YahooUI">
									<Components/>
									<Events/>
									<ControlPoints/>
									<Features/>
								</InlineDatePicker>
							</Features>
						</TextBox>
						<ListBox id="64" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="lugar_residencia" fieldSource="lugar_residencia" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:lugar_residencia}" caption="{res:lugar_residencia}" required="False" unique="False" connection="Connection1" wizardEmptyCaption="{res:CCS_SelectValue}" dataSource="munc_dane" boundColumn="cod_Ciudad_DANE" textColumn="Munc_Depto" PathID="Contentclientes1lugar_residencia" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="65" tableName="munc_dane"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="66" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="direccion_residencia" fieldSource="direccion_residencia" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:direccion_residencia}" caption="{res:direccion_residencia}" required="False" unique="False" wizardSize="50" wizardMaxLength="200" PathID="Contentclientes1direccion_residencia" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="67" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_cliente_1" fieldSource="telfijo_cliente_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_cliente_1}" caption="{res:telfijo_cliente_1}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1telfijo_cliente_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="68" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_cliente_2" fieldSource="telfijo_cliente_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_cliente_2}" caption="{res:telfijo_cliente_2}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1telfijo_cliente_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="69" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telfijo_cliente_3" fieldSource="telfijo_cliente_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:telfijo_cliente_3}" caption="{res:telfijo_cliente_3}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1telfijo_cliente_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="70" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_cliente_1" fieldSource="celular_cliente_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_cliente_1}" caption="{res:celular_cliente_1}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1celular_cliente_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="71" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_cliente_2" fieldSource="celular_cliente_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_cliente_2}" caption="{res:celular_cliente_2}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1celular_cliente_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="72" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="celular_cliente_3" fieldSource="celular_cliente_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:celular_cliente_3}" caption="{res:celular_cliente_3}" required="False" unique="False" wizardSize="15" wizardMaxLength="15" PathID="Contentclientes1celular_cliente_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="73" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="email_cliente_1" fieldSource="email_cliente_1" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:email_cliente_1}" caption="{res:email_cliente_1}" required="False" unique="False" wizardSize="50" wizardMaxLength="150" PathID="Contentclientes1email_cliente_1" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="74" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="email_cliente_2" fieldSource="email_cliente_2" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:email_cliente_2}" caption="{res:email_cliente_2}" required="False" unique="False" wizardSize="50" wizardMaxLength="150" PathID="Contentclientes1email_cliente_2" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="75" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="email_cliente_3" fieldSource="email_cliente_3" wizardTheme="Blueprint" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="{res:email_cliente_3}" caption="{res:email_cliente_3}" required="False" unique="False" wizardSize="50" wizardMaxLength="150" PathID="Contentclientes1email_cliente_3" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="49" conditionType="Parameter" useIsNull="False" field="id" parameterSource="id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="48" tableName="clientes"/>
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
				<Panel id="76" visible="True" name="Panel1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="ContentPanel1">
<Components>
<Label id="77" fieldSourceType="DBColumn" dataType="Text" html="False" name="Label1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="ContentPanel1Label1" defaultValue="&quot;Mantenimiento de clientes&quot;">
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
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
	</Components>
	<CodeFiles>
		<CodeFile id="Events" language="PHPTemplates" name="Clientes_mant_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="Clientes_mant.php" forShow="True" url="Clientes_mant.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
