<?php
for($i = 1; $i <10; $i++){
    for($j = 1; $j <10; $j++){
        $sum = $i * $j;
        $endString = strlen((string)$sum) == 1 ? '  | ' : ' | ';
        print_r("{$i} * {$j} = {$sum}{$endString}");
    }
    print_r(PHP_EOL);
}