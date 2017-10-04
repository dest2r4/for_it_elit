<?php
#11.2 Створити програму, яка кожен символ з рядка $r
# виводить в окремому рядку і замінює прогалину на “_”. Наприклад, якщо користувач ввів рядок
$val="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias cupiditate provident reprehenderit totam. Amet beatae distinctio hic minima qui ratione rem similique vel? Iste, natus ullam?
";
$lenght=strlen($val);
for ($i=0;$i<$lenght;$i++){
    if($val[$i]==' ')echo '++';
    echo $val[$i]."<br>";
}
?>










