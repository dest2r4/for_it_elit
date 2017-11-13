<?php

function debug($arg)
{
    echo  "<pre>";
    print_r($arg);
    echo "</pre>";
}

#12.8 Створити програму, яка на екран виводить інформацію про учнів,
# що записані у таблиці “firma”, у яких прізвище закінчується на “чук”, наприклад Марчук.

$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf8');
const TABLE='firma';




$resA="SELECT * FROM `firma` WHERE `post`='учень' AND `lastname` LIKE '%чук' ";



$resB=$db->query($resA)->fetch_all(MYSQLI_ASSOC);

debug($resB);







?>
