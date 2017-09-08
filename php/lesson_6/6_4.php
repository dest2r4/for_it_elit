<?php
#6.4 Створіть програму знаходження добутку всіх чисел кратних 3 і менших 20 . Використати цикл "while".
$first=0;
$last=20;
$result=1;
while($first<20){
    ++$first;
   if ($first%3==0)$result*=$first;
}
echo $result;

