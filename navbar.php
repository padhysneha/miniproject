<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="AwesomeWare">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>All Products</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<!-- Navbar start -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="mainpage.php">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fab fa-asymmetrik"></i> &nbsp; &nbsp;AwesomeWare</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <!--li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li--->
  <ul class="mainmenu">
  <li><a href="" class="nav-link active" ><i class="fas fa-th-list"></i>Category</a>
      <ul class="submenu">
      <li><a href="tandt.php">Tops</a></li>
        <li><a href="kids.php">Bottoms</a></li>
        <li><a href="footwear.php">Footwear</a></li>
        <li><a href="jeans.php">Jeans</a></li>
      </ul>
    </li>
  </ul>
<li class="nav-item">
          <a class="nav-link active" href="mainpage.php"><i class="fab fa-angellist"></i></i> All Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="auth/logout.php"><i class="far fa-user-circle"></i> Logout </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

  
  <!--<form class="form-inline ml-auto" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success " type="submit">Search</button>
  </form>-->
</nav>
</body>
<!---<div id='login-form' class="login-page">
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
        </div>-->