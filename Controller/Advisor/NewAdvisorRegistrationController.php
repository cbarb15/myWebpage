<?php
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 2/19/16
 * Time: 8:04 PM
 */
set_include_path('../../Model/Adviser/' . PATH_SEPARATOR .
    '../../View/Advisor');

require_once '../../Model/Advisor/Advisor_Database_Connector.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$password = $_POST["password"];
$department = $_POST["departmentSelect"];



$advisorController = new DatabaseConnector();

$advisorController->createNewUser($firstName, $lastName, $password, $department);


require '../../View/Advisor/Successful_Advisor_Created.php';


?>

