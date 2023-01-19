<?php

//Ввести строку а среди нее разные цифры, найти сумму цифр в этой строке (без использования цикла)
//и сколько раз были найдены цифры.

$string = 'Hello 34 fdgfdg 45 fg 55hhhg556';
$charArray = str_split($string);

print_r(digitInString($charArray));
function digitInString($array)
{
    $result = array_filter($array, 'is_numeric');
    $countDigit = count($result);
    $sumDigits = array_sum($result);
    return "Количество цифр - {$countDigit}. Их сумма - {$sumDigits}";
}