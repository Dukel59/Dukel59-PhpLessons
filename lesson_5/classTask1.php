<?php
$array = [];
$sum = 0;
for ($i = 0; $i < 10; $i++) {
    array_push($array, rand(-100, 100));
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > 0) {
        $sum += $array[$i];
    }
}
print_r($sum);
