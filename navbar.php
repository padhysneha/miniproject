
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">AwesomeWare</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="mainpage.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ADD TO CART</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" onclick="document.getElementById('login-form').style.display='block'">LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" onclick="document.getElementById('register-form').style.display='block'" href="#">REGISTER</a>
    </li>
  </ul>
  <!--<form class="form-inline ml-auto" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success " type="submit">Search</button>
  </form>-->
</nav>
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