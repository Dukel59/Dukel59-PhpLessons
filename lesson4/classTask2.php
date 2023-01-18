<?php

$translates = [
    'en' => [
        'teachers' => 'Teachers',
        'personal_account' => 'My account',
        'contact_us' => 'Contact us'
    ],
    'ru' => [
        'teachers' => 'Преподователи',
        'personal_account' => 'Личный кабинет'
    ]
];

$lang = $argv[1];
$key = $argv[2];

if (in_array($lang, array_keys($translates))) {
    if (key_exists($key, $translates[$lang])) {
        print_r($translates[$lang][$key]);
    } else {
        print_r("Перевода нет в словаре");
    }
} else {
    print_r("Языка нет в словаре");
}