<?php
require_once('header.php');

include('dbconnect.php');

$id = $_GET['id'];
$sql = "Delete from registerationBAK  where id=$id ";
$result = dbcon('fwa',$sql);


header('Location:  registerationBAKList.php');
?>