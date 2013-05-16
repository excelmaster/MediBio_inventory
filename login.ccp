<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="16" visible="True" name="Head1" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
<Panel id="17" visible="True" name="Content1" contentPlaceholder="Content">
			<Components>
				<Panel id="13" visible="True" name="Content">
					<Components>
						<Record id="2" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="Login1" wizardCaption="Login" wizardTheme="Compact" wizardOrientation="Vertical" wizardFormMethod="post" wizardRememberMe="True" wizardFocusOnLogin="True" buttonsType="image" wizardTypeComponent="Authentication" recordDirection="Vertical" templatePageRecord="C:/Archivos de programa/CodeChargeStudio5/Templates/Authentication/Horizontal.ccp|ccsTemplate" wizardThemeApplyTo="Component" recordAddTemplatePanel="False" changedCaptionLogin="False" PathID="Content1ContentLogin1" wizardThemeVersion="3.0" returnPage="redirije.ccp">
							<Components>
								<Button id="3" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoLogin" wizardTheme="Compact" wizardCaption="Login" parentName="Login1" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonLoginOn" PathID="Content1ContentLogin1Button_DoLogin" wizardThemeVersion="3.0">
									<Components/>
									<Events>
										<Event name="OnClick" type="Server">
											<Actions>
												<Action actionName="Login" actionCategory="Security" id="6" redirectToPreviousPage="True" loginParameter="login" passwordParameter="password" autoLoginParameter="autoLogin" eventType="Server"/>
												<Action actionName="Declare Variable" actionCategory="General" id="14" name="$link_dirije"/>
											</Actions>
										</Event>
									</Events>
									<Attributes/>
									<Features/>
								</Button>
								<TextBox id="4" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="login" required="True" wizardTheme="Compact" wizardCaption="Login" wizardSize="20" wizardMaxLength="100" wizardIsPassword="False" parentName="Login1" PathID="Content1ContentLogin1login" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</TextBox>
								<TextBox id="5" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="password" required="True" wizardTheme="Compact" wizardCaption="Password" wizardSize="20" wizardMaxLength="100" wizardIsPassword="True" parentName="Login1" PathID="Content1ContentLogin1password" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</TextBox>
								<CheckBox id="7" visible="Yes" fieldSourceType="DBColumn" dataType="Boolean" defaultValue="Unchecked" name="autoLogin" fieldSource="autoLogin" wizardTheme="Compact" wizardDefaultValue="Remember me" parentName="Login1" insertLabel="1" PathID="Content1ContentLogin1autoLogin" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</CheckBox>
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
				<Panel id="12" visible="True" name="Head">
					<Components/>
					<Events/>
					<Attributes/>
					<Features/>
				</Panel>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
<Panel id="20" visible="True" name="Menu">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Panel>
<Panel id="19" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
</Components>
	<CodeFiles>
		<CodeFile id="Events" language="PHPTemplates" name="login_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="login.php" forShow="True" url="login.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events>
		<Event name="OnLoad" type="Client">
			<Actions>
				<Action actionName="Set Focus" actionCategory="General" id="8" form="Login1" name="login"/>
			</Actions>
		</Event>
		<Event name="BeforeUnload" type="Server">
			<Actions>
				<Action actionName="Custom Code" actionCategory="General" id="15"/>
			</Actions>
		</Event>
	</Events>
</Page>
