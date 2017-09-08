<form action="" method="post">
Точки для кола:<br>

    xt <input type="number" name="xt"><br>
    yt <input type="number" name="yt"><br>
    x1 <input type="number" name="xc"><br>
    y1<input type="number" name="yc"><br>
    r <input type="number" name="r"><br>
        <input type="submit"><br>


    <?php
include 'myfunctions.php';
preload($_POST);
inside_circle($_POST['xt'],$_POST['yt'],$_POST['xc'],$_POST['yc'],$_POST['r']);