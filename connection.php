<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "evaluation";

$conn =mysqli_connect($servername, $username, $password,$dbname);

if ($conn == true) {
  echo"connected";
}
else{
  echo"not connected";
}
?>
