<?php include '../components/connect.php';

if ($_POST['password'] != $_POST['confirm-password']) {
    $_SESSION['error']['password'] = 'Пароли не совпадают!';
}

$email = mysqli_query(
    $link,
    "SELECT * FROM `users` WHERE `email` = '{$_POST['email']}'"
);

if (mysqli_num_rows($email) > 0) {
    $_SESSION['error']['email'] = 'Такой email уже существует';
}

$phone = mysqli_query(
    $link,
    "SELECT * FROM `users` WHERE `phone` = '{$_POST['phone']}'"
);

if (mysqli_num_rows($phone) > 0) {
    $_SESSION['error']['phone'] = 'Такой номер телефона уже существует';
}

if (isset($_SESSION['error'])) {
    header('Location: ../../signup.php');
} else {
    $hashPassword = sha1($_POST['password']);
    if (isset($_POST['addUser'])) {
        mysqli_query($link, "INSERT INTO `users`(`name`, `surname`, `phone`, `email`, `password`) VALUES ('{$_POST['name']}','{$_POST['surname']}','{$_POST['phone']}','{$_POST['email']}','$hashPassword')");
        $_SESSION['messages']['signup'] = "Успешная регистрация";
        header('Location: ../../login.php');
    };
}
