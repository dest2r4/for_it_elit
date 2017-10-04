<?php
#11.7 Перевірити чи введене користувачем слово є паліндром (то що читається з ліва на право і з права на ліво однаково),
$var="око";
function preload($var){echo "<pre>".print_r($var,true)."</pre>";}
#$arr=str_split($var);
$len=mb_strlen($var);
$arr=preg_split('//u',$var,-1,PREG_SPLIT_NO_EMPTY);
$arr2=array_reverse($arr);
$count=false;
for($i=0;$i<$len;$i++){

    if($arr[$i]==$arr2[$i]){
        #echo $arr[$i]."==".$arr2[$i]."<br>";
        $count=true;
    }else {
        $count=false;
        echo "Слово {$var} не палиндр";
        break;
    }


}
if($count==true)echo "<h1>Cлово {$var} является палиндром";
#preload($arr);
#preload($arr2);





