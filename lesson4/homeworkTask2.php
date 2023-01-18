<?php

//Ввести строку а среди нее разные цифры, найти сумму цифр в этой строке (без использования цикла)
//и сколько раз были найдены цифры.

$string = 'Hello 34 fdgfdg 45 fg 55hhhg556';
$digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$charArray = str_split($string);

print_r(digitInString($charArray, $digits));
function digitInString($array, $digits)
{
    $result = array_intersect($array, $digits);
    $countDigit = count($result);
    $sumDigits = array_sum($result);
    return "Количество цифр - {$countDigit}. Их сумма - {$sumDigits}";
}