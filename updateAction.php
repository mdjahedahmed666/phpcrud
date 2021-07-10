<?php

include("config.php");

if(isset($_POST['update'])){

    $up_id=$_POST['id'];
  
    $up_title=$_POST['title'];
    $up_price=$_POST['price'];
    $up_desc=$_POST['description'];
    $up_image=$_FILES['image'];

    $imageTempLocation=$_FILES['image']['tmp_name'];
    $imageName=$_FILES['image']['name'];
    $imageLocalLocation="images/.$imageName";

    move_uploaded_file($imageTempLocation,$imageLocalLocation);

    $update_query="UPDATE `card` SET `title`='$up_title',`price`='$up_price',`description`='$up_desc', `image`='$imageLocalLocation' WHERE id='$up_id'";

    if(mysqli_query($conn, $update_query)){
        header('location:login.php');
    }else{
        echo "not updated";
    }
  }

?>