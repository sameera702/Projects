<?php
$dbhost = "localhost:4306";
$dbuser = "root";
$dbpass = "";
$db = "obs";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if (!$conn) {
    die("Something went wrong;");
}
?>