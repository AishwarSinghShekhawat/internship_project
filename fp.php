<?php

?>

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href ="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body style="background-image: url(images/purple.jpg)">

    <div class = "container">
        <div class = "row">
            <div class = "col-sm-4 offset-4 c-form custom-h" style="border-radius: 15px">
            <h3 class="text-center" style="font-family:'Poppins';">Forgot Password</h3> <br>
                <form method ="post" action="fp_process.php">
                    <input class="form-control" type="text" name = "username" placeholder="Enter your username" style="border-radius: 15px"> <br> 
                    <div class="text-center"><input class = "btn" type="submit" name="submit" value="Enter"  style="font-family:'Poppins'; border-radius: 30px; background-color:mediumorchid; padding: 10px 145px 10px 145px; color:aliceblue; "></div>
                    <div class="alert"> <a href="index.php" class="btn" style="font-family:'Poppins'; border-radius: 30px; background-color:brown; padding: 10px 70px 10px 70px; color:aliceblue; ">Go Back</a></div>
                    <?php
                        if(isset($_SESSION['err'])){

                            echo '<div class = "alert alert-danger">' ;
                            echo $_SESSION['err'];
                            echo '</div>';
                    
                        }
                        if(isset($_SESSION['msg1'])){

                            echo '<div class = "alert ">' ;
                            echo $_SESSION['msg1'];
                            echo '</div>';
                    
                        }
                        if(isset($_SESSION['msg'])){

                            echo '<div class = "alert alert-danger">' ;
                            echo $_SESSION['msg'];
                            echo '</div>';
                    
                        }
                        if(isset($_SESSION['msg2'])){

                            echo '<div class = "alert alert-danger">' ;
                            echo $_SESSION['msg2'];
                            echo '</div>';
                    
                        }
                        if(isset($_SESSION['m1'])){

                            echo '<div class = "alert alert-danger">' ;
                            echo $_SESSION['msg2'];
                            echo '</div>';
                    
                        }
                    ?>
                
                </form>
                <br>

                

            </div>
        </div>
    </div>

</body>
</html>