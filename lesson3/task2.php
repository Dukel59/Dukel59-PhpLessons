<?php

$numberOfYear = $argv[1];
if (isLeapYear($numberOfYear)){
    print_r($numberOfYear . " - високосный");
} else {
    print_r($numberOfYear . " - не високосный");
}
function isLeapYear(&$year){
    if(!is_numeric($year)){
        $year = date('o');
    }
    return date('L', mktime(0,0,0,1,1, $year));
}
