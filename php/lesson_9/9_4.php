<form action="" method="post">
    Cумма вклада
    <input type="number" name="money"><br>
    Термин вклада
    <input type="number" name="month"><br>
    <input type="submit">
</form>

<?php
function preload($var){echo "<pre>".print_r($var,true)."</pre>";}
preload($_POST);
$operation=[
        [15, 16.5, 18,19.5,21,22],
        [16.5, 18 ,19.5, 21,22.5,24],
        [18.5, 19.5, 21,22.5,24,27]
];
$month=$_POST['month'];

$money=$_POST['money'];
$moneyS=$_POST['money'];
$values=[3,6,12,18,24,36];


#preload($operation);
if($money<50000){
    if($month==3)$money=$money*$operation[0][0]/100;
    elseif ($month==6)$money=$money*$operation[0][1]/100;
    elseif ($month==12)$money=$money*$operation[0][2]/100;
    elseif ($month==18)$money=$money*$operation[0][3]/100;
    elseif ($month==24)$money=$money*$operation[0][4]/100;
    elseif ($month==36)$money=$money*$operation[0][5]/100;
    else {$money=0;
        echo "Некорректный термин вклада";
    }
}
elseif ($money>=50000 &&$money<=250000){
    if($month==3)$money=$money*$operation[1][0]/100;
    elseif ($month==6)$money=$money*$operation[1][1]/100;
    elseif ($month==12)$money=$money*$operation[1][2]/100;
    elseif ($month==18)$money=$money*$operation[1][3]/100;
    elseif ($month==24)$money=$money*$operation[1][4]/100;
    elseif ($month==36)$money=$money*$operation[1][5]/100;
    else {
        $money=0;
        echo "Некорректный термин вклада";
    }
}
else {
    if($month==3)$money=$money*$operation[2][0]/100;
    elseif ($month==6)$money=$money*$operation[2][1]/100;
    elseif ($month==12)$money=$money*$operation[2][2]/100;
    elseif ($month==18)$money=$money*$operation[2][3]/100;
    elseif ($month==24)$money=$money*$operation[2][4]/100;
    elseif ($month==36)$money=$money*$operation[2][5]/100;
    else {
        $money=0;
        echo "Некорректный термин вклада<br>";
    }
}
if ($money>0)echo "Сумма вклада: {$moneyS} термин залога: {$month}<br><h1>Доход за вкладом {$money}";
else echo "<br>Введены некорректные данные, проверьте все и введите есче раз";



?>

