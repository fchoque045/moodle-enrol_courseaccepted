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
 * @package    enrol_courseaccepted
 * @author     Fabian Choque - PROMACE (Argentina - Jujuy) 2023
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// The name of your plugin. Displayed on admin menus.
$string['enrolname'] = 'Course automatic accepted';
$string['pluginname'] = 'Course automatic accepted';
$string['pluginname_desc'] = 'This plugin allows you to enroll in a course only if you have finished a certain course';

$string['confirmmail_heading'] = 'Confirmation email';
$string['confirmmail_desc'] = '';
$string['confirmmailsubject'] = 'Confirmation email subject';
$string['confirmmailsubject_desc'] = '';
$string['confirmmailcontent'] = 'Confirmation email content';
$string['confirmmailcontent_desc'] = 'Please use the following special marks to replace email content with data from Moodle.<br/>{firstname}:The first name of the user; {content}:The course name;{lastname}:The last name of the user;{username}:The users registration username;{timeend}: The enrolment expiration date';


$string['applicationconfirmednotification'] = 'Your course enrolment application was confirmed.';
$string['applicationcancelednotification'] = 'Your course enrolment application was canceled.';

$string['applymanage'] = 'Manage enrolment applications';

$string['noselectionstring'] = 'No selection';

$string['status'] = 'Enable existing enrollments';
$string['status_help'] = 'If enabled together with \'Allow new enrolments\' disabled, only users who self enrolled previously can access the course. If disabled, this enrolment method is effectively disabled, since all existing enrolments are suspended and new users cannot enrol.';
$string['newenrols'] = 'Allow new registrations';
$string['newenrols_help'] = 'This setting determines whether a user can enrol into this course.';
$string['cantenrol'] = 'Enrolment is disabled or inactive';
$string['cantnewenrol'] = 'New registrations are not allowed';
$string['requiredcourse'] = 'Required course for enrolment';
$string['requiredcourse_help'] = 'You must select a course that will be required to enroll in this';

$string['willbeenrolled'] = 'You will be enrolled in this course when you complete course {$a}';

$string['notification_valid'] = '<b>Enrollment in the course completed</b>';
$string['notification_invalid'] = '<b>Enrollment request cannot be made</b>. <br/><br/>you have not completed the course {$a}';

$string['customwelcomemessage'] = 'Custom welcome message';
$string['customwelcomemessage_help'] = 'A custom welcome message may be added as plain text or Moodle-auto format, including HTML tags and multi-lang tags.

The following placeholders may be included in the message:

* Course name {$a->coursename}
* Link to user\'s profile page {$a->profileurl}
* User email {$a->email}
* User fullname {$a->fullname}';

$string['privacy:metadata'] = 'The automatically accepted course enrolment plugin does not store any personal data.';