<?php
#6.6 Створіть програму виводу на екран всіх чисел кратних введеному і менших = 100  (цикл "while").
#Програма також повинна порахувати кількість таких (кратних) чисел.
$index=1;
$last=100;
$number=$_POST['value'];
$count=0;
echo "Числа кратні {$number}: ";
while($index<=$last){
    if($index%$number==0){
        echo $index.", ";
        $count+=1;
    }
    $index++;
}
echo ". Їх кількість - {$count}";