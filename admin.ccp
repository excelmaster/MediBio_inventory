<<<<<<< HEAD
<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="True" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp">
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
<Grid id="7" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="admin_redir" connection="Connection1" dataSource="admin_redir" pageSizeLimit="100">
<Components>
<Label id="9" fieldSourceType="DBColumn" dataType="Text" html="False" name="name_sitio" fieldSource="name_sitio" PathID="Contentadmin_redirname_sitio">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
<ImageLink id="10" visible="Yes" fieldSourceType="DBColumn" dataType="Text" hrefType="Database" urlType="Relative" preserveParameters="GET" name="img_sitio" fieldSource="img_sitio" hrefSource="link_sitio" PathID="Contentadmin_redirimg_sitio">
<Components/>
=======
<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="True" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Compact" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="4" visible="True" name="Menu" contentPlaceholder="Menu">
			<Components>
				<Link id="11" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Logout" hrefSource="login.ccp" wizardDefaultValue="{res:CCS_LogoutBtn}" PathID="MenuLogout">
					<Components/>
					<Events/>
					<LinkParameters>
						<LinkParameter id="12" sourceType="Expression" format="yyyy-mm-dd" name="Logout" source="&quot;True&quot;"/>
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
<<<<<<< HEAD
				<Link id="13" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="main.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver al panel de control','textSourceDB':'','hrefSource':'main.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
			</Components>
=======
<Link id="13" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="Link1" PathID="Sidebar1Link1" hrefSource="main.ccp" wizardUseTemplateBlock="False" linkProperties="{'textSource':'Volver al panel de control','textSourceDB':'','hrefSource':'main.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
<<<<<<< HEAD
</ImageLink>
</Components>
<Events/>
<TableParameters/>
<JoinTables>
<JoinTable id="8" tableName="admin_redir"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields/>
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
</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="admin.php" forShow="True" url="admin.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups>
<Group id="6" groupID="1"/>
</SecurityGroups>
<CachingParameters/>
<Attributes/>
<Features/>
<Events/>
=======
</Link>
</Components>
>>>>>>> 0d9d85a9b3ba8ba0f7f763b55455aa47c1a421ab
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Grid id="7" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="admin_redir" connection="Connection1" dataSource="admin_redir" pageSizeLimit="100">
					<Components>
						<Label id="9" fieldSourceType="DBColumn" dataType="Text" html="False" name="name_sitio" fieldSource="name_sitio" PathID="Contentadmin_redirname_sitio">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<ImageLink id="10" visible="Yes" fieldSourceType="DBColumn" dataType="Text" hrefType="Database" urlType="Relative" preserveParameters="GET" name="img_sitio" fieldSource="img_sitio" hrefSource="link_sitio" PathID="Contentadmin_redirimg_sitio">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</ImageLink>
					</Components>
					<Events/>
					<TableParameters>
<TableParameter id="24" conditionType="Parameter" useIsNull="False" dataType="Integer" field="grupo" logicOperator="And" parameterSource="groupID" parameterType="Session" searchConditionType="Equal"/>
</TableParameters>
					<JoinTables>
						<JoinTable id="23" posHeight="152" posLeft="10" posTop="10" posWidth="115" schemaName="u392883857_inven" tableName="admin_redir"/>
</JoinTables>
					<JoinLinks/>
					<Fields>
<Field id="25" fieldName="*"/>
</Fields>
					<PKFields>
<PKField id="26" dataType="Integer" fieldName="id" tableName="admin_redir"/>
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
	</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="admin.php" forShow="True" url="admin.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups>
		<Group id="6" groupID="1"/>
	</SecurityGroups>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
>>>>>>> 50e0f25d6fa1975a75dca2dcf27391d36b22ec9b
</Page>
