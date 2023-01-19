<?php

print_r(generatePassword());
function generatePassword($length = 8){

    $strPass = "";
    for($i = 0; $i<$length; $i++){
        $strPass .= chr(rand(33, 122));
    }
    return $strPass;
}