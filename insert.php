<?php

session_start();

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
                <h2 class="text-center" style="font-family:'Poppins';">Add New User Details</h2> <br>
                <form  method = "post" action="insert_process.php" >
                <input class="form-control" type="text" name = "name" placeholder="Enter your name" style="border-radius: 15px"> <br> 
                    <input class="form-control" type="number" name = "phone" placeholder="Enter your phone" style="border-radius: 15px"> <br>
                    <input class="form-control" type="text" name = "email" placeholder="Enter your email" style="border-radius: 15px"> <br> 
                    <input class="form-control" type="password" name = "pass" placeholder="Enter your pass" style="border-radius: 15px"> <br> 
                    <div class="text-center" ><input class="btn btn-info" type="submit" name = "submit" value = "Register" style="font-family:'Poppins'; border-radius: 30px; background-color:mediumorchid; padding: 10px 185px 10px 185px; color:aliceblue; "> </div>

                    
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>




<?php

session_destroy();

?>