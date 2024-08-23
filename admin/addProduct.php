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
            <div class="content-wrapper">
                <?php if (isset($_SESSION['insert_error'])) { ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['insert_error'] ?></div>
                <?php } ?>
                <!-- Body -->
                <div>
                    <h2 class="pb-3">Add your product</h2>
                    <form action="handle/addProduct.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Name of the product :</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description of the product :</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price of the product :</label>
                            <input type="number" class="form-control" name="price">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Weight of the product :</label>
                            <input type="text" class="form-control" name="weight">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dimensions of the product :</label>
                            <input type="text" class="form-control" name="dimensions">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">How to use :</label>
                            <input type="text" class="form-control" name="How_to_use">
                        </div>

                        <div class="mb-5">
                            <label class="form-label">Image of the product :</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="brands">Brand of the product :</label>
                            <select id="brands" name="brands">
                                <option value="Uvepro">Uvepro</option>
                                <option value="Urepar">Urepar</option>
                                <option value="Trix">Trix</option>
                                <option value="Straline">Straline</option>
                                <option value="Sebaclar">Sebaclar</option>
                                <option value="Melatex">Melatex</option>
                                <option value="Cica">Cica</option>
                                <option value="Bodium">Bodium</option>
                                <option value="Ageal">Ageal</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="categories">Category of the product :</label>
                            <select id="categories" name="categories">
                                <option value="Hair_care">Hair care</option>
                                <option value="Skin_care">Skin care</option>
                                <option value="Bags">Bags</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="sub_category">Sub category of the product :</label>
                            <select id="sub_category" name="sub_category">
                                <option value="Anti-Dandruff">Anti-Dandruff</option>
                                <option value="Damaged_hair">Damaged hair</option>
                                <option value="Whitening">Whitening</option>
                                <option value="Oily_skin">Oily & Acne prone skin</option>
                                <option value="Sun_protection">Sun protection</option>
                                <option value="Dry_skin">Dry and Aptopic skin</option>
                                <option value="Anti-aging">Anti-aging Care</option>
                                <option value="Body_care">Body care</option>
                                <option value="Damaged_skin">Damaged skin</option>
                                <option value="Very_dry_skin">Very dry skin</option>

                            </select>
                        </div>



                        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>

            </div>
            <!-- content-wrapper ends -->
            <?php include 'footer.php' ?>