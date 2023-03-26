<?php
include '../components/connect.php';
if (isset($_POST['deleteCoach'])) {
    mysqli_query($link, "DELETE FROM `coaches` WHERE `coach` = '{$_POST['coach']}'");
    header("Location: ../../admin.php");
}
