<form action="index.php" >
    <input type="number" name="a" >
    <input type="number" name="b"><br>
    +<input type="radio" name="+" value="+" required>
    *<input type="radio" name="+" value="*" required><br>
    <input type="submit">
</form>

<br>
<a href="index2.php" style="font-size: 70px">
   Page1
</a>
<br>
<?php
error_reporting(0);

# 13.1 Створити програму яка додає 2 довільних числа переданих у файл методом GET.
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['+'];

$res=($c=='+')?$a+$b:$a*$b;
echo  "'$a' {$c} '$b' = {$res}";


?>