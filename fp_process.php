<?php
session_start();
$user = $_POST['username'];
$_SESSION['u'] = $user;
include("includes/conn.php");

$query = "SELECT * FROM portal WHERE phone='$user'";

if(mysqli_query($conn, $query)){
    $res = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($res);
    $timestamp = time();
    $token = md5($timestamp.$user);
    $old_pass = $result['pass'];

    $query1 = "INSERT INTO fp(phone, token, timestampp,pass) VALUES ('$user','$token','$timestamp', '$old_pass')";
    if(mysqli_query($conn, $query1)){

        $test = fopen("testfile.txt", "w");
        $link = "http://localhost/website4/fp_check.php?t=".$token;
        fwrite($test, $link);
        fclose($test);
        echo "Check your email for the reset link!";


        
    }


}
else
{
    $_SESSION['m1'] = "User does not exist";
    header("location:fp.php");
}


?>