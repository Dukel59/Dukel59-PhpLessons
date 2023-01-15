<?php

print_r(wordForms(rand(1, 9999), "стол", "стола", "столов"));
function wordForms(string $count ,$firstForm, $secondForm, $thirdForm){
    $countInFloat = $count * 0.1;
    $fractionalPartOfOneDigit = bcsub($countInFloat, floor($countInFloat),1);

    $countInFloatWithTwoDigits = $count * 0.01;
    $fractionalPartOfTwoDigit = bcsub($countInFloatWithTwoDigits, floor($countInFloatWithTwoDigits),2);

    if($fractionalPartOfOneDigit == 0.1 && $fractionalPartOfTwoDigit != 0.11){
        return $count . " " . $firstForm;
    } else if($fractionalPartOfOneDigit > 0.1 && $fractionalPartOfOneDigit < 0.5){
        if($fractionalPartOfTwoDigit != 0.12 && $fractionalPartOfTwoDigit != 0.13 && $fractionalPartOfTwoDigit != 0.14){
            return $count . " " . $secondForm;
        } else {
            return $count . " " . $thirdForm;
        }
    } else{
        return $count . " " . $thirdForm;
    }
}