<?php
require_once('header.php');

include('dbconnect.php');

$id = $_GET['id'];
$sql = "Delete from registeration  where id=$id ";
$result = dbcon('fwa',$sql);


header('Location:  registerationList.php');
?>