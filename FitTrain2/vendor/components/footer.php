<div class="go-to-top">Наверх</div>
<footer class="footer">
    <div class="logo"><p>FIT</p></div>
    <nav class="link">
            <a href="index.php" class="link__item">Главная</a>
            <a href="about.php" class="link__item">О нас</a>
            <a href="catalog.php" class="link__item">Тренировки</a>
            <a href="calculator.php" class="link__item">Калькулятор</a>
            <?php if (!isset($_SESSION['user'])) : ?>
                <a href="signup.php" class="link__item">Регистрация</a>
                <a href="login.php" class="link__item">Авторизация</a>
            <?php else : ?>
                <?php if ($_SESSION['user']['isAdmin'] == 1) : ?>
                    <a href="admin.php" class="link__item">Админ-панель</a>
                <?php endif; ?>
                <a href="vendor/actions/logout.php" class="link__item">Выход</a>
            <?php endif; ?>
        </nav>
</footer>
<script src="assets/scripts/scroll.js"></script>
<script src="assets/scripts/goToTop.js"></script>
</body>
</html>