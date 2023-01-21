<?php

//Задание, реализовать валидацию пароля 1) должен содержать заглавную 2) должен содержать спец символ
// 3) больше 8 символов 4) чтоб имел минимум 1 букву
require_once('generatePassword.php');
for ($i = 0; $i < 100; $i++) {
    $password = generatePassword(9, true, true);

    $lowerSymbols = "abcdefghijklmnopqrstuvwxyz";
    $specialSymbols = "!@#$%^&*()_-=+:;{}[]?/,.<>\\";
    $capitalSymbols = strtoupper($lowerSymbols);

    $isHaveCapitalSymbol = strpbrk($password, $capitalSymbols) != 0;
    $isHaveSpecialSymbol = strpbrk($password, $specialSymbols) != 0;
    $isMoreEightSymbols = strlen($password) > 8;
    $isHaveAnyLetter = strpbrk($password, $lowerSymbols) != 0;

    if ($isHaveCapitalSymbol && $isHaveSpecialSymbol && $isMoreEightSymbols && $isHaveAnyLetter) {
        print_r("{$password} - валидный" . PHP_EOL);
    } else {
        print_r("{$password} - не валидный" . PHP_EOL);
    }
}
