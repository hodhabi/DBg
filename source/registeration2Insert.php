<?php
require_once('header.php');

include('dbconnect.php'); 
if(isset($_POST['submit'])){

$id = $_POST['id'];
$StudentId = $_POST['StudentId'];
$Campus = $_POST['Campus'];
$StudentDivision = $_POST['StudentDivision'];
$Course = $_POST['Course'];
$CourseDivision = $_POST['CourseDivision'];
$day = $_POST['day'];
$sql = "Insert Into registeration2 ( StudentId, Campus, StudentDivision, Course, CourseDivision, day) values ('$StudentId','$Campus','$StudentDivision','$Course','$CourseDivision','$day')";
$result = dbcon('fwa',$sql);


header('Location: registeration2list.php');
}
?>