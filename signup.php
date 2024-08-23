<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HAYAH LABORATORIES | Sign Up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.webp">
</head>

<body>

    <?php include 'nav.php' ?>

    <div class="container">
        <section class="my-5 shadow-lg  ">
            <div class="row ">
                <!-- Left side -->

                <div class="col-md-6 col-sm-6">

                    <img src="assets/images/skin_care_sign_up.avif" class="w-100" />

                </div>
                <!-- End of Left side -->


                <!-- Right side -->
                <div class="col-md-6 col-sm-6 ">
                    <div class="pt-5 text-center">
                        <h3 class=" d-inline">Welcome to Hayah laboratory</h3>
                        <p class="pt-3 text-muted">Are you ready to join our family ?</p>
                    </div>

                    <div class="container px-5 pt-3">
                        <form action="admin/handle/addUser.php" method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name='name'>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" name='email'>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name='password'>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm password</label>
                                <input type="password" class="form-control" name='confirm_Password'>
                            </div>

                            <button type="submit" class="btn" name='submit'>Sign Up</button>

                        </form>
                    </div>

                    <p class="text-center pt-3">Do you have an account ? Please <a href="signin.php"> Sign in</a></p>


                </div>

                <!-- End of Right side -->



            </div>

        </section>

    </div>

    <?php include 'footer.php'; ?>

    <script src="assets/js/bootstrap.bundle.min.js" async defer></script>
</body>

</html>