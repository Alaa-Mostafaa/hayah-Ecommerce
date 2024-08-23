<?php

include 'connection.php';

if (isset($_POST['submit'])) {

    //catch data 
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $confirm_Password = trim(htmlspecialchars($_POST['confirm_Password']));

    // Array for errors

    $errors = [];

    // validation

    if (empty($name)) {

        $errors = "Name is required ";
    } elseif (empty($email)) {
        $errors = "Email is required ";
    } elseif (empty($password)) {
        $errors = "Password is required ";
    } elseif (empty($confirm_Password)) {
        $errors = "Confirm password is required ";
    }


    if (empty($errors)) {

        // if errors are empty 


        // check for duplicated emails 
        $query = "select * from users where email='$email'";
        $result = mysqli_query($connection, $query);


        if (mysqli_num_rows($result) > 0) {

            // if there is a duplicated email return back to sign up 
            $_SESSION['SignUp_error'] = 'Account is already exist';
            header('location:../../signup.php');
        } else {
            // if there is no  duplicated email 

            // hash password (Security)
            $password = password_hash($password, PASSWORD_BCRYPT);

            //insert the data into the database
            $query = "insert into users (name,email,password) values ('$name','$email','$password')";
            $result = mysqli_query($connection, $query);

            if ($result) {
                // return back to sign in 
                $_SESSION['success_signUp'] = "You are now a member with us";
                header('location:../../signin.php');

            } else {

                // return back to sign up 

                header('location:../../signup.php');
            }
        }
    } else {

        // return back to sign up 

        header('location:../../signup.php');
    }
} else {

    // return back to sign up 

    header('location:../../signup.php');
}
