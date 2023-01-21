<?php

//Задание убрать все повторяющиеся символы из строки и вывести их количество.

$string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$duplicateSymbols = [];
$newString = '';
$countDuplicateSymbols = 0;

$stringArray = str_split($string);

foreach ($stringArray as $symbol) {
    if (!in_array($symbol, $duplicateSymbols)) {
        $duplicateSymbols[] = $symbol;
        $newString .= $symbol;
    } else {
        $countDuplicateSymbols++;
    }
}

print_r("Count duplicate symbols: {$countDuplicateSymbols}" . PHP_EOL . "New string: {$newString}");
