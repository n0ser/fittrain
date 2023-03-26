<?php include 'vendor/components/header.php' ?>
<div class="container">
    <div class="category-buttons filter">
        <div data-filter="all" class="category-buttons__item">Все</div>
        <?php
        $sql = mysqli_query($link, 'SELECT * FROM `categories`');
        while ($result = mysqli_fetch_array($sql)) { ?>
            <div data-filter="<?php echo $result['category_name'] ?>" class="category-buttons__item"><?php echo $result['category_name'] ?></div>
        <?php } ?>
    </div>
    <div class="cards">
        <?php
         $sql = mysqli_query($link, 'SELECT * FROM `trains`');
        while ($result = mysqli_fetch_array($sql)) { ?>
        <a href="train.php?id=<?php echo $result['id'] ?>">
            <form action="vendor/actions/deleteTrain.php" method="post" class="cards__item <?php echo $result['category'] ?>">
                <img src="<?php echo $result['image'] ?>" alt=""class="cards__image">
                <input type="hidden" name="id" value="<?php echo $result['id'] ?> ">
                <p ><?php echo $result['title'] ?></p>
                <p ><?php echo $result['time'] ?></p>
                <p ><?php echo $result['category'] ?></p>
                <?php if ($_SESSION['user']['isAdmin'] == 1) : ?>
                <a href="changetrain.php?id=<?php echo $result['id'] ?>"><input value="Изменить" class="admin-input admin-input--submit"></a>
                <input class="admin-input admin-input--submit" type="submit" value="Удалить" name="deleteTrain">
                <?php endif; ?>
            </form>
        </a>
        <?php };?>
    </div>
</div>
<script src="assets/scripts/filter.js"></script>
<?php include 'vendor/components/footer.php' ?>