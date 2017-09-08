<?php
#8.3 Написати програму, яка обробляє результати іспиту.
#Для кожної оцінки програма повинна обчислити відсоток від загальної кількості оцінок.
$points=[];
$count=30;
$counter=0;
for ($i=0;$i<$count;$i++)$points[$i]=rand(80,200);
foreach ($points as $key=>$point)if($points[0]>$point)$counter++;
$result=($counter)/$count;
echo $result;
preload($points);