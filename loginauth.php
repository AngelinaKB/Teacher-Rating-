<?php
session_start();  

$servername = "sql210.epizy.com";
$username = "epiz_33051157";
$password = "GHudhaiya2003";
$db = 'epiz_33051157_sign_up';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if(!empty($_POST['l'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $s = "SELECT * from sign_up where email='$username' and password='$pass'";
    $result = mysqli_query($conn, $s);
    $count = mysqli_num_rows($result);
    if($count>0){
        $_SESSION['user'] = $username;
        header('location:main.php');
        exit;
    }
    else{
        echo "Login Unsuccessful";
    }

}


?>