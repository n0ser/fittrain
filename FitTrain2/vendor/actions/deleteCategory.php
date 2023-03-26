<?php
include '../components/connect.php';
if(isset($_POST['deleteCategory'])){
    mysqli_query($link, "DELETE FROM `categories` WHERE `category_name` = '{$_POST['category']}'");
    header("Location: ../../admin.php");
}