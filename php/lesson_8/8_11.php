<?php



function preload($var){echo "<pre>".print_r($var,true)."</pre>";}


/*
 * 8.1 У програмі є два масиви $frukty, $cinaFr:
 *Створіть програму, яка шукає:
1) товари за заданою конкретною ціною;
2) товари за заданим діапазоном цін;
3) товар за назвою;
4) товар, назва якого починаэться на певну букву
Якщо товару немає у списку, тоді видавати повідомлення: "Такого товару немає у списку".
 */
$fryktu=['Абрикос','Ананас','Алича','Айва','Вишня','Слива','Яблуко'];
$cinaFr=[25,40,10,50,25,15,8];
$newArray1=array_combine($fryktu,$cinaFr);
# for quest 1
$newArray2=[];
#for quest2
$newArray3=[];
$startPrice=$_POST['start2'];
$finishPrice=$_POST['finish2'];

#for quest3
$search=$_POST['search3'];
$search = mb_strtolower($search, 'UTF-8');
$search = mb_strtoupper(mb_substr($search, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($search, 1, null,'UTF-8');

#for quest4
$search4=$_POST['start3'];

$price=$_POST['price'];

$count=count($newArray1);
foreach ($newArray1 as $key=>$value){
    $key=mb_strtolower($key);
    if($price==$value) $newArray2[$key]=$value;
    if($value>=$startPrice && $value<=$finishPrice)$newArray3[$key]=$value;
    #4
    if(stristr($key, $search4))echo $key." == ".$value."<br>";

}
#3
if(array_key_exists($search,$newArray1))echo "Товар {$search}  Ціна: {$newArray1[$search]} грн";