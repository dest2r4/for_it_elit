<?php
header('Content-Type: text/html; charset=utf-8');
function debug($arg)
{
    echo  "<pre>";
    print_r($arg);
    echo "</pre>";
}

#12.6 Створити програму, яка у двовимірний масив $students копіює
# дані про всіх учнів таблиці “firma”.
# Програма повинна вивести у вікно браузера масив $students.

$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf-8');
const TABLE='firma';


function bigFirstCharStr($r)
{
    $r=trim($r);
    $r=strtolower($r);
    $r=ucfirst($r);
    return $r;
}


$string=bigFirstCharStr($_POST['String']);



$resA="SELECT * FROM `firma` WHERE `lastname`='".$string."'";
echo  $string."<br>";
echo  '<br>'.$resA;


$resA=$db->query($resA)->fetch_all();
if(!$resA)echo "Нікого не знайдено ";
debug($resA);







?>
<form action="index.php" method="post">
    <input type="text" name="String">
    <input type="submit">
</form>
