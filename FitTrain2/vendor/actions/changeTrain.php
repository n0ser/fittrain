<?php
    include '../components/connect.php';
    if(isset($_POST['changeTrain'])){
        $img = $_POST['image'];
        $path = '../../assets/images/';
        $path_img = $path . basename($_FILES["image"]["name"]);
        $path_img_bd = 'assets/images/' . basename($_FILES["image"]["name"]);
        if (!empty($_FILES["image"])) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $path_img);
        }
        if($path_img_bd=='assets/images/'){  
            mysqli_query($link,"UPDATE `trains` SET `title` = '{$_POST['title']}', `time` = '{$_POST['time']}', `category`='{$_POST['category']}', `coach`='{$_POST['coach']}', `video`='{$_POST['video']}' , `description`='{$_POST['description']}'  WHERE `id` = '{$_POST['id']}'"); 
        }
        else {
            mysqli_query($link,"UPDATE `trains` SET `title` = '{$_POST['title']}', `time` = '{$_POST['time']}', `category`='{$_POST['category']}', `coach`='{$_POST['coach']}', `image`='$path_img_bd' , `video`='{$_POST['video']}' , `description`='{$_POST['description']}'  WHERE `id` = '{$_POST['id']}'"); 
        }
        header('Location: ../../catalog.php');
    }