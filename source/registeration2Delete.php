<?php
require_once('header.php');

include('dbconnect.php');

$id = $_GET['id'];
$sql = "Delete from registeration2  where id=$id ";
$result = dbcon('fwa',$sql);


header('Location:  registeration2List.php');
?>