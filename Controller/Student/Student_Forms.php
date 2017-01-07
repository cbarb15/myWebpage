<?php

/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 1/25/16
 * Time: 4:04 PM
 */

set_include_path("../../Model/Student/" .PATH_SEPARATOR .
    "../../View/Student/");

require_once '../../Model/Student/Student_Database_Connector.php';

$name = $_GET["name"];

$studentController = new Student_Database_Connector();
$studentController->populateInfoForTable($name);


require "../../View/Student/Student_Forms_View.php";

?>