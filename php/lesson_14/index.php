<?php
function debug($arg)
{
    echo "<pre>";
    print_r($arg);
    echo  "</pre>";
}


$db=new mysqli('localhost','root','','it_elit');

if($err=$db->connect_error)die($res);

const TABLE1='cars';
const TABLE2='car_cat';

$query="SELECT * FROM `".TABLE1."`"; #cars
$query2="SELECT * FROM `".TABLE2."`"; # car cat

$res1=$db->query($query)->fetch_all(MYSQLI_ASSOC);
#debug($res1);
$res2=$db->query($query2)->fetch_all(MYSQLI_ASSOC);
$CatCount=$db->query($query2)->num_rows;
@$cat1=($_GET['id'])?$_GET['id']:1;
#debug($res2);
$query3="SELECT * FROM `".TABLE1."` WHERE `parent`= $cat1" ;
$res3=$db->query($query3)->fetch_all(MYSQLI_ASSOC);
#debug($res3);



$menu=$_GET['menu'];
if(!$menu)$menu='def';
$style=($menu=='def')?'aside':'hor';




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>



<div id="<?=$style ?>"><!--ASIDE MENU -->



    <ul>
 <?php foreach ($res2 as $numb=> $cat): ?>
     <?php if($numb==$cat1-1): ?>

         <li><a href="<?='?id='.$cat['id']?>" class="active" >
         <?php else: ?>
         <li><a href="<?='?id='.$cat['id']?>" >
         <?php endif;?>


                <?=$cat['name']?></a></li>

        <?php endforeach; ?>
    </ul>
    <form action="index.php">
        Вертикальное меню
        <input type="radio" name="menu" value="def" required><br>
        Горизонтальное меню
        <input type="radio" name="menu" value="hor" required><br>
        <input type="submit">


    </form>
</div><!-- END ASIDE MENU-->


<div id="foto">

    <?php foreach ($res3 as $photo):?>

        <img src="img/<?= $photo['img'].'.png'?>" alt="<?=$photo['name']?>">




    <?php endforeach; ?>




</div>












</body>
</html>
