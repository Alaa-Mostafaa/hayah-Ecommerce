<?php

// connection to DB
include 'connection.php';

if(isset($_GET['id'])){

    $id=$_GET['id'];

    // check for the  exsistence of the product 

    $query="select * from products where id=$id";
    $result=mysqli_query($connection,$query);
    $oldimage=mysqli_fetch_assoc($result)['image'];


    if(mysqli_num_rows($result)==1){

        // delete the product

        $query="delete from products where id=$id";
        $result=mysqli_query($connection,$query);
        unlink("../images/$oldimage");

        $_SESSION["delete_success"]="Product is deleted successfully";

        header("location:../adminHome.php");


    }else{

        $_SESSION["delete_error"]="There is no product to be deleted";
        header("location:../showOne?id=".$id);
    }
}
?>