
<?php

        require_once('header.php');
 ?>

<div class='form-group'>
<form action='registeration2Insert.php' method='post'>
<input class='form-control' type='text' name='StudentId' placeholder='Enter StudentId'>
<input class='form-control' type='text' name='Campus' placeholder='Enter Campus'>
<input class='form-control' type='text' name='StudentDivision' placeholder='Enter StudentDivision'>
<input class='form-control' type='text' name='Course' placeholder='Enter Course'>
<input class='form-control' type='text' name='CourseDivision' placeholder='Enter CourseDivision'>
<input class='form-control' type='text' name='day' placeholder='Enter day'>
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