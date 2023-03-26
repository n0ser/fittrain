<?php include 'vendor/components/header.php'?>
<div class="container">
<form action="vendor/actions/logScript.php" method="post" class="user-form user-form--signup">
        <div class="reg-text">
            <img src="" alt="">
            <h2>Авторизация</h2>
        </div>
        <input type="email" name="email" class="user-input user-input--email" required placeholder="Введите ваш email...">
        <input type="password" name="password" class="user-input user-input--text" required placeholder="Введите пароль...">
        <input type="submit" value="Войти" name="logUser" class="user-input user-input--submit">
    </form>
</div>
<?php include 'vendor/components/footer.php' ?>