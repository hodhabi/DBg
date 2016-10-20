<?php
require_once('header.php');

include('dbconnect.php'); 
if(isset($_POST['submit'])){

$id = $_POST['id'];
$StudentId = $_POST['StudentId'];
$Campus = $_POST['Campus'];
$Course = $_POST['Course'];
$Division = $_POST['Division'];
$day = $_POST['day'];
$sql = "Insert Into registeration ( StudentId, Campus, Course, Division, day) values ('$StudentId','$Campus','$Course','$Division','$day')";
$result = dbcon('fwa',$sql);


header('Location: registerationlist.php');
}
?>