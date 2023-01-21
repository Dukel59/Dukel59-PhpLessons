<?php

function generatePassword($length = 8, $shouldContainsCapitalSymbol = false, $shouldContainsSpecialSymbol = false)
{
    $strPass = "";
    $lowerSymbols = "abcdefghijklmnopqrstuvwxyz";
    $specialSymbols = "!@#$%^&*()_-=+:;{}[]?/,.<>\\";
    $capitalSymbols = strtoupper($lowerSymbols);

    for ($i = 0; $i < $length; $i++) {
        $strPass .= $lowerSymbols[rand(0, strlen($lowerSymbols) - 1)];
    }
    if ($shouldContainsCapitalSymbol) {
        includesSomeSymbols($strPass, $capitalSymbols);
    }
    if ($shouldContainsSpecialSymbol) {
        includesSomeSymbols($strPass, $specialSymbols);
    }
    return $strPass;
}

function includesSomeSymbols(&$string, $symbolsString)
{
    $countCharReplace = rand(1, 3);
    for ($i = 0; $i < $countCharReplace; $i++) {
        $index = rand(0, strlen($string) - 1);
        if (!ctype_lower($string[$index])) {
            $i--;
        } else {
            $string[$index] = $symbolsString[rand(0, strlen($symbolsString) - 1)];
        }
    }
}