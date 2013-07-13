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
 * @package   tool_pluginmaker
 * @copyright Chris Throup <chris@throup.org.uk>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();
 
$plugin->version   = 2013071300;
$plugin->requires  = 2013051401;
// Development with Moodle 2.5.1
// TODO: test earlier versions and amend $requires
// See http://docs.moodle.org/dev/Moodle_Versions
$plugin->cron      = 0;
$plugin->component = 'tool_pluginmaker';
$plugin->maturity  = MATURITY_ALPHA;
$plugin->release   = "0.0 (Build: {$plugin->version})";
 
$plugin->dependencies = array(
);
