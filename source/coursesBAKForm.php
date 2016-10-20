
<?php

        require_once('header.php');
 ?>

<div class='form-group'>
<form action='coursesBAKInsert.php' method='post'>
<input class='form-control' type='text' name='Course' placeholder='Enter Course'>
<input class='form-control' type='text' name='semester' placeholder='Enter semester'>
<input class='form-control' type='text' name='day' placeholder='Enter day'>
<input class='form-control' type='text' name='nStudents' placeholder='Enter nStudents'>
<input class='form-control' type='text' name='Duration' placeholder='Enter Duration'>
<input class='form-control' type='text' name='Deliverytype' placeholder='Enter Deliverytype'>
<input class='form-control' type='text' name='ExamMethod' placeholder='Enter ExamMethod'>
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
<input class='btn btn-primary' type='submit' name='submit' value='Add'>
</div>