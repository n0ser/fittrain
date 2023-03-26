<?php
include '../components/connect.php';
if (isset($_POST['addCoach'])) {
    mysqli_query($link, "INSERT INTO `coaches`(`coach`) VALUES ('{$_POST['coach']}')");
    header('Location: ../../admin.php');
};
