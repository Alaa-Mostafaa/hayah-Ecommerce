<?php


require_once 'connection.php';

if(isset($_GET['id']) && isset( $_SESSION['user_id'])){

    $id=$_GET['id'];
    $user_id= $_SESSION['user_id'];

    $query = "select * from products where id=$id";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result)==1){

        $product=mysqli_fetch_assoc($result);
        $product_name=$product['name'];
        $product_price=$product['price']; 
        $product_image=$product['image'];

        $query = "insert into cart (name,price,image,user_id) values('$product_name',$product_price,'$product_image',$user_id)";
        $result = mysqli_query($connection, $query);

        if($result){
            $_SESSION['cart_success'] = "Product is added successfully to cart ";

            header("location:../../cart.php");


        }


    }
}
else{

   

    header("location:../../signin.php");
    


}