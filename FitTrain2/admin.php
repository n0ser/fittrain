<?php include 'vendor/components/header.php'; ?>
<?php
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
} ?>
<div class="container">
    <?php
    if ($_SESSION['user']['isAdmin'] == 1) :
    ?>
        <div class="category-forms">
            <form action="vendor/actions/addCategory.php" method="post" class="admin-form admin-form--category">
                <h2>Добавить категорию тренировок</h2>
                <input type="text" name="category" class="admin-input admin-input--text" required placeholder="Введите категорию...">
                <input type="submit" value="Добавить" name="addCategory" class="admin-input admin-input--submit">
            </form>
            <form action="vendor/actions/deleteCategory.php" method="post" class="admin-form admin-form--category">
                <h2>Удалить категорию</h2>
                <select name="category" class="admin-input admin-input--select" required>
                    <option value="" selected disabled>Выберите категорию</option>
                    <?php
                    $sql = mysqli_query($link, 'SELECT * FROM `categories`');
                    while ($result = mysqli_fetch_array($sql)) { ?>
                        <option><?php echo $result['category_name'] ?></option>;
                    <?php
                    } ?>
                </select>
                <input type="submit" value="Удалить" name="deleteCategory" class="admin-input admin-input--submit">
            </form>
        </div>
        <div class="coach-forms">
            <form action="vendor/actions/addCoach.php" method="post" class="admin-form admin-form--coach">
                <h2>Добавить тренера</h2>
                <input type="text" name="coach" class="admin-input admin-input--text" required placeholder="Введите Ф.И. тренера...">
                <input type="submit" value="Добавить" name="addCoach" class="admin-input admin-input--submit">
            </form>
            <form action="vendor/actions/deleteCoach.php" method="post" class="admin-form admin-form--coach">
                <h2>Удалить тренера</h2>
                <select name="coach" class="admin-input admin-input--select" required>
                    <option value="" selected disabled>Выберите тренера</option>
                    <?php
                    $sql = mysqli_query($link, 'SELECT * FROM `coaches`');
                    while ($result = mysqli_fetch_array($sql)) { ?>
                        <option><?php echo $result['coach'] ?></option>;
                    <?php
                    } ?>
                </select>
                <input type="submit" value="Удалить" name="deleteCoach" class="admin-input admin-input--submit">
            </form>
        </div>

        <form action="vendor/actions/addTrain.php" method="post" class="admin-form admin-form--train" enctype="multipart/form-data">
            <h2>Добавить тренировку</h2>
            <input type="text" name="title" class="admin-input admin-input--text" required placeholder="Введите название тренировки...">
            <input type="text" name="time" class="admin-input admin-input--text" required placeholder="Введите время тренировки...">
            <select name="category" class="admin-input admin-input--select" required>
                <option value="" selected disabled>Выберите категорию</option>
                <?php
                $sql = mysqli_query($link, 'SELECT * FROM `categories`');
                while ($result = mysqli_fetch_array($sql)) { ?>
                    <option><?php echo $result['category_name'] ?></option>;
                <?php
                } ?>
            </select>
            <select name="coach" class="admin-input admin-input--select" required>
                <option value="" selected disabled>Выберите тренера</option>
                <?php
                $sql = mysqli_query($link, 'SELECT * FROM `coaches`');
                while ($result = mysqli_fetch_array($sql)) { ?>
                    <option><?php echo $result['coach'] ?></option>;
                <?php
                } ?>
            </select>
            <input type="file" name="image" class="admin-input admin-input--file" required>
            <input type="text" name="video" class="admin-input admin-input--text" required placeholder="Укажите ссылку на видео...">
            <input type="text" name="description" class="admin-input admin-input--text" required placeholder="Введите описание тренировки...">
            <input type="submit" value="Добавить" name="addTrain" class="admin-input admin-input--submit">
        </form>
    <?php else : ?>
        <div class="notify notify--not-admin">
            <p>Вы не являетесь администратором!!!</p>
        </div>
    <?php endif; ?>
</div>
<?php include 'vendor/components/footer.php' ?>