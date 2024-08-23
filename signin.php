<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HAYAH LABORATORIES | Sign In</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.webp">
</head>

<body>

    <?php include 'nav.php' ?>

    <?php
    

    if (isset($_SESSION['success_signUp'])) { ?>

        <div class="container pt-3">
            <div class="alert alert-success"><?php echo $_SESSION['success_signUp'] ?></div>
        </div>
    <?php  } ?>

    <?php
       if (isset($_SESSION['loginError'])) { ?>

        <div class="container pt-3">
            <div class="alert alert-danger"><?php echo $_SESSION['loginError'] ?></div>
        </div>
    <?php  } ?>


    <div class="container ">
        <section class="my-5 shadow-lg  ">
            <div class="row">
                <!-- Left side -->
                <div class="col-md-6 col-sm-6 container">
                    <div class="pt-5 text-center">
                        <h3 class=" d-inline">Welcome to Hayah laboratory</h3>
                        <p class="pt-3 text-muted">Are you ready to join our family ?</p>
                    </div>

                    <div class="container px-5 pt-3">
                        <form action="admin/handle/signinUser.php" method="post" enctype="multipart/form-data">



                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>


                            <button type="submit" class="btn" name="submit">Sign In</button>

                        </form>
                    </div>

                    <p class="text-center pt-3">Don't have an account ? please <a href="signup.php">Sign up</a></p>


                </div>


                <!-- End of Left side -->


                <!-- Right side -->

                <div class="col-md-6 col-sm-6">

                    <img src="assets/images/hair_care_sign_in.jpg" class="w-100" />

                </div>
                <!-- End of Right side -->



            </div>

        </section>

    </div>

    <?php include 'footer.php'; ?>

    <script src="assets/js/bootstrap.bundle.min.js" async defer></script>
</body>

</html>