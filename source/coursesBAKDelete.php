<?php
require_once('header.php');

include('dbconnect.php');

$Course = $_GET['Course'];
$sql = "Delete from coursesBAK  where Course=$Course ";
$result = dbcon('fwa',$sql);


header('Location:  coursesBAKList.php');
?>