<?php
require_once("SimpleMultiplicationTable.php");

$obj=new SimpleMultiplicationTable();

$num=3;
$table = $obj->output($num); 
echo $table;
