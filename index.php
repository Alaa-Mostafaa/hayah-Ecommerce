<?php require_once 'admin/handle/connection.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HAYAH LABORATORIES - Unique line of Dermo-Cosmetic Products</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="icon" type="image/x-icon" href="assets/images/Logo.webp">
  <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <style>
    .owl-theme .owl-controls .owl-buttons div {
      display: none;

    }

    .owl-theme .owl-controls .owl-page {
      display: none;

    }
  </style>

</head>

<body>
  <!-- First Section -->
  <section>
    <!--  Navigation Bar -->

    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto  mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="showOneCategory.php?category=Hair_care" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hair Care
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Hair_care&subcategory=Anti-Dandruff">Anti-Dandruff</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Hair_care&subcategory=Damaged_hair">Damaged Hair</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="showOneCategory.php?category=Skin_care" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Skin Care
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Whitening">Whitening</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Oily_skin">Oily & Acne Prone Skin</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Sun_protection">Sun Protection</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Dry_skin">Dry and Aptopic Skin</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Anti-aging">Anti-aging Care</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Body_care">Body Care</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Damaged_skin">Damaged Skin</a></li>
                    <li><a class="dropdown-item" href="showTwoCategories.php?category=Skin_care&subcategory=Very_dry_skin">Very Dry Skin</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Brands
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="showBrand.php?brand=Uvepro">Uvepro</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Urepar">Urepar</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Trix">Trix</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Straline">Straline</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Sebaclar">Sebaclar</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Melatex">Melatex</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Cica">Cica</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Bodium">Bodium</a></li>
                    <li><a class="dropdown-item" href="showBrand.php?brand=Ageal">Ageal</a></li>
                  </ul>
                </li>
              </ul>


            </div>
          </div>
        </nav>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
            <div>
              <img src="assets/images/Logo.webp" class="w-75" />
            </div>

          </ul>
          <div class="fs-3 ">
            <a href="wishlist.php"><i class="fa-regular fa-heart px-3 text-black"></i></a>
            <a href="cart.php"><i class="fa-solid fa-bag-shopping text-black"></i></a>
          </div>

          <?php if (isset($_SESSION['user_id'])) { ?>
            <button class="btn  ms-3"><a href="admin/handle/logout.php">Logout</a></button>


          <?php } ?>
          <?php if (!isset($_SESSION['user_id'])) { ?>
            <button class="btn  ms-3"><a href="signup.php">Sign Up</a></button>


          <?php } ?>

          <?php if (!isset($_SESSION['user_id'])) { ?>
            <button class="button  ms-3"><a href="signin.php" class="text-decoration-none text-white">Sign In</a></button>


          <?php } ?>

        </div>
        <hr>
      </div>

    </nav>
    <!-- End of  Navigation Bar -->





    <div id="background_first_section">

    </div>
  </section>


  <!-- Transform Your Beauty Routine section -->
  <section class="mt-5" style="margin-bottom: -12%;">
    <p class="text-center  fs-2"> Transform Your Beauty Routine: </p>
    <h2 class="text-center  fw-bold"> Explore Top Picks for Skin & Hair Care! </h2>

    <div class="container pt-5">
      <div class="row">

        <div class="col-md-6 col-sm-12 position-relative">
          <img src="assets/images/collection.webp" alt="collection and discounts photo" class="w-100 rounded-3" style="height:65%;" />
          <div style="position:absolute;top:8%;left:10%">
            <h2 class="pb-3">COLLECTIONS</h2>
            <a href="Allproducts.php" class="text-decoration-none text-danger fs-5">View more</a>
          </div>

        </div>

        <div class="col-md-6 col-sm-12">
          <div class="position-relative rounded-3""  style=" height:32.5%; overflow:hidden">
            <img src="assets/images/Hair_care.webp" alt="hair care photo" class="w-100" />
            <div style="position:absolute;top:10%;left:5%">
              <h3 class="pb-2">HAIR CARE</h3>
              <a href="showOneCategory.php?category=Hair_care" class="text-decoration-none text-danger fs-5">View more</a>
            </div>
          </div>
          <div class="position-relative rounded-3""  style=" height:32.5%; overflow:hidden">
            <img src="assets/images/Skin_care.webp" alt="skin care photo" class="w-100 pt-3" />
            <div style="position:absolute;top:12%;left:5%">
              <h3 class="pb-2">SKIN CARE</h3>
              <a href="showOneCategory.php?category=Skin_care" class="text-decoration-none text-danger fs-5">View more</a>
            </div>
          </div>



        </div>


      </div>

    </div>


  </section>
  <div class="container-fluid" style="margin-top: -20%;">
    <div id="main-slider" class="owl-carousel">
      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/UVEPRO.webp" alt="Elephant">
        </div>
      </div>
      <div class="slider-item equal-height">
        <div class="slider-image ">
          <img src="assets/images/UREPAR.webp" alt="Rose">
        </div>

      </div>

      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/Trix.webp" alt="Rose">
        </div>

      </div>
      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/Starline.webp" alt="Rose">
        </div>

      </div>
      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/Sebaclar.webp" alt="Rose">
        </div>

      </div>
      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/Melatex.webp" alt="Rose">
        </div>

      </div>

      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/cica.webp" alt="Rose">
        </div>

      </div>

      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/Bodium.webp" alt="Rose">
        </div>

      </div>

      <div class="slider-item equal-height ">
        <div class="slider-image ">
          <img src="assets/images/Agal.webp" alt="Rose">
        </div>

      </div>
    </div>
  </div>
  <!-- End of  Transform Your Beauty Routine section -->



  <!--Best seller-->
  <section class="bg-body-tertiary py-5">
    <section class="container pt-4 ">
      <h2>BEST SELLERS</h2>
      <div class="row pt-5 gy-3">
        <?php

        $query = "select * from products where best_seller = 'bestSeller' limit 4 ";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
          $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

          foreach ($products as $product) {

        ?>
            <div class="col-md-3">
              <div class="card border-0 shadow-sm p-3 rounded-3 h-100">
                <img src="admin/images/<?php echo $product['image'] ?>" class="card-img-top" alt="">
                <div class=" text-center h-75">
                  <h5 class="card-title"><?php echo $product['name'] ?></h5>
                  <p class="card-text"><?php echo $product['price'] . " EGP" ?></p>
                  <a href="admin/handle/addTowishlist.php?id=<?php echo $product['id'] ?>" class="text-decoration-none text-black">
                    <i class="fa-regular fa-heart fs-3 pe-3 " title="Add to wishlist" style="cursor:pointer"></i>
                  </a>
                  <a href="admin/handle/addTocart.php?id=<?php echo $product['id'] ?>" class="btn ">Add to cart</a>
                </div>
              </div>

            </div>
        <?php }
        } ?>

      </div>
    </section>
  </section>


  <!-- OUR FEATURED PRODUCTS section -->
  <section class="container pt-5 mt-5">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active fs-4" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" style="color:rgb(181,6,6)">OUR FEATURED PRODUCTS</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="BAGS-tab" data-bs-toggle="tab" data-bs-target="#BAGS-tab-pane" type="button" role="tab" aria-controls="BAGS-tab-pane" aria-selected="false">BAGS</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="hair-tab" data-bs-toggle="tab" data-bs-target="#hair-tab-pane" type="button" role="tab" aria-controls="hair-tab-pane" aria-selected="false">HAIR CARE</button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="body-tab" data-bs-toggle="tab" data-bs-target="#body-tab-pane" type="button" role="tab" aria-controls="body-tab-pane" aria-selected="false">BODY CARE</button>
      </li>


      <li class="nav-item" role="presentation">
        <button class="nav-link" id="sun-tab" data-bs-toggle="tab" data-bs-target="#sun-tab-pane" type="button" role="tab" aria-controls="sun-tab-pane" aria-selected="false">SUN PROTECTION</button>
      </li>

    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
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

      <div class="tab-pane fade " id="BAGS-tab-pane" role="tabpanel" aria-labelledby="BAGS-tab" tabindex="0">
        <div class="row pt-3">
          <?php
          $query = "select * from products where category = 'Bags' limit 4";
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
      <div class="tab-pane fade" id="hair-tab-pane" role="tabpanel" aria-labelledby="hair-tab" tabindex="0">
        <div class="row pt-3">
          <?php
          $query = "select * from products where category = 'Hair_care' limit 4";
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

      <div class="tab-pane fade" id="body-tab-pane" role="tabpanel" aria-labelledby="body-tab" tabindex="0">
        <div class="row pt-3">
          <?php
          $query = "select * from products where category = 'Skin_care' limit 4";
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

      <div class="tab-pane fade" id="sun-tab-pane" role="tabpanel" aria-labelledby="sun-tab" tabindex="0">
        <div class="row pt-3">
          <?php
          $query = "select * from products where sub_category = 'Sun_protection' limit 4";
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
    </div>

    <button class="btn mt-4">Shop now</button>
  </section>
  <!-- End of OUR FEATURED PRODUCTS section -->



  <!--Find Us section-->
  <section class="container-fluid py-5 mt-3 bg-body-tertiary">
    <h2 class="text-center">Find Us On Instagram</h2>
    <p class="text-center text-muted">Egyptian Cosmetics brand with European specifications </p>
    <div class="row pt-4">
      <div class="col-md-2">
        <img src="assets/images/findUs1.webp" class="w-100" />
      </div>
      <div class="col-md-2">
        <img src="assets/images/findUs2.webp" class="w-100" />
      </div>
      <div class="col-md-2">
        <img src="assets/images/findUs3.webp" class="w-100" />
      </div>
      <div class="col-md-2">
        <img src="assets/images/findUs4.webp" class="w-100" />
      </div>
      <div class="col-md-2">
        <img src="assets/images/findUs5.webp" class="w-100" />
      </div>
      <div class="col-md-2">
        <img src="assets/images/findUs6.webp" class="w-100 h-100" />
      </div>

    </div>
    <div class="text-center pt-3">
      <button class="button">Load more</button>
      <button class=" btn ">Follow on instgram</button>

    </div>
  </section>
  <!-- End of Find Us section-->


  <?php include "footer.php"; ?>

  <script src="assets/js/bootstrap.bundle.min.js" async defer></script>
  <script src="assets/js/owl.carousel.min.js" async defer></script>
  <script src="assets/js/code.jquery.com_jquery-3.7.0.min.js" async defer></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script src="script.js"></script>

</body>

</html>

<script>
  $(document).ready(function() {
    $("#main-slider").owlCarousel({
      items: 6,
      itemsDesktop: [1000, 2],
      itemsDesktopSmall: [980, 1],
      itemsTablet: [768, 1],
      pagination: true,
      navigation: true,
      navigationText: ["<", ">"],
      autoPlay: true
    });
  });
</script>

</body>

</html>