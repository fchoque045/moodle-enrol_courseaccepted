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

namespace enrol_courseaccepted\form;
use moodleform;

//require_once("$CFG->libdir/formslib.php");
require_once($CFG->libdir.'/formslib.php');

class edit extends moodleform {
    //Add elements to form
    public function definition() {
        global $DB;
        list($instance, $plugin, $context) = $this->_customdata;
        $mform = $this->_form; // Don't forget the underscore!

        $mform->addElement('text', 'name', get_string('custominstancename', 'enrol'));
        $mform->setType('name', PARAM_TEXT);

        $mform->addElement('select', 'status', get_string('status', 'enrol_courseaccepted'), array(
            ENROL_INSTANCE_ENABLED => get_string('yes'),
            ENROL_INSTANCE_DISABLED  => get_string('no')));
        $mform->setDefault('status', $plugin->get_config('status'));
        $mform->addHelpButton('status', 'status', 'enrol_courseaccepted');
        
        $mform->addElement('select', 'customint6', get_string('newenrols', 'enrol_courseaccepted'), array(
            1 => get_string('yes'),
            0 => get_string('no')
        ));
        $mform->setDefault('newenrols', $plugin->get_config('newenrols'));
        $mform->addHelpButton('customint6', 'newenrols', 'enrol_courseaccepted');

        if ($instance->id) {
            $roles = get_default_enrol_roles($context, $instance->roleid);
        } else {
            $roles = get_default_enrol_roles($context, $plugin->get_config('roleid'));
        }
        $mform->addElement('select', 'roleid', get_string('defaultrole', 'role'), $roles);
        $mform->setDefault('roleid', $plugin->get_config('roleid'));


        $courses = $DB->get_records('course');
        $full_names_courses = [];
        foreach ($courses as $course) {
            if ($instance->courseid  !=  $course->id){
                $full_names_courses[$course->id] = $course->fullname;
            }
        }

        $options = array(
            'multiple' => false,
            'noselectionstring' => get_string('noselectionstring', 'enrol_courseaccepted'),
        );
        $mform->addElement('autocomplete', 'customint1', get_string('requiredcourse', 'enrol_courseaccepted'), $full_names_courses, $options);
        $mform->addRule('customint1', get_string('required'), 'required', null, 'client');
        $mform->setType('customint1', PARAM_TEXT);
        $mform->addHelpButton('customint1', 'requiredcourse', 'enrol_courseaccepted');

        $options_size = array('cols' => '80', 'rows' => '10');
        $mform->addElement('textarea', 'customtext1', get_string('customwelcomemessage', 'enrol_courseaccepted'), $options_size);
        $mform->addHelpButton('customtext1', 'customwelcomemessage', 'enrol_courseaccepted');

        // TODO
        // $mform->addElement('editor', 'customtext2', get_string('customwelcomemessage', 'enrol_courseaccepted'),$options_size);
        // $mform->setType('customtext2', PARAM_RAW);
        // $mform->addHelpButton('customtext2', 'customwelcomemessage', 'enrol_courseaccepted');

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->addElement('hidden', 'courseid');
        $mform->setType('courseid', PARAM_INT);

        $this->add_action_buttons(true, ($instance->id ? null : get_string('addinstance', 'enrol')));

        $this->set_data($instance);

    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}