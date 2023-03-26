<?php include 'vendor/components/connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/main.css">
    <title>FitTrain</title>
</head>

<body>
<?php error_reporting(E_ERROR | E_PARSE); ?>
    <header class="header">
        <a href="index.php" class="logo">FIT</a>
        <nav class="nav">
            <a href="index.php" class="nav__item">Главная</a>
            <a href="about.php" class="nav__item">О нас</a>
            <a href="catalog.php" class="nav__item">Тренировки</a>
            <a href="calculator.php" class="nav__item">Калькулятор</a>
            <?php if (!isset($_SESSION['user'])) : ?>
                <a href="signup.php" class="nav__item">Регистрация</a>
                <a href="login.php" class="nav__item">Авторизация</a>
            <?php else : ?>
                <?php if ($_SESSION['user']['isAdmin'] == 1) : ?>
                    <a href="admin.php" class="nav__item">Админ-панель</a>
                <?php endif; ?>
                <a href="vendor/actions/logout.php" class="nav__item">Выход</a>
            <?php endif; ?>
        </nav>
    </header>