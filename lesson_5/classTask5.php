<?php

$materials = [
    [
        'available_date' => '10.01.2023 15.00',
        'name' => 'lesson',
    ],
    [
        'available_date' => '20.01.2023 15.00',
        'name' => 'video',
    ],
    [
        'available_date' => '10.01.2022 15.00',
        'name' => 'lesson',
    ],
];

// пройтись циклом по массиву
// time() сравнить с временем материала, strtotime и в массив доступных лекций добавить нашу лекцию
$available_courses = [];

foreach ($materials as $item){
    if(isAvailable($item['available_date'])){
        array_push($available_courses, $item);
    }
}
print_r($available_courses);
function isAvailable($date){
    return time() > strtotime($date);
}