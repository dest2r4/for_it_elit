<?php
#11.5 Створити функцію pr($r), що з  рядка видаляє такі групи символів: “[[”,  “....”, “{{”.
$val="Строка с [[ многими подстроками, .... и текстом {{ аля {";
echo $val."<br>";
function pr($r){
    for($i=0;$i<strlen($r);$i++){
        if ($x=strpos($r,'[['))$r=substr_replace($r,'',$x,2);
        elseif($x=strpos($r,'....'))$r=substr_replace($r,'',$x,4);
        elseif ($x=strpos($r,'{{'))$r=substr_replace($r,'',$x,2);
    }
    return $r;
}
echo pr($val);