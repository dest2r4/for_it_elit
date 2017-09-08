<?php
#6.7* Створіть програму знаходження cуми всіх чисел кратних введетному і менших = 100  (цикл "while").
$index=1;
$last=100;
$number=$_POST['value'];
$count=0;
$result=0;

while($index<=$last){
    if($index%$number==0){
        $result+=$index;
        $count+=1;
    }
    $index++;
}
echo "Сума всіх чисел кратних  {$number}: і менше {$last} ={$result} ";