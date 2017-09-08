<?php

#7.5 Створіть два масиви:
#Створіть, через обчислення, масив $c[0..9], у якому:
#Виведіть на екран таблицю з значеннями a, b, c
#Для рішення цієї задачі у програмі використайте тільки 1 цикл.
$a=[];
$b=[];
$c=[];
$table="<table  width='50%' style='font-size:36px'><tr><th>A</th><th>B</th><th>C</th></tr>";
$count=10;
for($i=0;$i<$count;$i++){
    $a[$i]=rand(1,1000);
    $b[$i]=rand(1,1000);
    $c[$i]=sqrt(pow($a[$i],2)+pow($b[$i],2));
    $table.="<tr><td>{$a[$i]}</td><td>{$b[$i]}</td><td>{$c[$i]}</td></tr>";
}
$table.="</table>";
echo $table;