<?php

// connection to DB
include 'connection.php';



// press submit
if (isset($_POST['submit'])) {

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
}elseif(is_numeric($name)){
    $errors="Name must not be a number";
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
}elseif(!in_array($extension,["jpg","png","jpeg","webp"])){
    $errors[]="This is not an image";
}

    $new_name=uniqid().".".$extension;

}else{
    $new_name=null;
}


// if errors are empty

if(empty($errors)){

    $query="insert into products (name,description,price,brand,category,sub_category,image,Weight,how_to_use,Dimensions)
    values('$name','$description','$price','$brands','$categories','$sub_category','$new_name','$weight','$How_to_use','$dimensions')
    ";

    $result=mysqli_query($connection,$query);

    if($result){

        if(isset($_FILES['image'])&&$_FILES['image']['name']){
            move_uploaded_file($tmp_name,"../images/$new_name");
        }

        $_SESSION['insert_success']='Product is inserted successfully';
        header('location:../showAllProducts.php');

    }else{

        $_SESSION['insert_error']='Error while inserting';
        header('location:../addProduct.php');

    }






}else{
    $_SESSION['insert_error']='sub';

    header('location:../addProduct.php');
}










} else {


    header('location:../addProduct.php');
}
