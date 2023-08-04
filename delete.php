<?php

session_start();
include("includes/conn.php");


$id = $_GET['num'];


$query = "DELETE FROM portal WHERE sno=$id";



if($result = mysqli_query($conn, $query)){
    $result = mysqli_query($conn, $query);
    $_SESSSION['del'] = "Deleted successfully";
    header("location:dashboard.php");

}else {
    $_SESSSION['del'] = "Unsuccessful deletion";
    header("location:dashboard.php");

}


?>