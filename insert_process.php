<?php


session_start();

include("includes/conn.php");

$name= $_POST['name'];
$phone =  $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "INSERT INTO portal(nam, phone, email, pass) VALUES ('$name','$phone','$email', '$pass')";

    if(mysqli_query($conn, $query)){
        $result = mysqli_query($conn, $query);
        $_SESSION['msg2'] = "New Entry Inserted!";
        header("location:dashboard.php");
    } else{
        $_SESSION['msg2'] = "Error ocurred";
        header("location:index.php");
    }



?>