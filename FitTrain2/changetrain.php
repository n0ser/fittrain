<?php include 'vendor/components/header.php';
$id = $_GET['id'];
$sql = mysqli_query($link, "SELECT * FROM `trains` WHERE `id` = '$id'");
$results = mysqli_fetch_array($sql);

?>
<div class="container">
    <h1>Тренировка: <?php echo $results['title'] ?></h1>
    <form action="vendor/actions/changeTrain.php" method="post" class="admin-form admin-form--train" enctype="multipart/form-data">
            <h2>Редактировать тренировку</h2>
            <input type="hidden" name="id" value="<?php echo $results['id'] ?>">
            <input type="text" name="title" class="admin-input admin-input--text" value="<?php echo $results['title'] ?>" required placeholder="Введите название тренировки...">
            <input type="text" name="time" class="admin-input admin-input--text" value="<?php echo $results['time'] ?>" required placeholder="Введите время тренировки...">
            <select name="category" class="admin-input admin-input--select" required>
                <option value="<?php echo $results['category'] ?>" selected ><?php echo $results['category'] ?></option>
                <?php
                $sql = mysqli_query($link, 'SELECT * FROM `categories`');
                while ($result = mysqli_fetch_array($sql)) { ?>
                    <option><?php echo $result['category_name'] ?></option>;
                <?php
                };
                ?>
            </select>
            <select name="coach" class="admin-input admin-input--select" required>
                <option value="<?php echo $results['coach'] ?>" selected><?php echo $results['coach'] ?></option>
                <?php
                $sql = mysqli_query($link, 'SELECT * FROM `coaches`');
                while ($result = mysqli_fetch_array($sql)) { ?>
                    <option><?php echo $result['coach'] ?></option>;
                <?php 
                };?>
            </select>
            <img src="<?php echo $results['image'] ?>" alt="">
            <input type="file" name="image" class="admin-input admin-input--file">
            <iframe class="info__video" width="560" height="315" src="<?php echo $results['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <input type="text" name="video" value="<?php echo $results['video'] ?>" class="admin-input admin-input--text" required placeholder="Укажите ссылку на видео...">
            <input type="text" name="description" value="<?php echo $results['description'] ?>" class="admin-input admin-input--description" required placeholder="Введите описание тренировки...">
            <input type="submit" value="Изменить" name="changeTrain" class="admin-input admin-input--submit">
        </form>
</div>
<?php include 'vendor/components/footer.php' ?>