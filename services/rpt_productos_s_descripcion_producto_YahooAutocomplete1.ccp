<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\services" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="True" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Grid id="2" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="productos1" connection="Connection1" dataSource="productos" pageSizeLimit="100" wizardCaption="List of Productos1 ">
<Components>
<Label id="66" fieldSourceType="DBColumn" dataType="Text" html="False" name="descripcion_producto" fieldSource="descripcion_producto">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<TableParameters>
<TableParameter id="65" conditionType="Parameter" useIsNull="False" field="descripcion_producto" dataType="Text" logicOperator="And" searchConditionType="BeginsWith" parameterType="URL" parameterSource="query"/>
</TableParameters>
<JoinTables/>
<JoinLinks/>
<Fields>
<Field id="64" tableName="productos" fieldName="descripcion_producto"/>
</Fields>
<PKFields/>
<SPParameters/>
<SQLParameters/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Grid>
</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="rpt_productos_s_descripcion_producto_YahooAutocomplete1.php" forShow="True" url="rpt_productos_s_descripcion_producto_YahooAutocomplete1.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
