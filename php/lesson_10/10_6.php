<?php
#10.6 Створіть функцію, яка визначає чи точка з координатами xt, yt знаходиться всередині прямокутника з координатами
# x1, y1, x2, y2 , назва функції:inside_rectangle($xt, $yt, $x1, $y1, $x2, $y2)
include "myfunctions.php";
?>


    <form action="" method="post">
        Координаты прямоугольника:<br>
        x1
        <input type="number" name="x1"><br>
        x2
        <input type="number" name="x2"><br>
        y1
        <input type="number" name="y1"><br>
        y2
        <input type="number" name="y2"><br>
        Заданная точка:<br>
        x
        <input type="number" name="f1">
        y
        <input type="number" name="f2"><br>


        <input type="submit">
    </form>



<?php

preload($_POST);
echo inside_rectangle($_POST['f1'],$_POST['f2'],$_POST['x1'],$_POST['y1'],$_POST['x2'],$_POST['y2']);
?>


