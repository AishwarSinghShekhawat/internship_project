<?php

$mid = $_GET['mid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body style="background-image: url(images/purple.jpg); background-size: 1750px;" >

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3" style="margin-top: 20%; border: solid; border-width: 1px; border-radius: 15px; padding: 30px 15px 30px 15px; background-color:aliceblue;">
                <h3 style="font-family:'Poppins'; text-align:center;">Upload Image</h3><br>
                <form action="upload.php" method="post" enctype="multipart/form-data" style="text-align: center; font-family:'Poppins';">
                        Select your Image:
                        <input type="file" name="fileToUpload" id="fileToUpload" style="font-family:'Poppins';">
                        <input type="hidden" name="sno" value="<?php echo $mid; ?>">
                        <input type="submit" value="Upload Image" name="submit" style="font-family:'Poppins';">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
