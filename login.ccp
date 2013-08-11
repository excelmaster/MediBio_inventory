<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Absolute" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Blueprint" wizardThemeVersion="3.0" useDesign="False" masterPage="Designs/medibio_template/medibio_template/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="9" visible="True" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="10" visible="True" name="Content" contentPlaceholder="Content">
			<Components>
				<Record id="2" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="Login1" wizardCaption="Login" wizardOrientation="Vertical" wizardFormMethod="post" wizardRememberMe="True" wizardFocusOnLogin="True" buttonsType="image" wizardTypeComponent="Authentication" recordDirection="Vertical" templatePageRecord="C:/Program Files/CodeChargeStudio5/Templates/Authentication/Horizontal.ccp|ccsTemplate" wizardThemeApplyTo="Page" recordAddTemplatePanel="False" changedCaptionLogin="False" PathID="ContentLogin1" editableComponentTypeString="Authentication">
					<Components>
						<Button id="3" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoLogin" wizardCaption="Login" wizardThemeItem="FooterIMG" wizardButtonImage="ButtonLoginOn" PathID="ContentLogin1Button_DoLogin" returnPage="main.ccp">
							<Components/>
							<Events>
								<Event name="OnClick" type="Server">
									<Actions>
										<Action actionName="Login" actionCategory="Security" id="6" redirectToPreviousPage="True" loginParameter="login" passwordParameter="password" autoLoginParameter="autoLogin"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="4" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="login" fieldSource="username" required="True" wizardCaption="Login" wizardSize="20" wizardMaxLength="100" wizardIsPassword="False" PathID="ContentLogin1login">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="5" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="password" fieldSource="password" required="True" wizardCaption="Password" wizardSize="20" wizardMaxLength="100" wizardIsPassword="True" PathID="ContentLogin1password">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<CheckBox id="7" visible="Yes" fieldSourceType="DBColumn" dataType="Boolean" defaultValue="Unchecked" name="autoLogin" fieldSource="autoLogin" wizardDefaultValue="Remember me" PathID="ContentLogin1autoLogin">
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
		<Panel id="11" visible="True" name="Menu" contentPlaceholder="Menu">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="12" visible="True" name="Sidebar1" contentPlaceholder="Sidebar1">
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
	</Events>
</Page>
