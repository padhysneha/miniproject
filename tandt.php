<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
<?php include('navbar.php');?>
<div class="container py-5">
        <h2 class="text-center">Tops & Tees</h2>
        <div class="row mt-4">
        <?php
        require 'phpconnect.php';
        $query = "SELECT * FROM book1 where label='Top' or label='T-Shirt'";
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
    <?php include('footer.php');?>
    </body>
    </html>