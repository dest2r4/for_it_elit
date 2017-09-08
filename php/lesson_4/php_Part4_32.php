<?php
$grn=$_POST['grn'];
$dollar=$_POST['dollar'];
$equal=$_POST['equal'];
$dTg=$dollar*$equal;
if($grn>$dTg){
    echo "<h1>Товар, куплений за гривні коштує дорожче";
}elseif ($grn<$dTg){
    echo "<h1>Товар, куплений  за доляри коштує дорожче";
}else{
    echo "<h1>Товари коштують однаково";
}
