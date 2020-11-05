<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="container" style="margin-left:30%;margin-top:5%" >
        <div class="login-box login-left">
            <div class="row">
            <div class="col-mid-6">
                <h2>Login Here</h2>
                <form action="validation.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required/>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form><br>
                <a href="register.php"><button type="" class="btn btn-primary">New User Register</button></a>
             </div>
           </div>
           </div>
        </div>     
</body>
</html>