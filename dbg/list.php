<?php

function createList($loop,$link, $database){

mysqli_data_seek($loop, 0);

while($table = mysqli_fetch_array($loop))
{


$fname = "source/" . $table[0] . "List" . ".php";
$fnamedel = $table[0] . "Delete" . ".php?";
$myfile = fopen($fname, "w") or die("Unable to open file!");

$row = mysqli_query($link,"SHOW columns FROM " . $table[0])
    or die ('cannot select table fields');
$col = mysqli_fetch_array($row);

$head = "

<?php\n
        require_once('header.php');\n ?>\n

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
        window.location.href='$fnamedel$col[0]='+id;
     }
}

</script>


</head>\n";



 fwrite($myfile,$head);   

$rowdata ="";
$rowdatah = "echo \" <th>   </th>\";\n" . "echo \" <th>   </th>\";\n";

fwrite($myfile,"<?php\n"); 

fwrite($myfile,"include('dbconnect.php');\n"); 

$addurl = $table[0] . "form.php";

$addbut = "echo \"<A class='btn btn-primary' href=$addurl>Add a record</a>\";\n";

fwrite($myfile,$addbut);

$sql2 = "\$sql = \"select * from $table[0] \";\n" ;
fwrite($myfile,$sql2);

$ex = "\$result = dbcon('$database',\$sql);\n";

fwrite($myfile,$ex); 

fwrite($myfile,"if(\$result->num_rows > 0){\n");

fwrite($myfile,"echo \"<table class='table'>\";\n");

fwrite($myfile,"\$i = 0;\n");

fwrite($myfile,"while(\$row = \$result->fetch_assoc()){\n");

    


// Create Inset data file



    $i = 0; //row counter
    
mysqli_data_seek($row, 0);

    while ($col = mysqli_fetch_array($row))
    {

        if ($col[5] != "auto_increment"){
            
        
        }
        
      

//Insert data file


       if($i==0){
          fwrite($myfile,  "\$idv = \$row['$col[0]'];\n");
          $editURL = "$table[0]" . "FormEdit.php?id=\$idv";
          $deleteURL = "scheduleDelete.php?id=\$idv";
          $rowdata =  "echo \"<td><A class='btn btn-success' href='$editURL'>Edit</A></td>\";\n";
          $rowdata = $rowdata  .  "echo \"<td class='btn btn-danger' onclick='delete_id(\$idv)'></a>Delete</td>\";\n";
           
       }

        $rowdatah = $rowdatah . "echo \" <th> $col[0]  </th>\";\n";
        
        $rowdata = $rowdata . "echo \"<td>\"" . " . \$row['$col[0]'] " .  ". \"</td>\";\n";
 
 

        $i++;
    } //end row loop

fwrite($myfile,  "if(\$i==0){\n");
fwrite($myfile,  "echo \"<tr class='success'>\";\n");
fwrite($myfile,  $rowdatah);
fwrite($myfile,  "echo \"</tr>\";\n");
fwrite($myfile,  "}\n");
fwrite($myfile,  "\$i = \$i + 1;\n");

fwrite($myfile,  "echo \"<tr>\";\n");
fwrite($myfile, $rowdata);
fwrite($myfile,  "echo \"</tr>\";\n");


fwrite($myfile,"}\n");
fwrite($myfile,"}\n");
fwrite($myfile,"echo '</table>';\n");

echo "Generated  " . $table[0] . "List.php<br>";

fwrite($myfile,"?>\n");

fclose($myfile);



} //end table loop

return;

}

//New function




?>
