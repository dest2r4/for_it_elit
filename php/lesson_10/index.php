<form action='' method="post">
    <input type="number" name="width">
    <input type="submit">
</form>

<?php
include 'myfunctions.php';
echo "Сторона квадрата: {$_POST['width']}<br>";
echo "Квадратный корень стороны: ".$x=sqr($_POST['width'])."<br>";
echo "Площадь всего квадрата ".$x=area_sqr($_POST['width']);