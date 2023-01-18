<?php

$sportCarBrands = ['ferrari', 'porsche', 'lamborgini'];
$germanCarBrands = ['bmw', 'audi', 'mercedes', 'porsche'];

$result = array_intersect($sportCarBrands, $germanCarBrands);
print_r(array_values($result));