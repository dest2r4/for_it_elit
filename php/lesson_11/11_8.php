<?php
function preload($var){echo "<pre>".print_r($var,true)."</pre>";}
$alph=[
    'а',
    'б',
    'в',
    'г',
    'д',
    'е',
    'є',
    'ж'
];
$alph2=[];
for ($i=0;$i<count($alph);$i++){
    $z=$i+1;
    if($i<=count($alph)-2) $alph2[$i]=$alph[$z];
    else $alph2[$i]=$alph[0];
}
#preload($alph2);
#preload($alph);
$word='деда';
$arr=preg_split('//u',$word,-1,PREG_SPLIT_NO_EMPTY);
$len=mb_strlen($word);
#preload($arr);
$word1='';
$vocabulary=array_combine($alph,$alph2);
# шифратор
for ($q=0;$q<$len;$q++){
    if(array_key_exists($arr[$q],$vocabulary)){
        $word1.=$vocabulary[$arr[$q]];
    }
}
$vocabularyD=array_flip($vocabulary);
$arr1=preg_split('//u',$word1,-1,PREG_SPLIT_NO_EMPTY);
$word2='';
for ($q1=0;$q1<$len;$q1++){
    if(array_key_exists($arr1[$q1],$vocabularyD)){
        $word2.=$vocabularyD[$arr1[$q1]];
    }
}
echo "Наше слово == {$word},<br> слово зашифрованное == {$word1}<br> Обратно вернули == {$word2}";
preload($vocabulary);
preload($vocabularyD);



