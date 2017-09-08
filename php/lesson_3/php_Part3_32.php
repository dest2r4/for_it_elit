<?php
#Geron S=/^2(p(p-a)(a-b)(p-c)
#p=(a+b+c)/2

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$p=($a+$b+$c)/2;
$S=sqrt($p*($p-$a)*($p-$b)*($p-$c));
echo "Треугольник со сторонами {$a}, {$b}, {$c} имеет площадь {$S} см<sup>2</sup>";
