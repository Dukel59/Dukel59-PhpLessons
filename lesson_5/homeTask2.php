<?php

// вывести среднюю зарплату отделов

$departments = [
    'developers' => [
        [
            'name' => 'nik',
            'position' => 'developer',
            'salary' => 900
        ],
        [
            'name' => 'sergey',
            'position' => 'developer',
            'salary' => 1200
        ],
        [
            'name' => 'andrey',
            'position' => 'developer',
            'salary' => 1400
        ]
    ],
    'managers' => [
        [
            'name' => 'yulia',
            'position' => 'manager',
            'salary' => 1150
        ],
        [
            'name' => 'darya',
            'position' => 'manager',
            'salary' => 1100
        ],
        [
            'name' => 'viktoria',
            'position' => 'manager',
            'salary' => 1000
        ]
    ],
];

print_r("AVG salary developers : " . calcAvgSalary($departments['developers']) . PHP_EOL);
print_r("AVG salary managers : " . calcAvgSalary($departments['managers']));
function calcAvgSalary($array): float
{
    $result = 0;
    foreach ($array as $item) {
        $result += $item['salary'];
    }
    return $result / count($array);
}