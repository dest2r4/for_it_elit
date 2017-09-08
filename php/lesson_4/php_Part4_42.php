<?php
$V=$_POST['v'];
$salary=$_POST['salary'];
$finalSalary;
$finalPercent;
if ($V<1000 ){
    $finalPercent=0.2;
    $finalSalary=$V*$salary*$finalPercent;
}elseif ($V>=1000 && $V<2000){
    $finalPercent=0.25;
    $finalSalary=$finalPercent*$V*$salary;
}elseif($V>=2000){
    $finalPercent=0.3;
    $finalSalary=$V*$salary*$finalPercent;
}
echo "Продавець продав {$V} літрів молока по {$salary} грн/л.<br>
         Його відсоток від прибутку: {$finalPercent}<br>
         Отримана зарплатня {$finalSalary} грн";