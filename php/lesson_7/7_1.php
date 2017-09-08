<?php
function preload($var){echo "<pre>".print_r($var,true)."</pre>";}
#7.1 Заповнити масив $m[0…9] довільними числами використавши функцію array().
# Виведіть на екран цей масив у таблиці:
$m=array(60,82,87,66,83,58,25,414,512,72);
$table="<table border='2' width='500px' style='font-size: 36px'><tr>";
foreach ($m as $key=>$value) $table.="<td>{$key}</td>";
$table.="</tr><tr>";
foreach ($m as $key2=>$value2) $table.="<td>{$value2}</td>";
$table.="</tr></table>";
echo $table;
