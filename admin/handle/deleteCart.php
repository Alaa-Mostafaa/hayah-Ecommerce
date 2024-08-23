<?php

include 'connection.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "select * from cart where id=$id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {

        $query = "delete from cart where id=$id";
        $result = mysqli_query($connection, $query);
        if ($result) {
            $_SESSION['cart_success'] = "Product is deleted from cart successfully";
            unset($_SESSION['cart_error']);
            header('location:../../cart.php');
        }
    } else {

        $_SESSION['cart_error'] = "There is no product with this name to be removed";
        unset($_SESSION['cart_success']);
        header('location:../../cart.php');
    }
} else {

    $_SESSION['cart_error'] = "Error while deleting, Try again";
    unset($_SESSION['cart_success']);
    header('location:../../cart.php');
}
