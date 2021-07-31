<?php
//parameters for connection to database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "database_used";
//connection to our apartment database
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if (!$conn)
{
  die("Database connection failed.");
}
 ?>
