<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php include('../navbar.php');?>
    <!--<div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>AwesomeWare</h1></a>
            </div>
            
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About us</a></li>
                    <li><a href='#'>Products</a></li>
                    <li><a href='#'>Offers</a></li>
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>awesomeware was born at the intersection of style and technology. Thanks to our inspiring collections and our<br> impeccable customer service, we have been highly <br>successful since day one. Browse through our site <br>and check out the latest additions to our collection,<br> and feel free to get in touch with our team if <br>you need any assistance.<br> Happy shopping!</p>
            </div>
        </div>-->
        <div class="img-1">
            <img src="abc.png" class="img" alt="Responsive image">
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="POST">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="POST">
                        <center><h1 class="main-heading">Register Form</h1></center>
				        <input type="text" name='user'placeholder="user name" required/>
				        <input type="text" name='emailid'placeholder="email-id" required/>
				        <input type="password"name='password' placeholder="password" required/>
				        <button>REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('../footer.php');?>
</body>
</html>