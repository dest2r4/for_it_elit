<form action=""method="post">
    <input type="number" size="1" step="1" name="1">
    <input type="number" size="1" step="1" name="2">
    <input type="number" size="1" step="1" name="3"><br>
    <input type="number" size="1" step="1" name="4">
    <input type="number" size="1" step="1" name="5">
    <input type="number" size="1" step="1" name="6"><br>
    <input type="number" size="1" step="1" name="7">
    <input type="number" size="1" step="1" name="8">
    <input type="number" size="1" step="1" name="9"><br>
    <input type="submit" value="Проверить">


</form>

<?php
function preload($var){echo "<pre>".print_r($var,true)."</pre>";}
preload($_POST);
$count=0;
#сумма горизонта 1
$sumH1=$_POST[1]+$_POST[2]+$_POST[3];

#сумма горизонта 2
$sumH2=$_POST[4]+$_POST[5]+$_POST[6];
$count=($sumH1==$sumH2)?$count+1:0;
#сумма горизонта 3
$sumH3=$_POST[7]+$_POST[8]+$_POST[9];
$count=($sumH2==$sumH3)?$count+1:0;

#сумма верт 1
$sumV1=$_POST[1]+$_POST[4]+$_POST[7];

#сумма верт 2
$sumV2=$_POST[2]+$_POST[5]+$_POST[8];
$count=($sumV1==$sumV2)?$count+1:0;
#сумма верт 3
$sumV3=$_POST[3]+$_POST[6]+$_POST[9];
$count=($sumV2==$sumV3)?$count+1:0;
#пересечение 1
$reverse1=$_POST[1]+$_POST[5]+$_POST[9];

# пересечение 2
$reverse2=$_POST[3]+$_POST[5]+$_POST[7];
$count=($reverse1==$reverse2)?$count+1:0;
if($count==5)echo "<h1>Это магическая матрица";
else echo "<h1>Это НЕ магическая матрица";

?>