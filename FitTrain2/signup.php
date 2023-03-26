<?php include 'vendor/components/header.php' ?>
<div class="container">
    <form action="vendor/actions/regScript.php" method="post" class="user-form user-form--signup">
        <div class="reg-text">
            <img src="" alt="">
            <h2>Регистрация</h2>
        </div>
        <input type="text" name="name" class="user-input user-input--text" required placeholder="Введите ваше имя..." pattern="[а-яА-ЯёЁ\s\+]+">
        <input type="text" name="surname" class="user-input user-input--text" required placeholder="Введите вашу фамилию..." pattern="[а-яА-ЯёЁ\s\+]+">
        <input type="phone" name="phone" class="user-input user-input--phone" required placeholder="Введите ваш номер телефона..." >
        <input type="email" name="email" class="user-input user-input--email" required placeholder="Введите ваш email..." >
        <input type="password" name="password" class="user-input user-input--text" required placeholder="Придумайте пароль..." pattern=".{6,}">
        <input type="password" name="confirm-password" class="user-input user-input--text" required placeholder="Повторите пароль..." pattern=".{6,}">
        <input type="submit" value="Зарегестрироваться" name="addUser" class="user-input user-input--submit">
    </form>
</div>
<?php include 'vendor/components/footer.php' ?>