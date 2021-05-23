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
</head>
<body>
<div class="container py-5">
        <h2 class="text-center">Kids</h2>
        <div class="row mt-4">
        <?php
        require 'phpconnect.php';
        $query = "SELECT * FROM book1 where kids='TRUE'";
        $query_run = mysqli_query($connection,$query);
        $check_faculty = mysqli_num_rows($query_run)>0;

        if($check_faculty)
        {
            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <div class="col-md-3 mt-3">
                    <div class="card">
                    <img src='image/<?php echo $row['product_image']; ?>' width="250px" height="200px" alt="Clothes">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $row['id']; ?></h6>
                        <h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>
                    </div>
                    <div class="card-footer p-1">
                  <form action="" class="form-submit">
                    <div class="row p-2">
                      <div class="col-md-6 py-1 pl-4">
                        <b>Quantity : </b>
                      </div>
                      <div class="col-md-6">
                        <input type="number" class="form-control pqty" value="<?= $row[product_qty] ?>">
                      </div>
                    </div>
                    <input type="hidden" class="pname" value="<?= $row[id] ?>">
                    <input type="hidden" class="pprice" value="<?= $row[product_price] ?>">
                    <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                    <button class="btn btn-default btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;<a href="cart.php">Add to
                  cart</a></button>               </form>
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
        url: 'addtocart.php',
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
        url: 'addtocart.php',
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
    <?php include('footer.php');?>
    </body>
    </html>