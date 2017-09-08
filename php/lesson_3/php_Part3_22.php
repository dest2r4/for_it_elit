<?php


const NETM=380;
$width=$_POST['width'];
$height=$_POST['height'];
$border=$_POST['border'];
$V=$width*$height*$border;
$elementsNumber=$V*NETM;
$price=$_POST['price']*$elementsNumber;

echo "<table border='3' width='50%' >
<tr>
<th>Высота</th>
<th>Длина</th>
<th>Толщина</th>
<th>Обьем стены</th>
<th>К-во цеглы</th>
<th>Конечтная стоимость</th>
</tr>
<tr>
<td>{$height}</td>
<td>{$width}</td>
<td>{$border}</td>
<td>{$V}</td>
<td>{$elementsNumber}</td>
<td>{$price}</td>
</tr>



</table>";











