<?php
#9.2 Написати програму, яка визначає номер рядка двовимірного масиву, сума елементів якого максимальна.
$arr=[
  [10,20,21,215,21,12,5],
  [54,214,123,1,1,422,12,2],
  [2,3,5,1,123,221,1,52]
];
function preload($var){echo "<pre>".print_r($var,true)."</pre>";}
$res=[];
foreach ($arr as $key1=>$val1){
    $sum=0;
    foreach ($val1 as $key2=>$val2){
        $sum+=$val2;
    }
    $res[$key1]=$sum;
}
$max=max($res);
for ($i=0;$i<count($res);$i++){
    if($res[$i]==$max){
        echo "Номер рядка: {$i}. Сума рядка {$res[$i]}";
    }
}
preload($res);