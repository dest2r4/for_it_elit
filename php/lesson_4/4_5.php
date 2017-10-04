<?php

# создать переменную дверь. Если дверь 1 - 1маршрутка, 2 двери - 2  маршрутки, 3 двери - жигуль, 4 двери- иномарка, 5 дверей - минивен

$doors=1;
if($doors==1)echo "1 marsh";
elseif ($doors==2)echo "2 marsh";
elseif ($doors==3)echo "Zhigull";
elseif ($doors==4)echo "InCar";
elseif ($doors==5)echo "Miniven";
else echo "undefined car";
