<?php

// connection to DB

include 'connection.php';


if (isset($_POST['submit'])) {

    // catch data
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    // Array for errors

    $errors = [];

    // validation

    if (empty($_POST['email'])) {
        $errors = "Email is required";
    } elseif (empty($_POST['password'])) {
        $errors = "Password is required";
    }

    // check if the user is exist
    $query="select * from users where email='$email'";
    $result=mysqli_query($connection,$query);

    if(mysqli_num_rows($result) == 1){

        $user=mysqli_fetch_assoc($result);

        // check for password 
        $oldPassword=$user['password'];
        $verify=password_verify($password,$oldPassword);

        if($verify){
            $_SESSION['user_id']=$user['id'];
            header('location:../../index.php');
        }else{

            $_SESSION['loginError']='Password is not correct';
            header('location:../../signin.php');

        }
        

    }
    else{

        $_SESSION['loginError']='Account is not exist';
        header('location:../../index.php');

    }



} else {

    header('location:../../signin.php');
}
