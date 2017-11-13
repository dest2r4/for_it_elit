<?php
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
$db->set_charset('utf8');
const TABLE='firma';



$resA="SELECT * FROM `firma` WHERE `post`='учень'  ";

$resA=$db->query($resA)->fetch_all(MYSQLI_ASSOC);

debug($resA);







?>