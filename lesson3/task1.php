<?php

$number = rand(0, 9999);
isEven($number) ? print_r($number . " is even") : print_r($number . " is odd");

function isEven($number){
    if($number % 2 == 0){
        return true;
    } else {
        return false;
    }
}