<?php

include 'connection.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "select * from wishlist where id=$id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {

        $query = "delete from wishlist where id=$id";
        $result = mysqli_query($connection, $query);
        if ($result) {
            $_SESSION['wishlist_success'] = "Product is deleted from wishlist successfully";
            unset($_SESSION['wishlist_error']);
            header('location:../../wishlist.php');
        }
    } else {

        $_SESSION['wishlist_error'] = "There is no product with this name to be removed";
        unset($_SESSION['wishlist_success']);
        header('location:../../wishlist.php');
    }
} else {

    $_SESSION['wishlist_error'] = "Error while deleting, Try again";
    unset($_SESSION['wishlist_success']);
    header('location:../../wishlist.php');
}
