<?php
/**
 * Created by PhpStorm.
 * User: CharlieBarber
 * Date: 3/29/16
 * Time: 2:29 PM
 */
set_include_path("Model/DGS");

require_once 'DGS/DGS_Database_Connector.php';

$dgs = new DGS_Database_Connector();

$array = $dgs->getChartData();

$newArray = array();

//var_dump($array);
foreach ($array as $item)
{
    array_push($newArray, $item->GPA);
}


//var_dump($newArray);
print json_encode($newArray, JSON_NUMERIC_CHECK);

?>