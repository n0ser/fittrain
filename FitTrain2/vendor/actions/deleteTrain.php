<?php
include '../components/connect.php';
if (isset($_POST['deleteTrain'])) {
    mysqli_query($link, "DELETE FROM `trains` WHERE `id` = '{$_POST['id']}'");
    header("Location: ../../catalog.php");
}

