<?php
session_start();
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 2/28/16
 * Time: 9:45 PM
 */
set_include_path('../../Model/Advisor/' . PATH_SEPARATOR .
    '../../View/Advisor');

require_once '../../Model/Advisor/Advisor_Database_Connector.php';

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

$connection = new DatabaseConnector();

$passwordMatched = $connection->verifyPassword($firstName, $lastName, $password);

if($passwordMatched == false)
{
    //If the password was not a match display error on login page
    $invalidPasswordOrRole = "*Invalid Password";
    require '../../View/Advisor/Advisor_Login.php';
}
else if($passwordMatched == true && $connection->getRole($firstName, $lastName) != "Advisor")
{
    $invalidPasswordOrRole = "*You do not have permission to access this area";
    require '../../View/Advisor/Advisor_Login.php';
}
else
{
//If the password was a match display the list of students
    $_SESSION["firstName"] = $firstName;
    $_SESSION["lastName"] = $lastName;
    $_SESSION["password"] = $password;
    $_SESSION["role"] = $connection->getRole($firstName, $lastName);

    $connection->getFacultyId($firstName, $lastName);

    $array = $connection->getAdvisorStudents($connection->facultyId);

    $connection->student1 = $array[0];
    $connection->student2 = $array[1];
    $connection->student3 = $array[2];
    $connection->student4 = $array[3];
    $connection->student5 = $array[4];

    require '../../View/Advisor/Advisor_Students.php';
}

?>