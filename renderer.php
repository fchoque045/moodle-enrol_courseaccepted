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
 *
 * @package   enrol_courseaccepted
 * @author    Fabian Choque - PROMACE (Argentina - Jujuy) 2023
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class enrol_courseaccepted_renderer extends plugin_renderer_base {

    public function edit_page($mform) {
        echo $this->header();
        echo $this->heading(get_string('pluginname', 'enrol_courseaccepted'));
        $mform->display();
        echo $this->footer();
    }

    public function info_page($table, $manageurl,$instance) {
        echo $this->header();
        echo $this->heading(get_string('submitted_info', 'enrol_apply'));
        echo get_string('submitted_info', 'enrol_apply');
        $this->info_form($table, $manageurl,$instance);
        echo $this->footer();
    }
}
