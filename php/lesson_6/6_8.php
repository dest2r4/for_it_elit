<?php


# создать переменную, в которую мы по очереди рандомно будем загонять числа,
# и выводить её вместе с ключем(вспоминаем, что у нас есть цикл, а есть итерация)



$numb=0;

for ($i=0;$i<100;$i++){
    $numb=rand(0,100000);
    echo $i."==>".$numb."<br>";
}
