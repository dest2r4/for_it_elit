<?php
#10.2 Створити програму, що обраховує площу кола по її радіусу (радіус вводиться користувачем).
# Програма повинна використовувати функцію area_circle($x) , що повертає площу кола, де $x – радіус кола.
#S=PR^2
include 'myfunctions.php';
?>
<form action="" method="post">
    <input type="number" name="square">
    <input type="submit">
</form>



<?php
echo "Радиус круга: {$_POST['square']}<br>";
echo "<h1>Площадь круга: ".$square=area_circle($_POST['square']);
#preload($_POST);

