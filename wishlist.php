<?php include 'admin/handle/connection.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wishlist - HAYAH LABORATORIES</title>
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        table {

            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 30px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body class="bg-body-tertiary">
    <?php include 'nav.php' ?>
    <section class="container pt-5">
        <div class="text-center">
            <!-- wishlist_success message-->
            <?php
            if (isset($_SESSION['wishlist_success'])) { ?>
                <div class="alert alert-success"><?php echo $_SESSION['wishlist_success'] ?></div>
            <?php } ?>

            <!-- wishlist_error message-->

            <?php
            if (isset($_SESSION['wishlist_error'])) { ?>
                <div class="alert alert-danger"><?php echo $_SESSION['wishlist_error'] ?></div>
            <?php } ?>

          

            <table class="bg-white rounded-4 py-5 my-5">
                <?php
                 $user_id= $_SESSION['user_id'];
                $query = "select * from wishlist where user_id=$user_id";
                $result = mysqli_query($connection, $query);

                if (mysqli_num_rows($result) > 0) {
                    $display = "block";

                    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($products as $product) {
                ?>
                        <tr>
                            <td>
                            <img src="admin/images/<?php echo $product['image'] ?>"  alt="Product photo" class="w-25">
                            </td>
                            <td><?php echo $product['name'] ?></td>
                            <td><?php echo $product['price']. " EGP" ?></td>
                            <td><a class="btn" href="admin/handle/deleteWishlist.php?id=<?php echo $product['id'] ?>">Delete</a></td>
                        </tr>
                <?php
                    }
                }

                ?>

            </table>

        </div>


    </section>


    <!-- wishlist is empty section-->

    <?php
    if (mysqli_num_rows($result) == 0) {
    ?>
        <section class="d-flex justify-content-center align-items-center " style="height:60vh;">
            <div class="text-center">
                <i class="fa-regular fa-heart fs-1 pb-3 text-secondary"></i>
                <h1>This wishlist is empty.</h1>
                <p class="pt-2">You don't have any products in the wishlist yet.</p>
                <p class="py-2">You will find a lot of interesting products on our "Shop" page.</p>
                <button class="btn">Return to shop</button>
            </div>


        </section>
    <?php }

    ?>
    <!-- End of wishlist is empty section-->



    <?php include 'footer.php' ?>

    <script src="" async defer></script>
</body>

</html>