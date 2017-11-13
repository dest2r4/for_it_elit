<?php
function debug($arg)
{
    echo  "<pre>";
    print_r($arg);
    echo "</pre>";
}


#12.5 Створити програму, яка у вікно браузера, з таблиці “firma” виводить:
#a) імена і прізвища всіх учнів у яких прізвища  відсортовані  по алфавіту;
#b) шість останніх імен і прізвищ учнів;


$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf8');
const TABLE='firma';



$resA="SELECT * FROM `firma` WHERE `post`='учень'  ORDER BY `firma`.`lastname` ASC ";
$resB="SELECT * FROM `firma` ORDER BY `firma`.`lastname` DESC LIMIT 6 ";

$resA=$db->query($resA)->fetch_all(MYSQLI_ASSOC);
$resB=$db->query($resB)->fetch_all(MYSQLI_ASSOC);
$pupilCount=count($resA);
echo  $pupilCount;
#debug($res1);
$count=0;


$table="<table border='2' style=' width: 100%;font-size: 50px'>";
$table.="
<caption>TABLE 1</caption>
<tr>
<th>Id</th>
<th>Name</th>
<th>Sorname</th>
</tr>";
while ($count<$pupilCount)
{
    $table.="<tr>
<th>{$resA[$count]['id']}</th>
<td>{$resA[$count]['name']}</td>
<td>{$resA[$count]['lastname']}</td>";
    $count++;
}
$table.="</table>";
echo  $table;
#debug($resB);

$table2="<table border='2' style=' width: 100%;font-size: 50px'>";
$table2.="
<caption>TABLE 2</caption>
<tr>
<th>Id</th>
<th>Name</th>
<th>Sorname</th>
</tr>";
foreach ($resB as  $pos)
{
    $table2.="<tr>
<th>{$pos['id']}</th>
<td>{$pos['name']}</td>
<td>{$pos['lastname']}</td>";

}

$table2.="</table>";
echo  $table2;
















#$res=$db->query($sql)->fetch_all(MYSQLI_ASSOC);










?>