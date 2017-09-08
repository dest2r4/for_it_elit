<?php
#10.3 Створити програму, що визначає яке з трьох введених чисел є найбільшим. Програма використовує функцію max_num_ of_three($x,$y,$z), що повертає  значення найбільшого з трьох введених. У випадку, коли всі числа рівні, функція повертає значення буть-якого числа.
# У випадку, коли два числа є рівні і більші третього, тоді вивести значення одного з цих двох.
?>

<form action=""method="post">
    <input type="number" name="1"><br>
    <input type="number" name="2"><br>
    <input type="number" name="3"><br>
    <input type="submit"><br>
</form>


<?php
include 'myfunctions.php';
preload($_POST);
$max=max_num_of_three($_POST[1],$_POST[2],$_POST[3]);
$message="<h2>Введенные значения: ";
foreach ($_POST as $value) $message.=" {$value},";
echo $message.="<br><h1>Максимальное значение - {$max}";
