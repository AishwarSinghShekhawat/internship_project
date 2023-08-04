<?php
session_start();
include("includes/conn.php");

$t = $_GET['t'];
$user = $_SESSION['u'];

$query = "SELECT * FROM fp WHERE token='$t'";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);
$token = $res['token'];
$status = $res['status1'];

if($token == $t && $status == 1){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url(images/purple.jpg)">

    <div class = "container">
        <div class = "row">
            <div class = "col-sm-4 offset-4 c-form custom-h" style="border-radius: 15px">
                <h2 class="text-center">Reset Password</h2> <br>
                <form  method = "post" action="fps_process.php" >
                    <input class="form-control" type="password" name = "pass" placeholder="Enter your password" style="border-radius: 15px""> <br> 
                    <input class="form-control" type="password" name = "repass" placeholder="Enter your password again" style="border-radius: 15px""> <br> 
                    <input class="form-control" type="hidden" name = "user" value =<?php echo $user; ?> > <br> 

                    <div class="text-center" ><input class="btn btn-info" type="submit" name = "submit" value = "Reset" style="font-family:'Poppins'; border-radius: 30px; background-color:mediumorchid; padding: 10px 145px 10px 145px; color:aliceblue; "> </div>

                    <?php
                        if(isset($_SESSION['msg1'])){

                            echo '<div class = "alert">' ;
                            echo $_SESSION['msg1'];
                            echo '</div>';
                    
                        }
                    ?>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>

<?php

$query2 = "UPDATE fp SET status1=0 WHERE token='$token'";
$result1 = mysqli_query($conn, $query2);

}
else{
    $_SESSION['m1']= "incorrect token, hacking attempt!";
    header("location:fp.php");
}




?>