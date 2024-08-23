<?php include 'head.php' ?>

<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    <?php include 'sideNav.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include 'navAdmin.php' ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper ">

                <!-- Body -->
                <div class="row">
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $query = "select * from products where id=$id";
                        $result = mysqli_query($connection, $query);

                        if (mysqli_num_rows($result) == 1) {

                            $product = mysqli_fetch_assoc($result);


                    ?>

                            <div class="col-md-6">
                                    <img src="images/<?php echo $product['image'] ?>" class="w-100" />
                            </div>

                            <div class="col-md-6">
                                
                                        <h3 class="card-title"><?php echo $product['name'] ?></h3>
                                        <p class="card-text"><?php echo $product['description'] ?></p>  
                                        <p class="card-text"><?php echo $product['brand'] ?></p>                                        
                                        <p class="card-text"><?php echo $product['category'] ?></p>                                        
                                        <p class="card-text"><?php echo $product['sub_category'] ?></p>                                                                              
                                        <p class="card-text"><?php echo $product['price'] ?></p>
                                        <a href="updateProduct.php?id=<?php echo $product['id'] ?>" class="btn btn-success">Update</a>
                                        <a href="handle/deleteProduct.php?id=<?php echo $product['id'] ?>" class="btn btn-danger">Delete</a>

                                    
                            </div>

                    <?php        } else {
                            header("location:404.php");
                        }
                    }
                    ?>

                </div>

            </div>
            <!-- content-wrapper ends -->
            <?php include 'footer.php' ?>