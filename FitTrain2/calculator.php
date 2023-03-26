<?php include 'vendor/components/header.php';
if (!isset($_SESSION['user'])) {
   header('Location: login.php');
};
?>
<div class="container container--calc">
   <div class="calc-imt">
    <p>Введите ваш вес:</p>
    <input type="number" id="weight" placeholder="Вес" name="weight" class="user-input">
    <p>Введите ваш рост:</p>
    <input type="number" id="height" placeholder="Рост" name="height" class="user-input">
    <div class="admin-input admin-input--submit">Рассчитать</div>
    <p class="calc-imt__result" id="result">Ваш индекс массы тела - </p>
   </div>
   <img src="assets/images/imt.jpg" alt="">
</div>
<script src="assets/scripts/calc.js" defer></script>
<?php include 'vendor/components/footer.php' ?>