<?php
function OpenCon()
{
$dbhost = "localhost:4306";
$dbuser = "root";
$dbpass = "";
$db = "obs";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
return $conn;
}
function CloseCon($conn)
{
$conn -> close();
}
?>