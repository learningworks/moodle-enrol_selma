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
 * SELMA enrolment plugin external functions and service definitions.
 *
 * @package     enrol_selma
 * @category    webservice
 * @copyright   2020 LearningWorks <selma@learningworks.co.nz>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$namespace = 'enrol_selma\local\external\\';

$functions = [
    'enrol_selma_create_course' => [                        // Name of the web service function that the client will call.
        'classname'     => $namespace . 'create_course',    // Namespaced class in classes/external/external.php.
        'methodname'    => 'create_course',                 // Implement this function into the above class.
        'description'   => new lang_string(
                'create_course::description',
                'enrol_selma'
        ),                                                  // Human-readable description displayed in generated API documentation.
        'type'          => 'write',                         // Is 'write' if function does any database change, otherwise 'read'.
        'ajax'          => true                             // If web service function callable via AJAX = true, otherwise false.
    ],
    //'enrol_selma_get_courses' => [
    //    'classname'     => 'enrol_selma\external',
    //    'methodname'    => 'get_courses',
    //    'description'   => new lang_string(
    //            'get_courses::description',
    //            'enrol_selma'
    //    ),
    //    'type'          => 'read',
    //    'ajax'          => true
    //],
    /*'enrol_selma_get_course' => [
        'classname' => 'get_course_external',
        'methodname' => 'get_course',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'read'
    ],
    'enrol_selma_get_courses' => [
        'classname' => 'get_courses_external',
        'methodname' => 'get_courses',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'read'
    ],
    'enrol_selma_create_course' => [
        'classname' => 'add_course_external',
        'methodname' => 'get_course',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'read'
    ],
    'enrol_selma_add_person' => [
        'classname' => 'add_person_external',
        'methodname' => 'add_person',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'write'
    ],
    'enrol_selma_update_person' => [
        'classname' => 'update_person_external',
        'methodname' => 'update_person',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'write'
    ],
    'enrol_selma_enrol_person' => [
        'classname' => 'enrol_person_external',
        'methodname' => 'enrol_person',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'write'
    ],
    'enrol_selma_enrol_people' => [
        'classname' => 'enrol_people_external',
        'methodname' => 'enrol_people',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'write'
    ],
    'enrol_selma_disenrol_person' => [
        'classname' => 'disenrol_person_external',
        'methodname' => 'disenrol_person',
        'classpath' => 'enrol/selma/externallib.php',
        'description' => '',
        'capabilities' => '',
        'type' => 'write'
    ]
    */
];

// OPTIONAL
// During the plugin installation/upgrade, Moodle installs these services as pre-built services.
// A pre-built service is not editable by administrator.
$services = [
    'enrol_selma_webservice' => [                // The name of the web service.
        'functions' => [                    // Web service functions of this service.
            'enrol_selma_create_course'
            //'enrol_selma_get_courses',
            //'enrol_selma_add_courses',
            //'enrol_selma_update_courses',
            //'enrol_selma_add_people',
            //'enrol_selma_update_people',
            //'enrol_selma_enrol_people',
        ],
            'requiredcapability' =>
                    'enrol/selma:manage',   // Web service user needs this capability to access any function of this service.
        'restrictedusers' => 0,
        'enabled' => 1,                     // If enabled, the service can be reachable on a default installation.
        'shortname' => 'selmawebservice'    // Optional – but needed if restrictedusers is set so as to allow logins.
    ]
];