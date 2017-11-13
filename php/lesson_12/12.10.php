
<?php

function debug($arg)
{
    echo  "<pre>";
    print_r($arg);
    echo "</pre>";
}

#12.9 Отсортировать нашу таблицу по званиям

$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf8');
const TABLE='firma';

$string=$_POST['Query'];
#echo $string;


$resA="SELECT * FROM `firma` ORDER BY `firma`.`post` ASC";



$resB=$db->query($resA)->fetch_all(MYSQLI_ASSOC);

 debug($resB);







?>
