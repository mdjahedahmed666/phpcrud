<?php
include("config.php");

if(isset($_POST['insert'])){
    $in_id=uniqid()."-".uniqid();
  
    $in_title=$_POST['title'];
    $in_price=$_POST['price'];
    $in_desc=$_POST['description'];
    $in_image=$_FILES['image'];
    $imageTempLocation=$_FILES['image']['tmp_name'];
    $imageName=$_FILES['image']['name'];
    $imageLocalLocation="images/.$imageName";
    move_uploaded_file($imageTempLocation,$imageLocalLocation);

    $insert_query="INSERT INTO `card`(`id`,`title`, `price`, `description`, `image`) VALUES ('$in_id','$in_title','$in_price','$in_desc','$imageLocalLocation')";
    if(mysqli_query($conn,$insert_query)){
        header('location:login.php');
    }else{
        echo "not inserted";
    }
  }
?>