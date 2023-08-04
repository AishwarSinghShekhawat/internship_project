<?php


session_start();

include("includes/conn.php");

$name= $_POST['name'];
$phone =  $_POST['phone'];
$email = $_POST['email'];
$snum = $_SESSION['id'];

$query = "UPDATE portal SET nam='$name', phone='$phone', email='$email' WHERE sno=$snum";

    if($result = mysqli_query($conn, $query)){
        $result = mysqli_query($conn, $query);
        $_SESSION['msg2'] = "Entry Edited!";
        header("location:dashboard.php");
        
    }
    else{
        echo $_SESSION['msg2'] = "Error ocurred";
        //header("location:dashboard.php");
    }

    // unset($_SESSION['msg2']);

?>