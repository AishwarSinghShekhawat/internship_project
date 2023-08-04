<?php
session_start();

include("includes/conn.php");


$query = "SELECT * FROM portal;";

$result = mysqli_query($conn, $query);

$hello = mysqli_fetch_assoc($result);

?>

<html>

<head>
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e348ab3044.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col" style="background-color:darkmagenta; padding: 30px 20px 10px 20px;">

                <?php

                if (isset($_SESSION['msg2'])) {
                ?> <p style="color: white;">Welcome to your Dashboard!

                    <a href="logout.php" class="btn" style="font-family:'Poppins'; border-radius: 30px; background-color:aliceblue; padding: 7px 25px 7px 25px; color:black;">Logout</a>

                    <a href="insert.php" class="btn" style="font-family:'Poppins'; border-radius: 30px; background-color:aliceblue; padding: 7px 25px 7px 25px; color:black;">Insert User Details</a>

                    <a href="api.php" class="btn" style="font-family:'Poppins'; border-radius: 30px; background-color:aliceblue; padding: 7px 25px 7px 25px; color:black;">IP Details</a>

                    </p>

                <?php
                } else {
                    header("location:index.php");
                }

                ?>
            </div>
            <div class="row" style="margin-top: 20px ;">
                <table class="table table-bordered" >
                    <tr>
                        <th style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Sno</th>
                        <th style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Image</th>
                        <th style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Name</th>
                        <th style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"">Email</th>
                        <th style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"">Phone</th>
                        <th style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Change</th>
                    </tr>
                    <tr>

                        <?php

                        $i = 1;

                        while ($data = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <?php
                            $mid = $data['sno'];
                            echo "<td style='text-align: center; font-family:'Poppins';  '>" . $i . "</td>";
                            echo "<td style='text-align: center;'> <img src='images/upload/" .$data['image'] ."' style='width: 70px'</td>";
                            ?><br>
                            
                           <a href="uploadfile.php?mid=<?php echo $mid; ?>" class="btn" style="font-family:'Poppins'; border-radius: 30px; background-color:mediumorchid; padding: 10px 14px 10px 14px; margin-top: 10px; color:aliceblue; ">Change Image</a>
                        <?php

                            echo "<td style='text-align: center; font-family:'Poppins'; '>" . $data['nam'] . "</td>";
                            echo "<td style='text-align: center;'>" . $data['email'] . "</td>";
                            echo "<td style='text-align: center;'>" . $data['phone'] . "</td>";
                            echo "<td style='text-align: center;'><a href='edit.php?num=" .$mid. "'><i class='fas fa-edit'></i></a> |  <a href='delete.php?num=" .$mid. "'><i class='fa-solid fa-trash'></i></a> </td>";
                            $i++;
                        ?>

                    </tr>

                <?php
                        }
                ?>


                </table>

                <?php
                if (isset($_SESSSION['del'])) {
                    echo $_SESSSION['del'];
                }

                if (isset($_SESSSION['msg2'])) {
                    echo $_SESSSION['msg2'];
                }

                ?>
                <div class="row" style="margin-top: 50px;">

              

                </div>

            </div>
        </div>
    </div>