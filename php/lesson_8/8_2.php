<?php

#8.2 Написати програму, яка визначає кількість учнів у класі, чий зріст перевищує середній.
$names=['Марічка','Ігор','Коля','Петя','Стьопа','Галя','Даніель','Паоло'];
$height=[];
$student=[];
$count=count($names);

$number=0;
for ($i=0;$i<$count;$i++)$student[$names[$i]]=rand(145,210);
$middle=array_sum($student)/count($student);
#echo $middle;
foreach ($student as $value){
    if($value>$middle)$number++;
}
#preload($student);
echo "<h1>Кількість учнів зі зростом більше середнього {$number}";
