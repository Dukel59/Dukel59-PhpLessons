<?php
require_once('generatePassword.php');

$users = [
    [
        'name' => 'nik',
        'password' => 'DcScg?Fc',
        'changePassDate' => '22.03.2022'
    ],
    [
        'name' => 'sergey',
        'password' => 'vy4w.Oz:',
        'changePassDate' => '20.01.2023'
    ],
    [
        'name' => 'andrey',
        'password' => 'PSm8qy:U',
        'changePassDate' => '31.12.2022'
    ],
    [
        'name' => 'yulia',
        'password' => 's!ra.P$u',
        'changePassDate' => '22.09.2022'
    ],
    [
        'name' => 'darya',
        'password' => '.4bxqSd;',
        'changePassDate' => '14.05.2021'
    ],
    [
        'name' => 'viktoria',
        'password' => 'b@DvjAna',
        'changePassDate' => '01.01.2023'
    ]
];

//Задание, имеем массив пользователей, и информацию о том, когда он последний раз менял пароль,
//те кто последние три месяца не меняли пароль нужно его сгенерировать и обновить (11)
foreach ($users as &$user) {
    if (isThePassValid($user)) {
        $user['password'] = generatePassword(shouldContainsCapitalSymbol: true, shouldContainsSpecialSymbol: true);
        $user['changePassDate'] = date('d.m.Y', time());
    }
}
print_r($users);
function isThePassValid($user): bool
{
    $seconds = abs(time() - strtotime($user['changePassDate']));
    $days = round($seconds / 86400);
    return $days > 90;
}