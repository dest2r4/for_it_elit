<?php
#10.10 Створіть функцію sort_array($x), яка повертає відсортований одновимірний масив $x.
# Використайте цю функцію у програмі..
include 'myfunctions.php';
$arr=[];
for($i=0;$i<10;$i++)$arr[$i]=rand(0,1000);
echo sort_array($arr);