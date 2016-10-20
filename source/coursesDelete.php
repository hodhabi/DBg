<?php
require_once('header.php');

include('dbconnect.php');

$Course = $_GET['Course'];
$sql = "Delete from courses  where Course=$Course ";
$result = dbcon('fwa',$sql);


header('Location:  coursesList.php');
?>