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
$string['enrolname'] = 'Curso aceptado automático';
$string['pluginname'] = 'Curso aceptado automático';
$string['pluginname_desc'] = 'Este complemento permite incribirse a un curso solo si ha terminado un curso determinado';

$string['noselectionstring'] = 'No hay selección';

$string['confirmmailsubject'] = 'Asunto del correo de confirmación';
$string['confirmmailcontent'] = 'Contenido del correo de confirmación';
$string['cancelmailsubject'] = 'Asunto del correo de cancelación';
$string['cancelmailcontent'] = 'Contenido del correo de cancelación';
$string['confirmmailcontent_desc'] = 'Por favor, use marcas especiales que se substituirán en el contenido del correo.<br>{firstname}:Nombre registrado por el usuario; {content}:Nombre del curso';

$string['applicationconfirmednotification'] = 'Your course enrolment application was confirmed.';
$string['applicationcancelednotification'] = 'Your course enrolment application was canceled.';

$string['applymanage'] = 'Gestionar matrículas';

$string['status'] = 'Habilitar las matriculaciones existentes';
$string['status_help'] = 'Si está habilitado con \'Permitir nuevas inscripciones\' deshabilitado, solo los usuarios que se inscribieron previamente al curso tendrán acceso al curso. Si está deshabilitado, este método de matriculación estará inhabilitado, ya que todas las inscripciones existentes están suspendidas y los nuevos usuarios no pueden inscribirse.';
$string['newenrols'] = 'Permitir nuevas matriculaciones';
$string['newenrols_help'] = 'Este ajuste determina si un usuario pueden inscribirse en el curso.';
$string['cantenrol'] = 'Las matriculaciones a este curso están deshabilitadas';
$string['cantnewenrol'] = 'No se aceptan nuevos estudiantes al curso';
$string['requiredcourse'] = 'Curso requerido para inscribirse';
$string['requiredcourse_help'] = 'Debe seleccionar un curso que será requisito para poder inscribirse a este';


$string['willbeenrolled'] = 'Para poder inscribirse debe haber finalizado el curso de {$a}';

$string['notification_valid'] = '<b>Inscripción al curso realizada</b>';
$string['notification_invalid'] = '<b>La solicitud de matriculación no puede realizarse</b>. <br/><br/>No ha completado el curso {$a}';

$string['customwelcomemessage'] = 'Mensaje personalizado de bienvenida';
$string['customwelcomemessage_help'] = 'Puede añadir un mensaje de bienvenida personalizado con texto plano o en auto-formato Moodle, incluidas las etiquetas HTML y multi-lang.

Los siguientes marcadores pueden incluirse en el mensaje:

* Nombre dle curso {$a->coursename}
* Enlace a la pagina de perfil de usuario {$a->profileurl}
* email del usuario {$a->email}
* Nombre completo del usuario {$a->fullname}';