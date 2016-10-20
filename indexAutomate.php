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
mysql_connect($host, $user, $pass)
or die ('cannot connect to the database: ' . mysql_error());

//select the database
mysql_select_db($database)
or die ('cannot select database: ' . mysql_error());

//loop to show all the tables and fields
$loop = mysql_query("SHOW tables FROM $database")
or die ('cannot select tables');

createForm($loop,$database);
createList($loop,$database);
createEdit($loop,$database);
createDelete($loop,$database);
createDbConnect($loop,$database);
createHeader($database);
createIndex($loop);

}
?>