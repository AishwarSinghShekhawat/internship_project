<?php

session_start();

$name= $_POST['name'];
$phone =  $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

include("includes/conn.php");

$query = "INSERT INTO portal(nam, phone, email, pass) VALUES ('$name','$phone','$email', '$pass')";

    if(mysqli_query($conn, $query)){
        mysqli_query($conn, $query);
        $_SESSION['msg1'] = "Registration successful! Enter your credentials to Login";
        $_SESSION['msg3'] = $name;
        header("location:dashboard.php");
    } else{
        $_SESSION['msg1'] = "Error ocurred, enter unique email and password";
        header("location:register.php");
    }



?>