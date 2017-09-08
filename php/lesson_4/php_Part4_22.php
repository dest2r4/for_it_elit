<?php
$temp=$_POST['temp'];
if ($temp<=0){
    echo "<h1>Вода при температурі  {$temp}&deg;C --> лід";
}elseif ($temp>0 && $temp<=100){
    echo  "<h1>Вода при температурі {$temp}&deg;C --> рідина";
}else{
    echo "<h1>Вода при температурі  {$temp}&deg;C --> газ";
}
