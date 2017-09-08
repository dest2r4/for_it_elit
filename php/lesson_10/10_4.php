<?php
#10.4 Створити функцію this_triangle($x,$y,$z) ,
# що визначає можливість побудови трикутника з сторін у яких довжини рівні $x, $y, $z .
# Функція повинна повертати логічну константну true , якщо побудова трикутника можлива,
# у іншому випадку функція повинна повертати false .
#У функції this_triangle($x,$y,$z) , для визначення найбільшої сторони, використайте функцію max_num_ of_three($x,$y,$z) .

?>


<form action=""method="post">
    <input type="number" name="1"><br>
    <input type="number" name="2"><br>
    <input type="number" name="3"><br>
    <input type="submit">
</form>


<?php
include "myfunctions.php";
preload($_POST);
$x=this_triangle($_POST[1],$_POST[2],$_POST[3]);
echo $message=($x)?"Побудова можлива":"Побудова НЕможлива";