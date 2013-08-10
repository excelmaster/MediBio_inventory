<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\services" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="True" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Grid id="2" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="clientes" connection="Connection1" dataSource="clientes" pageSizeLimit="100" wizardCaption="List of Clientes ">
<Components>
<Label id="125" fieldSourceType="DBColumn" dataType="Text" html="False" name="priapellido" fieldSource="priapellido">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<TableParameters>
<TableParameter id="124" conditionType="Parameter" useIsNull="False" field="priapellido" dataType="Text" logicOperator="And" searchConditionType="BeginsWith" parameterType="URL" parameterSource="query"/>
</TableParameters>
<JoinTables/>
<JoinLinks/>
<Fields>
<Field id="123" tableName="clientes" fieldName="priapellido"/>
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
		<CodeFile id="Code" language="PHPTemplates" name="Clientes_mant_s_priapellido1_YahooAutocomplete1.php" forShow="True" url="Clientes_mant_s_priapellido1_YahooAutocomplete1.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
