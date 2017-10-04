<?php
#11.3* Створити програму, яка з рядка $r видаляє три зайві символи, замінюючи їх на 1,
$val="Ось прик....лад PHP-коду,,, що з’єднує ваш,,у програ,,му з ба,,зою да,,ни.............х";
echo $val."<br>";
$x=strpos($val,',,');
$val=substr_replace($val,'',$x,2);
for($i=0;$i<strlen($val);$i++){
    if ($x=strpos($val,'...'))$val=substr_replace($val,'',$x,2);
    elseif($x=strpos($val,',,'))$val=substr_replace($val,'',$x,2);
    elseif ($x=strpos($val,'..'))$val=substr_replace($val,'',$x,2);
}
echo $val;