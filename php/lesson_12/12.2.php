<?php

# 12.2 Створити програму, яка виводить на екран імена, прізвища і посади людей,
# що записані в таблицю “firma”.
$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf8');
const TABLE='firma';


$sql="SELECT * FROM `".TABLE."`";

$res=$db->query($sql)->fetch_all(MYSQLI_ASSOC);
$table="<table border='2' style=' width: 100%;font-size: 50px'>";
$table.="<tr>
<th>Id</th>
<th>Name</th>
<th>Sorname</th>
<th>Role</th>
</tr>";
foreach ($res as $position => $value)
{
    $table.="<tr>
<td>{$value['id']}</td>
<td>{$value['name']}</td>
<td>{$value['lastname']}</td>
<td>{$value['post']}</td></tr>";
}
$table.="</table>";
echo  $table;
#echo "<pre>";
#print_r($res);









?>