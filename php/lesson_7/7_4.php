<?php



#7.4 Створіть 3 масиви:
#Програма повинна створити 4 масив $sb[0..9] - середній бал з вивчення мов кожного учня,
#знайти середній бал з вивчення мов всіх учнів.
$name=['Вася','Коля','Петя','Стьопа','Галя','Толя ','Гена','Міша','Джон','Джиндер'];
$ukr=[];for ($i=0;$i<10;$i++)$ukr[$i]=rand(1,12);
$eng=[];for ($i1=0;$i1<10;$i1++)$eng[$i1]=rand(1,12);
$_4array=[];
$count=count($ukr);
for($i2=0;$i2<$count;$i2++)$_4array[$i2]=($ukr[$i2]+$eng[$i2])/2;
$newArray=array_combine($name,$_4array);
$table="<table width='50%' border='2' style='font-size:36px'><tr>
<th>№</th>
<th>Ім'я</th>
<th>Укр мова</th>
<th>Англ мова</th>
<th>Середній бал</th></tr>";
for($i3=0;$i3<$count;$i3++){
    $currentNumber=$i3+1;
    $table.="<tr>
<td>{$currentNumber}</td>
<td>{$name[$i3]}</td>
<td>{$ukr[$i3]}</td>
<td>{$eng[$i3]}</td>
<td>{$_4array[$i3]}</td></tr>";

}
$table.="</table>";
$middle=array_sum($newArray)/count($newArray);
echo $table."<br><span style='font-size: 36px'> Cередній бал учнів  = {$middle}</span>";