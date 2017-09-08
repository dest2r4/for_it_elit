<?php
#9.1. Створити двовимірний масив "Inform" з оцінками учнів з інформатики:
$inform=[
    ['Ім`я учня'=>'Василь','12','н','8','н','н','10','10'],
    ['Ім`я учня'=>'Марія' ,'8','','н','','4','н','7'],
    ['Ім`я учня'=>'Ірина' ,'н','11','','н','7','','6'],
    ['Ім`я учня'=>'Петро','','8','8','9','','н','7'],
    ['Ім`я учня'=>'Саша','н','н','н','','9','н','7'],
    ['Ім`я учня'=>'Коля','9','','8','10','10','11','12'],
    ['Ім`я учня'=>'Гріша','9','','','','','7','н'],
    ['Ім`я учня'=>'Оля','н','н','','','6','',''],
    ['Ім`я учня'=>'Галя','4','5','','н','н','н','5'],
    ['Ім`я учня'=>'Тарас','10','10','8','н','11','12','9']
];
#preload($inform);

#9_11. Вивести масив на екран у вигляді  таблиці.
$table="<table border='4' width='90%' style='height:90vh;' >
<tr>
<th>№</th>
<th>Ім'я учня</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</td>
<td>Бали</td>
<td>К-ть оцінок</td>
<td>Середнє</td>

</tr>";

#9_12. Порахувати середній бал кожного учня і середній бал класу.
$countClass=0;
$sumClass=0;
$string=0;

foreach ($inform as$key1=> $value){
    $key11=$key1+1;
    # загальна к-сть балів
    $sumPoint=0;
    # к-сть оцінок
    $int=0;
    # виводим учнів з найбільшою к-стю оцінок


    $num=$key1+1;
    $table.="<tr><td> {$num}</td> ";
    foreach ($value as$key2=> $uniq){
        #9_12. Порахувати середній бал кожного учня і середній бал класу
        if((int)$uniq){
            (int)$uniq;
            $int++;
            $sumPoint+=$uniq;
            $sumClass++;
            $countClass+=$uniq;

        }else{
            (string)$uniq;
            if ($uniq=='н'){
            }

            $string++;
        }

        $table.="<td>{$uniq}</td>";

    }
    $midlePoint=round($sumPoint/$int,2);
    $table.="<td>{$sumPoint}</td>";
    $table.="<td>{$int}</td>";
    $biggestInt[$key1]=$int;

    $table.="<td>{$midlePoint}</td>";


    $table.="</tr>";
}
#if ($biggestInt[$key1]<$biggestInt[$key11])$biggestInt[$key11]=$biggestInt[$key1];
$table.="</table>";
echo $table;
# средняя оценка класса
$midClass=round($countClass/$sumClass,3);
echo "<h1>Середня оцінка класу: ".$midClass."</h1>";