<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_reports/medibio_reports/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Link id="5" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Report_Print" hrefSource="rpt_provee.ccp" wizardTheme="Blueprint" wizardThemeType="File" wizardDefaultValue="{res:CCS_ReportPrintLink}" wizardUseTemplateBlock="True" wizardBeforeHTML="&lt;p align=&quot;right&quot;&gt;" wizardAfterHTML="&lt;/p&gt;" wizardLinkTarget="_blank" composition="16" PathID="ContentReport_Print">
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
				<Report id="8" secured="False" enablePrint="True" showMode="Web" sourceType="Table" returnValueType="Number" linesPerWebPage="20" name="proveedores" connection="Connection1" dataSource="proveedores" composition="16" isParent="True" pageSizeLimit="100" wizardCaption="{res:proveedores_ReportForm}" changedCaptionReport="False" wizardTheme="Blueprint" wizardLayoutType="Tabular" wizardGridPaging="Centered" wizardGridSortingType="SimpleDir" wizardHideDetail="False" wizardPercentForSums="False" wizardEnablePrintMode="True" wizardReportSeparator="True" wizardReportAddTotalRecords="True" wizardReportAddPageNumbers="False" wizardReportAddNbsp="False" wizardReportAddDateTime="True" wizardReportDateTimeAs="CurrentDateTime" wizardReportAddRowNumber="False" wizardReportRowNumberResetAt="Report" wizardUseSearch="True" wizardNoRecords="{res:CCS_NoRecords}" wizardUseInterVariables="True" wizardThemeApplyTo="Component" reportAddTemplatePanel="False" wizardCreateLinkToPrintablePage="True" wizardUseClientPaging="True" wizardThemeVersion="3.0">
					<Components>
						<Section id="10" visible="True" lines="0" name="Report_Header" wizardSectionType="ReportHeader" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="16" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalRecords" function="Count" wizardTheme="Blueprint" wizardUseTemplateBlock="False" PathID="ContentproveedoresReport_HeaderReport_TotalRecords" wizardThemeVersion="3.0">
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
						<Section id="11" visible="True" lines="1" name="Page_Header" wizardSectionType="PageHeader" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Sorter id="19" visible="True" name="Sorter_id" column="id" wizardCaption="{res:id}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="id" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="21" visible="True" name="Sorter_razon_social" column="razon_social" wizardCaption="{res:razon_social}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="razon_social" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="23" visible="True" name="Sorter_nombre" column="nombre" wizardCaption="{res:nombre}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="nombre" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="25" visible="True" name="Sorter_nit" column="nit" wizardCaption="{res:nit}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="nit" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="27" visible="True" name="Sorter_direccion_1" column="direccion_1" wizardCaption="{res:direccion_1}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="direccion_1" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="29" visible="True" name="Sorter_telfijo_1" column="telfijo_1" wizardCaption="{res:telfijo_1}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="telfijo_1" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="31" visible="True" name="Sorter_celular_1" column="celular_1" wizardCaption="{res:celular_1}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="celular_1" wizardThemeVersion="3.0">
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
						<Section id="12" visible="True" lines="1" name="Detail" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="20" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="id" fieldSource="id" fieldTableSource="proveedores" wizardCaption="{res:id}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardAlign="right" PathID="ContentproveedoresDetailid" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="22" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="razon_social" fieldSource="razon_social" fieldTableSource="proveedores" wizardCaption="{res:razon Social}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentproveedoresDetailrazon_social" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="24" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="nombre" fieldSource="nombre" fieldTableSource="proveedores" wizardCaption="{res:nombre}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentproveedoresDetailnombre" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="26" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="nit" fieldSource="nit" fieldTableSource="proveedores" wizardCaption="{res:nit}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentproveedoresDetailnit" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="28" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="direccion_1" fieldSource="direccion_1" fieldTableSource="proveedores" wizardCaption="{res:direccion 1}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentproveedoresDetaildireccion_1" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="30" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="telfijo_1" fieldSource="telfijo_1" fieldTableSource="proveedores" wizardCaption="{res:telfijo 1}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentproveedoresDetailtelfijo_1" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="32" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="celular_1" fieldSource="celular_1" fieldTableSource="proveedores" wizardCaption="{res:celular 1}" wizardIsPassword="False" visible="Yes" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentproveedoresDetailcelular_1" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<Panel id="33" visible="True" name="Separator" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Section id="13" visible="True" lines="0" name="Report_Footer" wizardSectionType="ReportFooter" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<Panel id="14" visible="True" name="NoRecords" wizardNoRecords="{res:CCS_NoRecords}" wizardTheme="Blueprint" wizardThemeVersion="3.0">
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
						<Section id="15" visible="True" lines="1" name="Page_Footer" wizardSectionType="PageFooter" pageBreakAfter="True" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="17" fieldSourceType="SpecialValue" dataType="Date" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentDateTime" fieldSource="CurrentDateTime" wizardTheme="Blueprint" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardInsertToDateTD="True" PathID="ContentproveedoresPage_FooterReport_CurrentDateTime" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<Navigator id="18" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Centered" wizardFirst="True" wizardFirstText="{res:CCS_First}" wizardPrev="True" wizardPrevText="{res:CCS_Previous}" wizardNext="True" wizardNextText="{res:CCS_Next}" wizardLast="True" wizardLastText="{res:CCS_Last}" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="{res:CCS_Of}" wizardTheme="Blueprint" wizardImagesScheme="Blueprint" wizardThemeVersion="3.0">
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
								<Action actionName="Advanced Search" actionCategory="General" id="42" searchForm="proveedoresSearch" searchConditions="searchConditions" searchControl="s_keyword" searchDBFields="id,razon_social,nombre,nit,slogan,direccion_1,direccion_2,direccion_3,telfijo_1,telfijo_2,telfijo_3,celular_1,celular_2,celular_3,representante_legal"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="9" tableName="proveedores"/>
					</JoinTables>
					<JoinLinks/>
					<Fields/>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<ReportGroups/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Report>
				<Record id="34" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="proveedoresSearch" searchIds="34" fictitiousConnection="Connection1" wizardCaption="{res:Search_Form}" wizardTheme="Blueprint" wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="Advanced" wizardInteractiveSearch="True" gridSearchRecPerPage="True" wizardTypeButtons="image" wizardDefaultButton="True" gridSearchSortField="True" wizardUseInterVariables="True" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="Report" returnPage="rpt_provee.ccp" PathID="ContentproveedoresSearch" wizardThemeVersion="3.0" composition="16">
					<Components>
						<Link id="35" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="rpt_provee.ccp" removeParameters="s_keyword;proveedoresOrder;proveedoresDir;proveedoresPageSize" wizardTheme="Blueprint" wizardThemeItem="SorterLink" wizardDefaultValue="{res:CCS_Clear}" PathID="ContentproveedoresSearchClearParameters" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="36" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardTheme="Blueprint" wizardCaption="{res:CCS_Search}" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonSearchOn" PathID="ContentproveedoresSearchButton_DoSearch" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="37" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="s_keyword" fieldSource="id,razon_social,nombre,nit,slogan,direccion_1,direccion_2,direccion_3,telfijo_1,telfijo_2,telfijo_3,celular_1,celular_2,celular_3,representante_legal" wizardTheme="Blueprint" wizardIsPassword="False" wizardCaption="{res:CCS_Filter}" caption="{res:CCS_Filter}" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="ContentproveedoresSearchs_keyword" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<ListBox id="38" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="searchConditions" dataSource="1;{res:CCS_AdvSearchAnyOfWords};2;{res:CCS_AdvSearchAllWords};3;{res:CCS_AdvSearchExactPhrase}" wizardTheme="Blueprint" wizardCaption="{res:CCS_AdvSearchConditionsCaption}" PathID="ContentproveedoresSearchsearchConditions" wizardThemeVersion="3.0">
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
						<ListBox id="39" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="proveedoresOrder" dataSource=";{res:CCS_SelectField};Sorter_id;{res:id};Sorter_razon_social;{res:razon_social};Sorter_nombre;{res:nombre};Sorter_nit;{res:nit};Sorter_direccion_1;{res:direccion_1};Sorter_telfijo_1;{res:telfijo_1};Sorter_celular_1;{res:celular_1}" wizardTheme="Blueprint" wizardCaption="{res:CCS_SortBy}" wizardThemeVersion="3.0">
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
						<ListBox id="40" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="proveedoresDir" dataSource=";{res:CCS_SelectOrder};ASC;{res:CCS_ASC};DESC;{res:CCS_DESC}" wizardTheme="Blueprint" wizardCaption=" " PathID="ContentproveedoresSearchproveedoresDir" wizardThemeVersion="3.0">
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
						<ListBox id="41" visible="Yes" fieldSourceType="DBColumn" sourceType="ListOfValues" dataType="Text" returnValueType="Number" name="proveedoresPageSize" dataSource=";{res:CCS_SelectValue};5;5;10;10;25;25;100;100" wizardTheme="Blueprint" wizardCaption="{res:CCS_RecPerPage}" wizardNoEmptyValue="True" PathID="ContentproveedoresSearchproveedoresPageSize" wizardThemeVersion="3.0">
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
				<Link id="43" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="MenuLink1" hrefSource="provee_mant.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver a Proveedores','textSourceDB':'','hrefSource':'provee_mant.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
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
		<CodeFile id="Events" language="PHPTemplates" name="rpt_provee_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="rpt_provee.php" forShow="True" url="rpt_provee.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
