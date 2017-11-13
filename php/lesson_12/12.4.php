<?php
function debug($arg)
{
    echo  "<pre>";
    print_r($arg);
    echo "</pre>";
}


#12.4 Створити програму, яка у вікно браузера, з таблиці “firma”
#виводить імена і прізвища учнів у зворотному порядку,
#тобто останній введений у базу, передостанній введений у базу …

$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf8');
const TABLE='firma';



$res1="SELECT *  FROM `".TABLE."` WHERE `post`='учень' ORDER BY `id` DESC ";
$res1=$db->query($res1)->fetch_all(MYSQLI_ASSOC);
$pupilCount=count($res1);
echo  $pupilCount;
#debug($res1);
$count=0;


$table="<table border='2' style=' width: 100%;font-size: 50px'>";
$table.="<tr>
<th>Id</th>
<th>Name</th>
<th>Sorname</th>
</tr>";
while ($count<$pupilCount)
{
    $table.="<tr>
<th>{$res1[$count]['id']}</th>
<td>{$res1[$count]['name']}</td>
<td>{$res1[$count]['lastname']}</td>";
    $count++;
}
$table.="</table>";
echo  $table;





















#$res=$db->query($sql)->fetch_all(MYSQLI_ASSOC);










?>