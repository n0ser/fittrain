<?php 
include '../components/connect.php';
if (isset($_POST['addCategory'])) {
    mysqli_query($link, "INSERT INTO `categories`(`category_name`) VALUES ('{$_POST['category']}')");
    header('Location: ../../admin.php');
};
