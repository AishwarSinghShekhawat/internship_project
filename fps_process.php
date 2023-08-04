<?php

session_start();
include("includes/conn.php");

$pass = $_POST['pass'];
$repass = $_POST['repass'];
$user = $_POST['user'];

if($pass == $repass){
    $query = "UPDATE portal SET pass='$pass' WHERE phone=$user";
    if(mysqli_query($conn, $query)){
        mysqli_query($conn, $query);
        $_SESSION['m1'] = "Password reset successfully!, please login";
        header("location:index.php");
    }
    else{
        $_SESSION['m1'] = "Error occured while resetting password, please try again";
        header("location:index.php");

    }
}
else{

    $_SESSION['m1'] = "Passwords do not match, please try again";
    header("location:fp_check.php");

}


?>