<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<html>
        <head>
            <title>Dash Board</title>
            <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>    
        <body>
        <div class="container">
        
        <a style="margin-left:85%;color:red;text-decoration:none;font-size:28px;" href="update.php"> EDIT PROFILE </a>
        <a style="margin-left:85%;color:red;text-decoration:none;font-size:28px" href="logout.php"> LOGOUT </a>
        <h1 style="margin-left:300px">Welcome  <?php echo $_SESSION['username']; ?>  </h1>
        </div>
        <div style="margin-left:200px;margin-top:20px">
        <h3 style="margin-left:330px;">YOUR DETAILS</h3>
        <table border="2">
        <tr>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>DATE OF BIRTH</th>
            <th>ADDRESS</th>
            <th>CITY</th>
            <th>COUNTRY</th>
        </tr>
            <?php
                    $user=$_SESSION['username'];

                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con,'userRegistration');
                    

                    $r= " select * from userform where username= '$user' ";
                    $result=mysqli_query($con,$r);
                    while($row=mysqli_fetch_array($result))
                    {
                        
                        ?>
                            <tr>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['Password']; ?></td>
                                    <td><?php echo $row['FirstName']; ?></td>
                                    <td><?php echo $row['LastName']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['DOB']; ?></td>
                                    <td><?php echo $row['Address']; ?></td>
                                    <td><?php echo $row['City']; ?></td>
                                    <td><?php echo $row['Country']; ?></td>
                            </tr>
                        <?php
                     }
            ?>
            </table>
        </div>  
        </body>
</html>