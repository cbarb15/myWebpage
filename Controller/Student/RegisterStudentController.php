<?php
//**
// * Created by PhpStorm.
// * User: CharlieBarber
// * Date: 2/19/16
// * Time: 8:04 PM
// */
set_include_path('../../Model/Student/' . PATH_SEPARATOR .
    '../../View/Student');

require_once '../../Model/Student/Student_Database_Connector.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$password = $_POST["password"];
$degree = $_POST["degreeSelect"];
$semester =$_POST["semesterSelect"];
$year = $_POST["yearSelect"];

$studentController = new Student_Database_Connector();

$studentController->createNewUser($firstName, $lastName, $password, $degree, $semester, intval($year));

require '../../View/Student/Successful_Student_Created.php';


?>s

