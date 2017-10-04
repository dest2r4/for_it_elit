<?php
#11.4 Створити функцію this_picture($r), яка визначає  чи переданий їй рядок $r є назвою файлу
# у якому міститься графічне зображення.
#Функція повинна відслідковувати тільки такі типи файлів: *.jpg, *.png, *.gif .
$r='new.png';
function this_picture($r){
    $needed_arr=['.jpg','.png','.gif'];
    $res;
    $test=explode('.',$r);
    #print_r($test);
    rsort($test);
    $test[0]=".".$test[0];
    print_r($test);

    for($i=0;$i<count($needed_arr);$i++){
        if(strpos($r,$needed_arr[$i])){
            if($test[0]===$needed_arr[$i])$res=true;
            else $res=false;
        }
}
return $res;
}
echo this_picture($r);
