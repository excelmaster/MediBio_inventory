<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="True" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Blueprint" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Grid id="6" secured="True" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="main_redirection" connection="Connection1" dataSource="main_redirection" orderBy="name_sitio" pageSizeLimit="100" pageSize="False" wizardCaption="PANEL PRINCIPAL" wizardThemeApplyTo="Page" wizardGridType="Tabular" wizardAllowInsert="False" wizardAltRecord="False" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="Su usuario no cuenta con menus asignados" wizardUseSearch="False" wizardAddNbsp="True" gridTotalRecords="False" wizardAddPanels="False" wizardType="Grid" wizardUseInterVariables="False" addTemplatePanel="False" changedCaptionGrid="True" gridExtendedHTML="False" editableComponentTypeString="Grid">
					<Components>
						<Label id="15" fieldSourceType="DBColumn" dataType="Text" html="False" name="name_sitio" fieldSource="name_sitio" wizardCaption="Name Sitio" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentmain_redirectionname_sitio">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<ImageLink id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Text" hrefType="Database" preserveParameters="GET" name="img_sitio" fieldSource="img_sitio" wizardCaption="Img Sitio" wizardIsPassword="False" wizardUseTemplateBlock="False" hrefSource="link_sitio" linkProperties="{'textSource':'','textSourceDB':'img_sitio','hrefSource':'','hrefSourceDB':'link_sitio','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}" wizardAddNbsp="True" PathID="Contentmain_redirectionimg_sitio" urlType="Relative">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</ImageLink>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="43" conditionType="Parameter" useIsNull="False" dataType="Integer" field="grupo" format="0;(0)" logicOperator="And" parameterSource="GroupID" parameterType="Session" searchConditionType="Equal"/>
<TableParameter id="44" conditionType="Parameter" useIsNull="False" dataType="Text" field="page" logicOperator="And" parameterSource="'main'" parameterType="Expression" searchConditionType="Equal"/>
</TableParameters>
					<JoinTables>
						<JoinTable id="42" posHeight="168" posLeft="10" posTop="10" posWidth="115" tableName="main_redirection"/>
</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="45" fieldName="id" tableName="main_redirection"/>
<Field id="46" fieldName="grupo" tableName="main_redirection"/>
<Field id="47" fieldName="name_sitio" tableName="main_redirection"/>
<Field id="48" fieldName="link_sitio" tableName="main_redirection"/>
<Field id="49" fieldName="img_sitio" tableName="main_redirection"/>
<Field id="50" fieldName="page" tableName="main_redirection"/>
</Fields>
					<PKFields>
						<PKField id="51" dataType="Integer" fieldName="id" tableName="main_redirection"/>
</PKFields>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups>
						<Group id="28" groupID="1" read="True"/>
						<Group id="29" groupID="2" read="True"/>
						<Group id="30" groupID="3" read="True"/>
						<Group id="31" groupID="4" read="True"/>
					</SecurityGroups>
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
				<Link id="24" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Logout" hrefSource="login.ccp" wizardDefaultValue="{res:CCS_LogoutBtn}" PathID="MenuLogout">
					<Components/>
					<Events/>
					<LinkParameters>
						<LinkParameter id="25" sourceType="Expression" format="yyyy-mm-dd" name="Logout" source="&quot;True&quot;"/>
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
		<CodeFile id="Code" language="PHPTemplates" name="main.php" forShow="True" url="main.php" comment="//" codePage="windows-1252"/>
		<CodeFile id="Events" language="PHPTemplates" name="main_events.php" forShow="False" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups>
		<Group id="20" groupID="1"/>
		<Group id="21" groupID="2"/>
		<Group id="22" groupID="3"/>
		<Group id="23" groupID="4"/>
	</SecurityGroups>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events>
		<Event name="AfterInitialize" type="Server">
			<Actions>
				<Action actionName="Logout" actionCategory="Security" id="26" pageRedirects="True" parameterName="Logout" returnPage="main.ccp"/>
			</Actions>
		</Event>
	</Events>
</Page>
