<?php
$weight=$_POST['weight'];

$width=$_POST['width'];
$pos1=$width-100;
$lowPos=$pos1* 0.9;
$highPos=$pos1*1.1;
$notice;
echo "Ваш рост -{$width} , ваш вес {$weight} <br>";
if ($weight>$lowPos && $weight<$highPos){
    echo "Ваша вага {$weight} при зрості {$width} см нормальна";
}elseif ($weight<$lowPos){
    $notice=$pos1-$weight;
    echo "Ви важите менше норми, вам необхідно поправитись на {$notice} кг";
}else {
    $notice = $weight-$pos1;
    echo "Ви важите більше норми, Вам необхідно схуднути на {$notice} кг";
}