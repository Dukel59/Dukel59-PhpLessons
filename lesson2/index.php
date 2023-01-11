<?php
//task 1
//$degr = $argv[1];
//if ($degr >= 0 && $degr <= 360) {
//    $hours = $degr / 30;
//    print_r((int)$hours);
//} else {
//    print_r("Некорректный ввод");
//}
//
//task 2
//$minute = $argv[1];
//if ($minute >= 0 && $minute <= 60) {
//    if ($minute <= 15) {
//        print_r("Первая четверть часа");
//    } else if ($minute > 15 && $minute <= 30) {
//        print_r("Вторая четверть часа");
//    } else if ($minute > 30 && $minute <= 45) {
//        print_r("Третья четверть часа");
//    } else {
//        print_r("Четвертая четверть часа");
//    }
//} else {
//    print_r("Некорректный ввод");
//}
//
//task 3
//$number = pow(2, 9);
//if ($number % 3 == 0) {
//    print_r("Результат деления" . $number . "на 3 = " . $number / 3);
//} else {
//    print_r("Число " . $number . " не кратно 3");
//}
//
//task 4
//$month = $argv[1];
//if ($month >= 1 && $month <= 12) {
//    if ($month >= 3 && $month <= 5) {
//        print_r("Весна");
//    } else if ($month >= 6 && $month <= 8) {
//        print_r("Лето");
//    } else if ($month >= 9 && $month <= 11) {
//        print_r("Осень");
//    } else {
//        print_r("Зима");
//    }
//} else {
//    print_r("Некорректный ввод");
//}
//
//task 5
//$day = rand(1, 31);
//if ($day >= 1 && $day <= 10) {
//    print_r("День " . $day . ": Первая декада");
//} else if ($day >= 10 && $day <= 20) {
//    print_r("День " . $day . ": Вторая декада");
//} else {
//    print_r("День " . $day . ": Третья декада");
//}
//
//task 6
//$number = pow(3, 6);
//if ($number % 5 == 0) {
//    print_r("Результат деления" . $number . "на 5 = " . $number / 5);
//} else {
//    print_r("Число " . $number . " не кратно 5");
//}
//
//task 7
$year = $argv[1];
if (is_numeric($year)) {
    if ($year <= 45) {
        $year % 3 == 0 ? print_r($year . " год високосный") : print_r($year . " год не високосный");
    } else {
        if ($year % 4 == 0) {
            if ($year % 100 == 0 && $year % 400 != 0) {
                print_r($year . " год не високосный");
            } else {
                print_r($year . " год високосный");
            }
        } else {
            print_r($year . " год високосный");
        }
    }
} else {
    print_r("Некорректный ввод");
}
