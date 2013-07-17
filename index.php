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
 * Plugin Maker
 *
 * @package    tool_pluginmaker
 * @copyright  2013 Chris Throup <chris@throup.org.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once(dirname(__FILE__) . '/locallib.php');

admin_externalpage_setup('toolpluginmaker');

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'tool_pluginmaker'));
echo $OUTPUT->box_start();

$maker = new PluginMaker();
$maker->viewselector();
// TODO: content here

echo $OUTPUT->box_end();
echo $OUTPUT->footer();