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
				<Grid id="6" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="main_redirection" connection="Connection1" dataSource="main_redirection" orderBy="name_sitio" pageSizeLimit="100" pageSize="True" wizardCaption="{res:main_redirection_GridForm}" wizardTheme="Blueprint" wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="False" wizardAltRecord="False" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="{res:CCS_NoRecords}" wizardUseSearch="False" wizardAddNbsp="True" gridTotalRecords="False" wizardAddPanels="False" wizardType="Grid" wizardUseInterVariables="True" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" wizardThemeVersion="3.0">
					<Components>
						<Sorter id="14" visible="True" name="Sorter_name_sitio" column="name_sitio" wizardCaption="{res:name_sitio}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="name_sitio" wizardAddNbsp="False" PathID="Contentmain_redirectionSorter_name_sitio" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="15" visible="True" name="Sorter_img_sitio" column="img_sitio" wizardCaption="{res:img_sitio}" wizardTheme="Blueprint" wizardSortingType="SimpleDir" wizardControl="img_sitio" wizardAddNbsp="False" PathID="Contentmain_redirectionSorter_img_sitio" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Label id="16" fieldSourceType="DBColumn" dataType="Text" html="False" name="name_sitio" fieldSource="name_sitio" wizardCaption="{res:name_sitio}" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentmain_redirectionname_sitio" wizardTheme="Blueprint" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<ImageLink id="17" visible="Yes" fieldSourceType="DBColumn" dataType="Text" hrefType="Database" preserveParameters="GET" name="img_sitio" fieldSource="img_sitio" wizardCaption="{res:img_sitio}" wizardIsPassword="False" wizardUseTemplateBlock="False" hrefSource="link_sitio" linkProperties="{'textSource':'','textSourceDB':'img_sitio','hrefSource':'','hrefSourceDB':'link_sitio','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}" wizardAddNbsp="True" PathID="Contentmain_redirectionimg_sitio" wizardTheme="Blueprint" wizardThemeVersion="3.0" urlType="Relative">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</ImageLink>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="8" conditionType="Parameter" useIsNull="False" dataType="Integer" field="grupo" logicOperator="And" parameterSource="groupid" parameterType="Session" searchConditionType="Equal"/>
						<TableParameter id="9" conditionType="Parameter" useIsNull="False" dataType="Text" field="page" logicOperator="And" parameterSource="&quot;almacen_main&quot;" parameterType="Expression" searchConditionType="Equal"/>
					</TableParameters>
					<JoinTables>
						<JoinTable id="21" tableName="main_redirection"/>
</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="10" fieldName="name_sitio" tableName="main_redirection"/>
						<Field id="11" fieldName="img_sitio" tableName="main_redirection"/>
						<Field id="12" fieldName="link_sitio" tableName="main_redirection"/>
					</Fields>
					<PKFields>
						<PKField id="13" dataType="Integer" fieldName="id" tableName="main_redirection"/>
					</PKFields>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="4" visible="True" name="Menu" contentPlaceholder="Menu">
			<Components>
				<Link id="18" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Logout" hrefSource="login.ccp" wizardDefaultValue="{res:CCS_LogoutBtn}" PathID="MenuLogout">
					<Components/>
					<Events/>
					<LinkParameters>
						<LinkParameter id="19" sourceType="Expression" format="yyyy-mm-dd" name="Logout" source="&quot;True&quot;"/>
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
				<Link id="20" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="main.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver a inicio','textSourceDB':'','hrefSource':'main.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
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
		<CodeFile id="Code" language="PHPTemplates" name="almacen_main.php" forShow="True" url="almacen_main.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
