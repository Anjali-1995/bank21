<?php
// $dbhost="";
// for development only
// $dbname="spark";
// $servername = "localhost";

// $username = "root";
// $password = "";



$dbname="8OsSHp0px5";
$servername = "remotemysql.com";

$username = "8OsSHp0px5";
$password = "F4jScZyhkH";

// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
 if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
 }
//  echo "Connected successfully";
?>