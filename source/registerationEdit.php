<?php
require_once('header.php');

include('dbconnect.php'); 
if(isset($_POST['submit'])){

$id = $_POST['id'];
$StudentId = $_POST['StudentId'];
$vStudentId = mysql_real_escape_string($StudentId);
$Campus = $_POST['Campus'];
$vCampus = mysql_real_escape_string($Campus);
$Course = $_POST['Course'];
$vCourse = mysql_real_escape_string($Course);
$Division = $_POST['Division'];
$vDivision = mysql_real_escape_string($Division);
$day = $_POST['day'];
$vday = mysql_real_escape_string($day);
$sql = "Update registeration Set  StudentId='$vStudentId', Campus='$vCampus', Course='$vCourse', Division='$vDivision', day='$vday' where id=$id ";
$result = dbcon('fwa',$sql);


header('Location:  registerationList.php');
}
?>