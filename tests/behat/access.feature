@tool @tool_pluginmaker
Feature: access the thing
	In order to make a new plugin
	As a developer
	I need to be able to access the Plugin Maker
	
	Scenario: Access from the administration block
		Given I log in as "admin"
		  And I am on homepage
		 When I select "Plugin Maker" from the Administration block
		 Then I can see the Plugin Maker tool
