<?php
#9_19*. Визначити найкращого учня. Найкращий учень - той, що має найвищий середній бал, якщо таких учнів декілька,
# тоді той з них, хто має більше оцінок, якщо є декілька таких учнів, тоді той, хто має менше пропусків.


function preload($var){echo "<pre>".print_r($var,true)."</pre>";}

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
$final=[];
# проверка по пропускам
$finalAbsent=[];

foreach ($inform as $key => $value){
    $val=0;
    $count=0;
    # пропуски
    $absent=0;

    foreach ($value as $key2=> $value2) {
        if ((int)$value2) {
            (int)$value2;
            $count++;
            $val += $value2;
        } elseif ($value2 == 'н') {
            $absent++;
        }
    }
    $final1[]=[$value['Ім`я учня'],$val/$count,$absent];
    $final[]=$val/$count;
    $finalAbsent[]=$absent;
}
#preload($final);
preload($finalAbsent);
$res=max($final);
$winners=[];
#preload($res);
foreach ($final1 as $key =>$value){

    foreach ($value as $key2=>$value2) {
        if ($res==$value2) {

            $value2=$res-$finalAbsent[$key];
            $winners[]=[$value2,$key];


        }
    }
}
$last=max($winners);
$message="Найкращий учень: ";
foreach ($final1 as $key => $value){
            if($key==$last[1]){
                foreach ($value as $q=>$qq){
                    $message.="{$qq} ";
                }

            }
}
preload($last);
echo $message;