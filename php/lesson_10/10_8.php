<?php
#10.8 Створіть функцію max_array($x).
# Функція повертає максимальне значення одновимірного масиву $x .
# Використайте цю функцію у програмі.

include 'myfunctions.php';
$arr=[];
for($i=0;$i<1000;$i++)$arr[$i]=rand(0,10000000);
#preload($arr);
echo "<h1>Максимальный результат  ==> ".max_array($arr);

