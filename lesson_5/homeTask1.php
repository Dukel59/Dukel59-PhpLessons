<?php

//Определить по восточному календарю кто Вы по знаку зодиака без использования конструкции if и массивов.

$year = rand(1900, 2043);
$zodiacSing = match (($year - 4) % 12) {
    0 => "Крыса",
    1 => "Бык",
    2 => "Тигр",
    3 => "Кролик",
    4 => "Дракон",
    5 => "Змея",
    6 => "Лошадь",
    7 => "Коза",
    8 => "Обезьяна",
    9 => "Петух",
    10 => "Собака",
    11 => "Cвинья"
};
print_r($year . " - " . $zodiacSing);
