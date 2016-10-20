<?php
require_once('header.php');

include('dbconnect.php'); 
if(isset($_POST['submit'])){

$id = $_POST['id'];
$StudentId = $_POST['StudentId'];
$vStudentId = mysql_real_escape_string($StudentId);
$Campus = $_POST['Campus'];
$vCampus = mysql_real_escape_string($Campus);
$StudentDivision = $_POST['StudentDivision'];
$vStudentDivision = mysql_real_escape_string($StudentDivision);
$Course = $_POST['Course'];
$vCourse = mysql_real_escape_string($Course);
$CourseDivision = $_POST['CourseDivision'];
$vCourseDivision = mysql_real_escape_string($CourseDivision);
$day = $_POST['day'];
$vday = mysql_real_escape_string($day);
$sql = "Update registerationBAK Set  StudentId='$vStudentId', Campus='$vCampus', StudentDivision='$vStudentDivision', Course='$vCourse', CourseDivision='$vCourseDivision', day='$vday' where id=$id ";
$result = dbcon('fwa',$sql);


header('Location:  registerationBAKList.php');
}
?>