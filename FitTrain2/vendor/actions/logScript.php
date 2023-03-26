<?php include '../components/connect.php';
$hashPassword = sha1($_POST['password']);
if (isset($_POST['logUser'])) {

    $users = mysqli_query(
        $link,
        "SELECT * FROM `users` WHERE `email` = '{$_POST['email']}'
        AND `password` = '$hashPassword'"
    );
    if (mysqli_num_rows($users) == 0) {

        $_SESSION['error']['login'] = 'Неверный Логин или Пароль!';
        return header("Location: ../../login.php");
    } else {
        $user = mysqli_fetch_array($users);
        $_SESSION['user'] = [
            'id' => $user['id'],
            'password' => $user['password'],
            'isAdmin' => $user['isAdmin']
        ];
        header('Location: ../../index.php');
    }
}

