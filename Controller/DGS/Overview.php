<?php
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 1/30/16
 * Time: 2:38 PM
 */
set_include_path("../../Model/DGS" . PATH_SEPARATOR .
    "../../View/Student/");

require_once "../../Model/DGS/DGS_Database_Connector.php";

$id = $_GET['id'];

$dgs = new DGS_Database_Connector();
$array = $dgs->getAdvisorStudents($id);

$dgs->student1 = $array[0];
$dgs->student2 = $array[1];
$dgs->student3 = $array[2];
$dgs->student4 = $array[3];
$dgs->student5 = $array[4];

require "../../View/Student/Student_List.php";

?>