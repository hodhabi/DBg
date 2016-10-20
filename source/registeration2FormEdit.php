
<?php

include('dbconnect.php');

require_once('header.php');

$id = $_GET['id'];

$sql = "select * from registeration2 where id='$id'";

$result = dbcon('fwa',$sql);

if ($result->num_rows > 0) {

  $row = $result->fetch_assoc();

  ?>

<div class='form-group'>
<form action='registeration2Edit.php' method='post'>
<input class='form-control' type='text' name='id' value="<?php echo $row['id']; ?>">
<input class='form-control' type='text' name='StudentId' value="<?php echo $row['StudentId']; ?>">
<input class='form-control' type='text' name='Campus' value="<?php echo $row['Campus']; ?>">
<input class='form-control' type='text' name='StudentDivision' value="<?php echo $row['StudentDivision']; ?>">
<input class='form-control' type='text' name='Course' value="<?php echo $row['Course']; ?>">
<input class='form-control' type='text' name='CourseDivision' value="<?php echo $row['CourseDivision']; ?>">
<input class='form-control' type='text' name='day' value="<?php echo $row['day']; ?>">
<head>
  <title>SIS</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  

  <style>
.form-group{
    width:80%;
    margin-left:10%;
    margin-right:10%;
    margin-top:20px;
}

</style>

</head>
<input class='btn btn-primary' type='submit' name='submit' value='Update'>
</div>
<?php
}
?>
