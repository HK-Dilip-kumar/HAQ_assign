<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<div class="container" style="margin-left:30%;">
            <div class="row">
            <div class="col-md-6">
                <h2>New Registration</h2>
                <form action="userRegistration.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required/>
                    </div>
                    <div >
                        <label>Password</label>
                        <input type="text" name="psw" class="form-control" required/>
                    </div>
                    <div >
                        <label>First Name</label>
                        <input type="text" name="FirstName" class="form-control" required/>
                    </div>
                    <div >
                        <label>Last Name</label>
                        <input type="text" name="LastName" class="form-control" required/>
                    </div>
                    <div >
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" required/>
                    </div>
                    <div >
                        <label>Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" required/>
                    </div>
                    <div >
                        <label>Address</label>
                        <input type="text" name="Address" class="form-control" required/>
                    </div>
                    <div >
                        <label>City</label>
                        <input type="text" name="City" class="form-control" required/>
                    </div>
                    <div class="form-group" >
                        <label>Country</label>
                        <input type="text" name="Country" class="form-control" required/>
                    </div>
                    <button type="submit" style="margin-left:200px;" class="btn btn-success">Register</button> 
                </form>
            </div>
            
            </div>
        </div>
    
</body>
</html>