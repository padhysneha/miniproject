<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login and Signup</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<div class="login-box">
    <div class="row">
        <div class="col-md-6 login-left">
            <h2> Login Here</h2>
            <form action="validate.php" method="POST">
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="emailid" class="form-control" required>
                </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn-btn-dark">Login</button>
            </form>
        </div>
        <div class="col-md-6 login-right">
            <h2> Register Here</h2>
            <form action="registration.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="emailid" class="form-control" required>
                </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn-btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
</div>    
</body>
</html>