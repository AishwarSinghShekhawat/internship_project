<?php
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

include("includes/conn.php");

$query = "SELECT * FROM portal WHERE phone='$user' and pass = '$pass'";

//run this query and store its result in $data
$data = mysqli_query($conn,$query);

//convert the $data to an associative array
$result = mysqli_fetch_assoc($data);


if($result){

    if($result['phone'] == $user && $result['pass'] == $pass ){
        $_SESSION['msg2'] = "Logged in Successfully";
        header("location:dashboard.php");
        // unset($_SESSION['msg2']);
    }
    else{

        $_SESSION['msg'] = "Hacking atttempt";
        header("location:index.php");

    }
}else{
    $_SESSION['msg'] = "Incorrect username or password";
    header("location:index.php");
}


$user = $_POST['name'];


    $_SESSION['u'] = $user;


?>