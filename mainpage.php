<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="author" content="AwesomeWare">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Main Page</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
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

<div class="container pt-5">
<form class="form-inline ml-auto" action="action.php" method="POST">
    <input class="form-control mr-sm-2" type="text" name="get_id" placeholder="Search" style="height:40px;width:900px">
    <button class="btn btn-info " name="search_by_id"type="submit">Search</button>
  </form>
</div>

    <div class="container py-5">
        <h2 class="text-center">Popular Products</h2>
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
                        <h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['price'],2) ?>/-</h5>
                    </div>
                    <div class="card-footer p-1">
                  <form action="" class="form-submit">
                    <div class="row p-2">
                      <div class="col-md-6 py-1 pl-4">
                        <b>Quantity : </b>
                      </div>
                      <div class="col-md-6">
                      <input type="number" class="form-control pqty" value="<?= $row['qty']?>">
                      </div>
                    </div>
                    <input type="hidden" class="pname" value="<?= $row['label'] ?>">
                    <input type="hidden" class="pprice" value="<?= $row['price'] ?>">
                    <input type="hidden" class="pimage" value="<?= $row['image'] ?>">
                    <input type="hidden" class="pid" value="<?= $row['sender_id'] ?>">
                    <button class="btn btn-default btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;<a href="cart.php" class="nav-link">Add to
                  cart</a></button> 
                </form>
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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pid").val();
      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'cart.php',
        method: 'post',
        data: {
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pid:pid;
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'cart.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>

            
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

