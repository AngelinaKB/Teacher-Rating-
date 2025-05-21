<?php

 

$servername = "sql210.epizy.com";
$username = "epiz_33051157";
$password = "GHudhaiya2003";
$db = 'epiz_33051157_sign_up';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Go Back and Login"

?>