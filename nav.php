<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.webp">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>

    <style>
        .btn {

            background-color: rgb(181, 6, 6);
            color: white;

        }

        .btn a {

            text-decoration: none;
            color: white;
        }

        .btn:hover {
            color: white;
            background-color: rgb(236, 42, 42);
            border-color: rgb(236, 42, 42);
        }
    </style>

</head>

<body>
      <!--  Navigation Bar -->

      <nav class="navbar navbar-expand-lg bg-white shadow-sm">
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

    <script src="" async defer></script>
</body>