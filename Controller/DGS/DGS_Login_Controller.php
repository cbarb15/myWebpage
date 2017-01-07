<?php
session_start();
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 2/28/16
 * Time: 9:45 PM
 */
set_include_path('../../Model/DGS' . PATH_SEPARATOR .
    '../../View/DGS');

require_once '../../Model/DGS/DGS_Database_Connector.php';

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

$connection = new DGS_Database_Connector();

$passwordMatched = $connection->verifyPassword($firstName, $lastName, $password);

if($passwordMatched == false)
{
    //If the password was not a match display error on login page
    $invalidPasswordOrRole = "*Invalid Password";
    require '../../View/DGS/DGSLogin.php';
}
else if($passwordMatched == true && $connection->getRole($firstName, $lastName) != "DGS")
{
    $invalidPasswordOrRole = "*You do not have permission to access this area";
    require '../../View/DGS/DGSLogin.php';
}
else
{
    $_SESSION["firstName"] = $firstName;
    $_SESSION["lastName"] = $lastName;
    $_SESSION["password"] = $password;
    $_SESSION["role"] = $connection->getRole($firstName, $lastName);
//If the password was a match display the list of students
    require '../../View/DGS/Overview.php';
}

?>