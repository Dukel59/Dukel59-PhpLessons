<?php
$count = rand(1,9999);
print_r("В наличии " . $count . " " . wordForms($count, "товар", "товара", "товаров"));
function wordForms(string $count ,$firstForm, $secondForm, $thirdForm){
    $remainderOfDivisionByOneHundred = $count % 100;
    $remainderOfDivisionByTen = $count % 10;

    if($remainderOfDivisionByOneHundred > 10 && $remainderOfDivisionByOneHundred < 20){
        return $thirdForm;
    } else if($remainderOfDivisionByTen > 1 && $remainderOfDivisionByTen < 5){
        return $secondForm;
    } else if($remainderOfDivisionByTen == 1){
        return $firstForm;
    } else{
        return $thirdForm;
    }
}