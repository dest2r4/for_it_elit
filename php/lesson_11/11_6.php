<?php
#11.6 Користувач вводить рядок, програма перетворює цей рядок у інший рядок,
# який складається лише з символів які зустрічаються у першому рядку більше чим 1 раз
?>
<form action="" method="post">
    <input type="text" name="text">
    <input type="submit" value="Проверить" >
</form>


<?php
echo "<h1>Введенная строка: ".$_POST['text']."<br>";
echo "Проверка: ".$_POST['text'][2]."<br>";
$arr=[];
$count=strlen($_POST['text']);
for ($i=0;$i<$count;$i++)$arr[$_POST['text'][$i]]=$i;
$reverse=array_flip($arr);
rsort($reverse);
echo "Массив букв: ";
print_r($reverse);
$message='<br>Новая строка: ';
for ($i1=0;$i1<count($reverse);$i1++)$message.=$reverse[$i1];
#print_r($arr);
echo $message;


