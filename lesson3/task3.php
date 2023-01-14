<?php

//Задание, магазин работает по будням с 9 - 21, по выходным не работает, ввести дату и определить сколько
// времени осталось до открытия или закрытия или он вовсе не работает

$currentTime = strtotime("10:24:04 9-10-2000");
storeOpeningHours($currentTime);
function storeOpeningHours($time){
    if(date('l', $time) == "Saturday" || date('l', $time) == "Sunday"){
        print_r("Магазин откроется в понедельник в 9 утра");
    } else {
        if(date("G", $time) > 9 && date("G", $time) < 21){
            print_r("Магазин открыт.");
        } else {
            print_r("Магазин закрыт. Время работы с 9 до 21");
        }
    }
}