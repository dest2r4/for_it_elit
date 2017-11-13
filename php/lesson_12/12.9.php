<form action="index.php" method="post">
    <input type="text" name="Query">
    <input type="submit">
</form>
<?php

function debug($arg)
{
    echo  "<pre>";
    print_r($arg);
    echo "</pre>";
}

#12.9 Користувач у поле для пошуку вводить послідовність символів (частину імені).
#  Програма повинна у таблиці “firma” знайти працівників чи учнів у імені яких є така послідовність символів.
# Якщо таких імен не знайдено, тоді програма видати повідомлення: “Нікого не знайдено”.

$db=new mysqli('localhost','root','','it_elit');
if($err=$db->connect_error)die($db->connect_error);
$db->set_charset('utf8');
const TABLE='firma';

$string=$_POST['Query'];
#echo $string;


$resA="SELECT * FROM `firma` WHERE `name` LIKE '%".$string."' 
OR  `lastname` LIKE '%".$string."' OR `post` LIKE '%".$string."'  ";



$resB=$db->query($resA)->fetch_all(MYSQLI_ASSOC);
if(!$resB)echo "Data Error on {$string}";
else debug($resB);







?>
