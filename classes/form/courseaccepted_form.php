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
 * Privacy Subsystem implementation for enrol_manual.
 *
 * @package    enrol_courseaccepted
 * @author     Fabian Choque - PROMACE (Argentina - Jujuy) 2023
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//namespace enrol_courseaccepted\form;
use moodleform;

require_once($CFG->libdir.'/formslib.php');

class enrol_courseaccepted_form extends moodleform {
    protected $instance;
    
    /**
     * Overriding this function to get unique form id for multiple apply enrolments
     *
     * @return string form identifier
     */
    protected function get_form_identifier() {
        $formid = $this->_customdata->id.'_'.get_class($this);
        return $formid;
    }

    //Add elements to form
    public function definition() {
        global $USER, $DB;

        $mform = $this->_form;
        $instance = $this->_customdata;
        $this->instance = $instance;

        $this->add_action_buttons(false, get_string('enrolme', 'enrol_self'));
        
        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->setDefault('id', $instance->courseid);

        $mform->addElement('hidden', 'instance');
        $mform->setType('instance', PARAM_INT);
        $mform->setDefault('instance', $instance->id);

    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}