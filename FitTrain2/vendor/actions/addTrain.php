<?php
include '../components/connect.php';
if (isset($_POST['addTrain'])) {
    $img = $_POST['image'];
    $path = '../../assets/images/';
    $path_img = $path . basename($_FILES["image"]["name"]);
    $path_img_bd = 'assets/images/' . basename($_FILES["image"]["name"]);
    if (!empty($_FILES["image"])) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $path_img);
    }
    mysqli_query($link, "INSERT INTO `trains`(`title`, `time`, `category`, `coach`, `image`, `video`, `description`) VALUES ('{$_POST['title']}', '{$_POST['time']}', '{$_POST['category']}', '{$_POST['coach']}', '$path_img_bd', '{$_POST['video']}', '{$_POST['description']}')");
    header('Location: ../../admin.php');
};
