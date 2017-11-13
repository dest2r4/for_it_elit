<?php
function debug($arg)
{
    echo  "<pre>";
    print_r($arg);
    echo "</pre>";
}



#12.3 Створити програму, яка у вікно браузера виводить інформацію
#про учнів, що записані в таблицю “firma”, рахує кількість учнів.
# При створенні програми враховуйте такі моменти:
$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf8');
const TABLE='firma';



$res1="SELECT *  FROM `".TABLE."` WHERE `post`='учень'";
$res1=$db->query($res1)->fetch_all(MYSQLI_ASSOC);
$pupilCount=count($res1);
echo  $pupilCount;
#debug($res1);
$count=0;

$table="<table border='2' style=' width: 100%;font-size: 50px'>";
$table.="<tr>
<th>Name</th>
<th>Sorname</th>
</tr>";
while ($count<$pupilCount)
{
    $table.="<tr>
<td>{$res1[$count]['name']}</td>
<td>{$res1[$count]['lastname']}</td>";
    $count++;
}
$table.="</table>";
echo  $table;
#echo "<pre>";
#print_r($res);




















#$res=$db->query($sql)->fetch_all(MYSQLI_ASSOC);










?>