<?php

// Задание, изменить статус trash у заказов у которых номера не белорусские (7)

$orders = [
    [
        'phone' => '375295560833',
        'id' => 123,
        'status' => 'new'
    ],
    [
        'phone' => '48295560833',
        'id' => 1423,
        'status' => 'new'
    ],
    [
        'phone' => '375335560833',
        'id' => 1263,
        'status' => 'new'
    ],
    [
        'phone' => '375295560833',
        'id' => 1231,
        'status' => 'new'
    ],
];

foreach ($orders as &$order) {
    if (!isAvailable($order['phone'])) {
        $order['status'] = 'trash';
    }
}
print_r($orders);
function isValid($number)
{
    return str_starts_with($number, '375');
}
