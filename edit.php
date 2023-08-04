<?php

session_start();

include("includes/conn.php");

$id = $_GET['num'];

$_SESSION['id'] = $id;

$query ="SELECT * FROM portal WHERE sno=$id";

$result = mysqli_query($conn, $query);

$res = mysqli_fetch_assoc($result);

$name1 = $res['nam'];
$phone1 = $res['phone'];
$email1 = $res['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body style="background-image: url(images/purple.jpg)">

    <div class = "container">
        <div class = "row">
            <div class = "col-sm-5 offset-4 c-form custom-h" style="border-radius: 15px">
                <h2 class="text-center"  style="font-family:'Poppins';">Edit</h2> <br>
                <form  method = "post" action="edit_process.php" >
                <input class="form-control" type="text" name = "name" value = "<?php echo $name1; ?>" style="font-family:'Poppins'; border-radius: 30px; padding: 10px;" > <br> 
                    <input class="form-control" type="number" name = "phone" value = "<?php echo $phone1; ?>" style="font-family:'Poppins'; border-radius: 30px;" > <br>
                    <input class="form-control" type="text" name = "email" value = "<?php echo $email1;?>" style="font-family:'Poppins'; border-radius: 30px;" > <br> 
                    <div class="text-center" ><input class="btn btn-info" type="submit" name = "submit" value = "Change" style="font-family:'Poppins'; border-radius: 30px; background-color:mediumorchid; padding: 10px 185px 10px 185px; color:aliceblue; "> </div>

                    <?php 
                    
                    ?>
                
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>


