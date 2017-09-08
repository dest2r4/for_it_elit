<?php

#7.3 Створіть 2 масиви: $tovar[0..9],  $price[0..9].
#Знайдіть середню ціну товару. Виведіть на екран ці два масиви і середню ціну товару.
$tovar=['Хліб','Макарони', 'Йогурт', 'Булка', 'Сосіски', 'Котлєта', 'Відбивна', 'Нагетс', 'Гірчиця','Маракуя'];
$price=[17.58,545,87,3984,45,875,684,85,154,24];
echo "<div style='float: left'>";
foreach ($tovar as $key=>$value) echo "{$key}&nbsp  &nbsp  &nbsp  &nbsp{$value}<br>";
echo "</div>";
foreach ($price as $value2) echo "&nbsp &nbsp &nbsp ".$value2."<br>";
$middle=array_sum($price)/count($price);
echo "<strong>Середня ціна - {$middle}";
