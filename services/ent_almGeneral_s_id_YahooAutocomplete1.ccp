<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\services" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="True" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Grid id="2" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="ent_alm_general2" connection="Connection1" dataSource="ent_alm_general" pageSizeLimit="100" wizardCaption="{res:CCS_GridFormPrefix} {res:ent_alm_general2} {res:CCS_GridFormSuffix}">
<Components>
<Label id="59" fieldSourceType="DBColumn" dataType="Integer" html="False" name="id" fieldSource="id">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<TableParameters>
<TableParameter id="58" conditionType="Parameter" useIsNull="False" field="id" dataType="Integer" logicOperator="And" searchConditionType="BeginsWith" parameterType="URL" parameterSource="query"/>
</TableParameters>
<JoinTables/>
<JoinLinks/>
<Fields>
<Field id="57" tableName="ent_alm_general" fieldName="id"/>
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
		<CodeFile id="Code" language="PHPTemplates" name="ent_almGeneral_s_id_YahooAutocomplete1.php" forShow="True" url="ent_almGeneral_s_id_YahooAutocomplete1.php" comment="//" codePage="windows-1252"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
