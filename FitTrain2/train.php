<?php include 'vendor/components/header.php';
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
};
$id = $_GET['id'];
$sql = mysqli_query($link, "SELECT * FROM `trains` WHERE `id` = '$id'");
$result = mysqli_fetch_array($sql);
?>
<div class="container">
    <h1>Тренировка: <?php echo $result['title'] ?></h1>
    <div class="info">
        <iframe class="info__video" width="560" height="315" src="<?php echo $result['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="info__text">
            <p class="info__description"><?php echo $result['description'] ?></p>
            <p class="info__coach">Тренер: <?php echo $result['coach'] ?></p>
        </div>
    </div>
    <h2 class="recomendation__text">Возможно вы также захотите попробовать:</h2>
    <div class="recomendation-slider">
        <img class="prev" src="assets/images/prev.svg" alt="">
        <div class="recomendation">
        <?php
            $sql = mysqli_query($link, 'SELECT * FROM `trains`');
            while ($result = mysqli_fetch_array($sql)) { ?>
            <a href="train.php?id=<?php echo $result['id'] ?>">
                <div class="cards__item">
                    <img src="<?php echo $result['image'] ?>" alt=""class="cards__image">
                    <p ><?php echo $result['title'] ?></p>
                    <p ><?php echo $result['time'] ?></p>
                    <p ><?php echo $result['category'] ?></p>
                </div>
            </a>  
            <?php }?>
        </div>
        <img class="next" src="assets/images/next.svg" alt="">
    </div>
</div>
<script src="assets/scripts/recSlider.js"></script>
<?php include 'vendor/components/footer.php' ?>