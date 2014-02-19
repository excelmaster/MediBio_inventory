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
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
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
</Page>
