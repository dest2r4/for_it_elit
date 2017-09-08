<?php
#4.3 За перший товар ви заплатили гривнями , за другий товар заплатили доларами.
# Визначити який товар коштує дорожче,якщо один долар коштує 25.6 грн.
?>
<form action="php_Part4_32.php" method="post">
    Ціна в грн  <input type="number" name="grn" step="0.1"><br>
    Ціна в &dollar; <input type="number" name="dollar" step="0.1"><br>
    Курс НБУ  <input type="number" step="0.01" name="equal"><br>
    <input type="submit" value="Вказати">
</form>
