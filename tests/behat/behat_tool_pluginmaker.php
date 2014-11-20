<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin Maker steps definitions.
 *
 * @package    tool_pluginmaker
 * @category   test
 * @copyright  2013 Chris Throup <chris@throup.org.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.

require_once(__DIR__ . '/../../../../../lib/behat/behat_base.php');

use Behat\Behat\Context\Step\Given as Given;
use Behat\Behat\Context\Step\When as When;
use Behat\Behat\Context\Step\Then as Then;
use Behat\Behat\Exception\PendingException as PendingException;

class behat_tool_pluginmaker extends behat_base {
    /**
     * @When /^I select "([^"]*)" from the Administration block$/
     */
    public function iSelectFromTheAdministrationBlock($option)
    {
        return array(
            new Given('I follow "' . $option . '"'),
        );
    }

    /**
     * @Then /^I can see the Plugin Maker tool$/
     */
    public function iCanSeeThePluginMakerTool()
    {
        return array(
        	new Then('I should see "' . get_string('pluginname', 'tool_pluginmaker') . '" in the "h2.main" "css_element"'),
        );
    }
}
