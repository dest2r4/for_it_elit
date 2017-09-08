<?php
#6.5* Створіть програму знаходження cуми чисел:1 + 1/2 + 1/3 + 1/4 + ... + 1/20
$iterations=20;
$result=0;
$del=1;
$i=1;
while($i<=$iterations){
    $result+=$del/$i;
    $i++;
    #echo "{$del}/{$i} ==> {$result}.<br>";
}
echo $result;