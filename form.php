<?php

$servername = "sql210.epizy.com";
$username = "epiz_33051157";
$password = "GHudhaiya2003";
$db = 'epiz_33051157_sign_up';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if(!empty($_POST['s'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];

    $insert = "INSERT INTO sign_up (name,email,tel,password) values ('$name','$email','$tel','$password')";
    mysqli_query($conn, $insert);
    header("Location: http://magicell.rf.gd/login.html");

}


?>