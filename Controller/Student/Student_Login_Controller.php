<?php
session_start();
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 2/28/16
 * Time: 9:45 PM
 */
set_include_path('../../Model/Student/' . PATH_SEPARATOR .
    '../../View/Student');

require_once '../../Model/Student/Student_Database_Connector.php';


if(!isset($_SESSION["firstName"]) && !isset($_SESSION["lastName"]) && !isset($_SESSION["role"]))
{
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $password = $_POST["password"];
    $invalidPasswordOrRole = "";
}
else
{
    $firstName = $_SESSION["firstName"];
    $lastName = $_SESSION["lastName"];
    $password = $_SESSION["password"];
}

$connection = new Student_Database_Connector();

$connection->populateInfoForTable($firstName);

$passwordMatched = $connection->verifyPassword($firstName, $lastName, $password);

if ($passwordMatched == false) {
    //If the password was not a match display error on login page
    $invalidPasswordOrRole = "*Invalid Password";
    require '../../View/Student/Student_Login.php';
} else if ($passwordMatched == true && $connection->getRole($firstName, $lastName) != "Student") {
    $invalidPasswordOrRole = "*You do not have permission to access this area";
    require '../../View/Student/Student_Login.php';
} else {
    $_SESSION["firstName"] = $connection->firstName;
    $_SESSION["lastName"] = $connection->lastName;
    $_SESSION["role"] = $connection->getRole($connection->firstName, $connection->lastName);
    $_SESSION["password"] = $password;
    //If the password was a match display the list of students
    require '../../View/Student/Student_Forms_List.php';

}

?>