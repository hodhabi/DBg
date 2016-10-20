

<?php

        require_once('header.php');
 ?>


<head>
  <title>SIS</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  

  <style>
.table{
    width:80%;
    margin-left:10%;
    margin-right:10%;
    margin-top:20px;
}

</style>

<script>

function delete_id(id)
{

     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='coursesDelete.php?Course='+id;
     }
}

</script>


</head>
<?php
include('dbconnect.php');
echo "<A class='btn btn-primary' href=coursesform.php>Add a record</a>";
$sql = "select * from courses ";
$result = dbcon('fwa',$sql);
if($result->num_rows > 0){
echo "<table class='table'>";
$i = 0;
while($row = $result->fetch_assoc()){
$idv = $row['Course'];
if($i==0){
echo "<tr class='success'>";
echo " <th>   </th>";
echo " <th>   </th>";
echo " <th> Course  </th>";
echo " <th> semester  </th>";
echo " <th> day  </th>";
echo " <th> nStudents  </th>";
echo " <th> Duration  </th>";
echo " <th> Deliverytype  </th>";
echo " <th> ExamMethod  </th>";
echo "</tr>";
}
$i = $i + 1;
echo "<tr>";
echo "<td><A class='btn btn-success' href='coursesFormEdit.php?id=$idv'>Edit</A></td>";
echo "<td class='btn btn-danger' onclick='delete_id($idv)'></a>Delete</td>";
echo "<td>" . $row['Course'] . "</td>";
echo "<td>" . $row['semester'] . "</td>";
echo "<td>" . $row['day'] . "</td>";
echo "<td>" . $row['nStudents'] . "</td>";
echo "<td>" . $row['Duration'] . "</td>";
echo "<td>" . $row['Deliverytype'] . "</td>";
echo "<td>" . $row['ExamMethod'] . "</td>";
echo "</tr>";
}
}
echo '</table>';
?>
