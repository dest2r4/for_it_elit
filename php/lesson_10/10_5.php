<?php
#10.5 Створіть функцію area_triangle($x, $y, $z) яка обчислює площу трикутника по довжинам його трьох сторін.
# Площа трикутника обчислюється по формулі Герона.
#Створіть програму, яка обчислює площу трикутника по введеним довжинам сторін.
# Якщо з введених сторін трикутника збудувати не можливо, тоді програма видає повідомлення:
# «З введених вами довжин трикутника збудувати не можливо».
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
echo $S=area_triangle($_POST[1],$_POST[2],$_POST[3]);

$im=imagecreate(200,200);
$bgC=imagecolorallocate($im,255,255,0);
imagepng($im,'demoimage.png');

