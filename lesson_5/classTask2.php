<?php

$string = "asdhgiuhweng asdg;re";

$symbols = ['e', 'y', 'u', 'i', 'o', 'a'];
$charArray = str_split($string);
$sum = 0;

foreach ($charArray as $array){
    if(in_array($array, $symbols)){
        $sum++;
    }
}
print_r($sum);