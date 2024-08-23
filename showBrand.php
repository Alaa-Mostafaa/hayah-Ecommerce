<?php 
include 'admin/handle/connection.php' ;
   $brand = $_GET['brand'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $brand?> - HAYAH LABORATORIES</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="icon" type="image/x-icon" href="assets/images/Logo.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        a i{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body class="bg-body-tertiary">
    <?php include 'nav.php' ?>

    <!-- First section -->
    <section style="background-image: url('assets/images/<?php echo $category ?>.webp');height:50vh;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    ">
    </section>


    <!-- End of First section -->

    <!-- Second section -->

    <section class="container py-5 ">
        <div class="row gy-4">
            <?php
         

            $query = "select * from products where brand='$brand'";
            $result = mysqli_query($connection, $query);

            if ($result) {
                $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach ($products as $product) {


            ?>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm p-3 rounded-3 h-100">
                            <img src="admin/images/<?php echo $product['image'] ?>" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $product['name'] ?></h5>
                                <p class="card-text"><?php echo $product['price'] . " EGP" ?></p>
                                <a href="admin/handle/addTowishlist.php?id=<?php echo $product['id'] ?>" class="text-decoration-none text-black">                                
                                    <i class="fa-regular fa-heart fs-3 pe-3 " title="Add to wishlist" style="cursor:pointer"></i>
                                </a>
                                <a href="admin/handle/addTocart.php?id=<?php echo $product['id'] ?>" class="btn ">Add to cart</a>
                            </div>
                        </div>

                    </div>
            <?php

                }
            } else {

                echo "There are no products";
            }

            ?>
        </div>

    </section>

    <!-- End of Second section -->




    <?php require_once 'footer.php'?>

    <script src="" async defer></script>
</body>

</html>