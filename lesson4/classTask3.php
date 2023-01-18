<?php

//Задание, на вход принимается массив содержащий имя и фамилию и отчество
//и дату принятия на работу, переделать в массив в котором будет выводиться полное ФИО + дата принятия на работу. (6)

$users = [
    [
        'first_name' => 'Андрей',
        'last_name' => 'Иванов',
        'patronymic' => 'Михайлович',
        'hired_at' => '20 Апреля 2012'
    ],
    [
        'first_name' => 'Сергей',
        'last_name' => 'Мирончук',
        'patronymic' => 'Андреевич',
        'hired_at' => '12 Мая 2020'
    ],
    [
        'first_name' => 'Андрей',
        'last_name' => 'Иванов',
        'patronymic' => 'Михайлович',
        'hired_at' => '3 Август 2022'
    ]
];

print_r(array_map('usersData', $users));
function usersData($item): string
{
    return "ФИО: {$item['last_name']} {$item['first_name']} {$item['patronymic']}. Принят на работу: {$item['hired_at']}.";
}