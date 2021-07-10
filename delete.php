<?php
include("config.php");

$id=$_GET['id'];
$delete_query="DELETE FROM `card` WHERE id='$id'";

mysqli_query($conn,$delete_query);
header("location:login.php");
?>