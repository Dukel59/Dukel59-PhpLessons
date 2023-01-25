<?php

$carNumbers = [
    '1245AB-7',
    'AG4565-7',
    'E095AA-7',
    'A0565B-7',
    '7AVT6695',
    'BABP9956',
    '1525BB-0',
    '7TAX1144',
    '7AGs115',
    'asdg87-5',
    '8455Ac-8'
];
$pattern = '/^([0-9]{4})[A-Z]{2}-[0-7]$|^[A-Z]{2}(\d{4})-[0-7]$|^E(\d{3})[A-Z]{2}-[1-7]$|^[A-Z](\d{4})[A-Z]-[1-7]$|^[1-8][A-Z]{2}T(\d{4})$|^[A-Z]{2}BP(\d{4})$|^[1-7]TAX(\d{4})$/';

foreach ($carNumbers as $number){
    if(preg_match($pattern, $number)){
        print_r($number . " - белорусский номер" . PHP_EOL);
    } else {
        print_r($number . " - не белорусский номер" . PHP_EOL);
    }
}