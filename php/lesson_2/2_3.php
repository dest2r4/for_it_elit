<?php

#2.3 Знайти гіпотенузу прямокутного трикутника по заданих величинах його катетів.
$A=3;
$B=4;
$C=sqrt(pow($A,2)+pow($B,2));
echo "<table border='3' width='300px'>
<tr><td>Катет А </td><td>{$A}</td></tr>
<tr><td>Катет В </td><td>{$B}</td></tr>
<tr><td>Гипотенуза </td><td>{$C}</td></tr>
</table>";



?>