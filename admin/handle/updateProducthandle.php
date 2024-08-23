<?php

// connection to DB
include 'connection.php';



// press submit
if (isset($_POST['submit']) && isset($_GET['id'])) {


$id=$_GET['id']; 

// check for the existence of this product 

$query="select * from products where id=$id";
$result=mysqli_query($connection,$query);

// the product is in the DB 

if($result){

    $oldimage=mysqli_fetch_assoc($result)['image'];



// catch data

$name=trim(htmlspecialchars($_POST['name']));
$description=trim(htmlspecialchars($_POST['description']));
$price=trim(htmlspecialchars($_POST['price']));
$brands=trim(htmlspecialchars($_POST['brands']));
$categories=trim(htmlspecialchars($_POST['categories']));
$sub_category=trim(htmlspecialchars($_POST['sub_category']));

$weight=trim(htmlspecialchars($_POST['weight']));
$dimensions=trim(htmlspecialchars($_POST['dimensions']));
$How_to_use=trim(htmlspecialchars($_POST['How_to_use']));

// Array for errors

$errors=[];

// validation

if(empty($name)){
    $errors="Name is required";
}elseif(empty($description)){
    $errors="description is required";
}elseif(empty($price)){
    $errors="price is required";
}elseif(empty($brands)){
    $errors="brands are required";
}elseif(empty($categories)){
    $errors="categories are required";
}elseif(empty($sub_category)){
    $errors="sub_category is required";
}
elseif(!is_numeric($price)){
    $errors="Price must be a number";
}

// image

if(isset($_FILES['image'])&&$_FILES['image']['name']){
    $image=$_FILES['image'];
    $image_name=$image['name'];
    $tmp_name=$image['tmp_name'];
    $image_error=$image['error'];
    $size=$image['size']/(1024*1024);
    $extension=strtolower(pathinfo($image_name,PATHINFO_EXTENSION));

if($image_error!=0){
    $errors[]=" Image is required";
}elseif($size>1){
    $errors[]="The image has big size";
}elseif(!in_array($extension,["jpg","png","jpeg",'webp'])){
    $errors[]="This is not an image";
}

    $new_name=uniqid().".".$extension;
    unlink("../images/$oldimage");


}else{
    $new_name=$oldimage;
}


// if errors are empty

if(empty($errors)){

    $query="update products set name='$name' , description ='$description'
    ,price='$price',brand='$brands',category='$categories',sub_category='$sub_category',image='$new_name',
    Weight='$weight',Dimensions='$dimensions',how_to_use='$How_to_use'

    where id=$id    ";

    $result=mysqli_query($connection,$query);


    if($result){

        if(isset($_FILES['image'])&&$_FILES['image']['name']){
            move_uploaded_file($tmp_name,"../images/$new_name");

          

        }

        $_SESSION['update_success']='Product is updated successfully';
        unset($_SESSION['update_error']);
        header('location:../showOne.php?id='.$id);

    }else{

        $_SESSION['update_error']='Error while updating';
        unset($_SESSION['update_success']);
        header('location:../updateProduct.php?id='.$id);

    }






}else{
    $_SESSION['update_error']=$errors;
    unset($_SESSION['update_success']);
    header('location:../updateProduct.php?id='.$id);
}


// the product isn't in the DB 

}else{

    $_SESSION['update_error']='There is no product to be updated';
    unset($_SESSION['update_success']);
    header('location:../showAllProducts.php');
    
}



// user doesn't press submit or put id

} else {


    header('location:../updateProduct.php');
}
