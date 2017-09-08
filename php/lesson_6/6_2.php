<?php
#6.2 Створіть програму, яка допоможе побудувати графік функції y=x2.
# Значення змінної x змінюється від -10 до 10 з кроком 0.5 .
# Програма повинна порахувати всі значення змінної y і на екран вивести таблицю значень змінних x і y. Використати цикл "while").
$xStart=-10;
$xFinish=10;
$table="<table border='3' width='50%' style='font-size: 40px' align='center'> <tr>
<th>№</th>
<th>X</th>
<th>Y</th>
</tr>";
for ($i=$xStart,$iteration=0;$i<=$xFinish;$i+=0.5,$iteration++){
    $table.="<tr>";
    $table.="<td>{$iteration}</td>
<td>{$i}</td><td>".pow($i,2)."</td>";
    $table.="</tr>";
}
echo $table;