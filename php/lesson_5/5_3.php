<?php



# создать калькулятор



?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h1 align="center">Calculator</h1>
    <form action="3_4.php" method="post">
        First
        <input type="number" name="first"><br>
        Second
        <input type="number" name="second"><br>
        Option
        <input type="radio" name="type" value="+">
        <input type="radio" name="type" value="-">
        <input type="radio" name="type" value="*">
        <input type="radio" name="type" value="/">

        <input type="submit" value="Calc_it">
    </form>

    </body>
    </html>


<?php

$first=$_POST['first'];
$second=$_POST['second'];
$option=$_POST['type'];
if($option==="+")echo $res=$first+$second;
elseif ($option==="-")echo $res=$first-$second;
elseif ($option==="*")echo $res=$first*$second;
else echo $res=$first/$second;

?>