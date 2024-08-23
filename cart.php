<?php 

require_once 'admin/handle/connection.php';
if(isset($_SESSION['user_id'])){



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart - HAYAH LABORATORIES</title>
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body class="bg-body-tertiary">

    <!--NavBar section-->
    <?php include 'nav.php' ?>

    <section class="container py-5 ">
        <!-- cart_success message-->
        <?php
        if (isset($_SESSION['cart_success'])) { ?>
            <div class="alert alert-success text-center"><?php echo $_SESSION['cart_success'] ?></div>
        <?php } ?>

        <!-- cart_error message-->

        <?php
        if (isset($_SESSION['cart_error'])) { ?>
            <div class="alert alert-danger text-center"><?php echo $_SESSION['cart_error'] ?></div>
        <?php } ?>

        <!--Show cart section-->
        <h2>My Cart</h2>
        <div class="row gx-5 pt-3">
            <div class="col-md-8  d-inline-block ">
                <?php
                 $user_id= $_SESSION['user_id'];
                $sum = "SELECT SUM(price) FROM cart where user_id=$user_id";
                $result_sum = mysqli_query($connection, $sum);
                $result_sum = mysqli_fetch_assoc($result_sum);


                $query = "select * from cart where user_id=$user_id";
                $result = mysqli_query($connection, $query);

                if (mysqli_num_rows($result) > 0) {
                    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach ($products as $product) {



                ?>
                        <div class="bg-white p-4 rounded-3 mt-3">
                            <div class="row d-flex justify-content-center align-items-center text-center p-4">
                                <div class="col-md-3">
                                    <img src="admin/images/<?php echo $product['image'] ?>" class="w-100" />
                                </div>
                                <div class="col-md-3 ">
                                    <span><?php echo $product['name'] ?></span>
                                </div>

                                <div class="col-md-3">
                                    <span><?php echo $product['price'] . " EGP" ?></span>
                                </div>
                                <div class="col-md-3">
                                    <a class="btn" href="admin/handle/deleteCart.php?id=<?php echo $product['id'] ?>">Delete</a>
                                </div>

                            </div>
                        </div>

                        <!-- End of Show cart section-->


                    <?php        }
                } else {
                    ?>

                    <!-- If there are no products in the cart -->
                    <div class="bg-white p-4 rounded-3 ">
                        <div class="row d-flex justify-content-center align-items-center text-center p-4">
                            <h3>There are no products</h3>
                            <a href="Allproducts.php" class="btn btn-danger mt-3 w-25">Shop now</a>


                        </div>
                    </div>

                <?php } ?>

                <!-- End of (If there are no products in the cart) section -->


            </div>
            <!-- Cart details -->
            <div class="col-md-4 bg-white rounded-3 p-5 h-50">
                <div>
                    <h3>Cart Totals</h3>
                    <p class="py-3 ">Subtotal : <?php echo ($result_sum['SUM(price)']) . " EGP" ?></p>
                    <p>Shipping : 30 EGP</p>
                    <p class="py-3 fs-5">Total : <?php echo ($result_sum['SUM(price)'] + 30) . " EGP" ?></p>
                    <a class="btn" href="#">Proceed to checkout</a>
                </div>
            </div>
            <!-- End of Cart details -->


        </div>




        <!--You May Be Interested In section -->
        <div class="mt-5">
            <h2>You May Be Interested In…</h2>
            <div class="row pt-3">
                <?php
                $query = "select * from products  ORDER BY RAND()  limit 4";
                $result = mysqli_query($connection, $query);
                $productts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach ($productts as $productt) {
                ?>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm p-3 rounded-3 h-100">
                            <img src="admin/images/<?php echo $productt['image'] ?>" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $productt['name'] ?></h5>
                                <p class="card-text"><?php echo $productt['price'] . " EGP" ?></p>
                                <a href="admin/handle/addTowishlist.php?id=<?php echo $productt['id'] ?>" class="text-decoration-none text-black">                                
                                    <i class="fa-regular fa-heart fs-3 pe-3 " title="Add to wishlist" style="cursor:pointer"></i>
                                </a>
                                <a href="admin/handle/addTocart.php?id=<?php echo $productt['id'] ?>" class="btn ">Add to cart</a>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- End of You May Be Interested In section-->

    </section>






    <!-- Footer section-->
    <?php include 'footer.php' ?>
</body>

<?php }

else{
    header('location:signin.php');
}
?>
</html>