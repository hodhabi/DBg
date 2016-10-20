<?php
require_once('header.php');

include('dbconnect.php'); 
if(isset($_POST['submit'])){

$Course = $_POST['Course'];
$semester = $_POST['semester'];
$day = $_POST['day'];
$nStudents = $_POST['nStudents'];
$Duration = $_POST['Duration'];
$Deliverytype = $_POST['Deliverytype'];
$ExamMethod = $_POST['ExamMethod'];
$sql = "Insert Into coursesBAK ( Course, semester, day, nStudents, Duration, Deliverytype, ExamMethod) values ('$Course','$semester','$day','$nStudents','$Duration','$Deliverytype','$ExamMethod')";
$result = dbcon('fwa',$sql);


header('Location: coursesBAKlist.php');
}
?>