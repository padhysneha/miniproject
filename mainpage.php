<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">AwesomeWare</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ADD TO CART</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="auth/logout.php">LOGOUT</a>
    </li>
  </ul>
  <form class="form-inline ml-auto" action="action.php" method="POST">
    <input class="form-control mr-sm-2" type="text" name="get_id" placeholder="Search">
    <button class="btn btn-success " name="search_by_id"type="submit">Search</button>
  </form>
</nav>

<div class="container pt-5">
  <div class="dropdown">
    <button type="button" class="btn btn-dark" data-toggle="dropdown">
      Categories
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="footwear.php">Footwear</a>
      <a class="dropdown-item" href="jeans.php">Jeans</a>
      <a class="dropdown-item" href="tandt.php">Tops & Tees</a>
    </div>
  </div>
</div>

    <div class="container py-5">
        <h2 class="text-center">All Products</h2>
        <div class="row mt-4">
        <?php
        require 'phpconnect.php';
        $query = "SELECT * FROM book1 LIMIT 12";
        $query_run = mysqli_query($connection,$query);
        $check_faculty = mysqli_num_rows($query_run)>0;

        if($check_faculty)
        {
            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <div class="col-md-3 mt-3">
                    <div class="card">
                    <img src='images1/<?php echo $row['image']; ?>' width="250px" height="200px" alt="Clothes">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $row['label']; ?></h6>
                    </div>
                </div>
            </div>
        
                <?php
                
            }
        }
        else {
            echo "no cloths found";
        }
        ?>
        </div>
    </div>

            
    <!----------footer-------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                </div>
                <div class="footer-col-2">
                    <h3>Follow us</h3>
                    <ul>
                        <li>FaceBook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

