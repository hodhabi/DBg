<?php


include("generate.php");
include("list.php");
include("generateEdit.php");
include("generateDelete.php");
include("generateDBconnect.php");
include("generateHeader.php");
include("generateIndex.php");
if(isset($_POST['submit'])){

$host = $_POST['server'];
$database = $_POST['database'];
$user = $_POST['user'];
$pass = $_POST['password'];

//connection to the database
$link = mysqli_connect($host, $user, $pass)
or die ('cannot connect to the database: ' . mysql_error());

//select the database
mysqli_select_db($link, $database)
or die ('cannot select database: ' . mysql_error());

//loop to show all the tables and fields
$loop = mysqli_query($link, "SHOW tables FROM $database")
or die ('cannot select tables');

createForm($loop,$link, $database);
createList($loop,$link, $database);
createEdit($loop,$link, $database);
createDelete($loop,$link, $database);
createDbConnect($loop,$link, $database);
createHeader($database);
createIndex($loop);

}
?>