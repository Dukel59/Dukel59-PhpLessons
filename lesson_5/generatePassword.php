<?php

print_r(generatePassword(shouldContainsCapitalSymbol: true, shouldContainsSpecialSymbol: true));
function generatePassword($length = 8, $shouldContainsCapitalSymbol = false, $shouldContainsSpecialSymbol = false)
{
    $strPass = "";
    for ($i = 0; $i < $length; $i++) {
        $strPass .= chr(rand(97, 122));
    }
    if ($shouldContainsCapitalSymbol) {
        $charRandomValues = [65, 90];
        includesSomeSymbols($strPass, $charRandomValues);
    }
    if ($shouldContainsSpecialSymbol) {
        $charRandomValues = [33, 64];
        includesSomeSymbols($strPass, $charRandomValues);
    }
    return $strPass;
}

function includesSomeSymbols(&$string, $charRandomValues)
{
    $countCharReplace = rand(1, 3);
    for ($i = 0; $i < $countCharReplace; $i++) {
        $index = rand(0, strlen($string) - 1);
        if (!ctype_lower($string[$index])) {
            $i--;
        } else {
            $string[$index] = chr(rand($charRandomValues[0], $charRandomValues[1]));
        }
    }
}