<?php
#9.1. Створити двовимірний масив "Inform" з оцінками учнів з інформатики:
$inform=[
    ['Ім`я учня'=>'Василь','12','н','8','н','н','10','10'],
    ['Ім`я учня'=>'Марія' ,'8','','н','','4','н','7'],
    ['Ім`я учня'=>'Ірина' ,'н','11','','н','7','','6'],
    ['Ім`я учня'=>'Петро','','8','8','9','','н','7'],
    ['Ім`я учня'=>'Саша','н','н','н','','9','н','7'],
    ['Ім`я учня'=>'Коля','9','','8','10','10','11','12'],
    ['Ім`я учня'=>'Гріша','9','','','','','7','н'],
    ['Ім`я учня'=>'Оля','н','н','','','6','',''],
    ['Ім`я учня'=>'Галя','4','5','','н','н','н','5'],
    ['Ім`я учня'=>'Тарас','10','10','8','н','11','12','9']
];
#preload($inform);

#9_11. Вивести масив на екран у вигляді  таблиці.
$table="<table border='4' width='90%' style='height:90vh;' >
<tr>
<th>№</th>
<th>Ім'я учня</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</td>
<td>Бали</td>
<td>К-ть оцінок</td>
<td>Середнє</td>
<th>Abs</th>
</tr>";