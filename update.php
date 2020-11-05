<?php
session_start();

  ?>  <h1 style="margin-left:250px;">Hello <?php echo $_SESSION['username']; ?></h1>    <?php
    
  ?> <a style="margin-left:85%;color:red;text-decoration:none;font-size:28px" href="logout.php"> LOGOUT </a> <?php

    if(isset($_POST['upload'])){

        $file_name = $_FILES['file']['name'];
        $file_type=$_FILES['file']['type'];
        $file_size=$_FILES['file']['size'];
        $file_tem_loc=$_FILES['file']['tmp_name'];
        $file_store="upload/".$file_name;
        move_uploaded_file($file_tem_loc,$file_store);

        ?><h3>  <?php echo "FILE UPLOADED SUCCESSFULLY!!"; ?>  </h3>  <?php
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>EDIT PROFILE</title>
</head>
<body>
<div class="container">
    <form action="?" method="POST" enctype="multipart/form-data" >
        <label style="margin-left:35px"><h2>Add Photo</h2></label><br>
        <input style="margin-left:35px" type="file" name="file"/><br><br>
        <input style="margin-left:35px" type="submit" name="upload" value="Upload Image">
    </form>
</div>    
</body>
</html>