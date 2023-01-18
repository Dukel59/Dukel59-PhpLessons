<?php

//Ввести в консоль название сайта полностью 'http://test.com' , определить является ли сайт защищенным или нет.

$site = strtolower(trim($argv[1]));
print_r($site . " - " . secureSite($site));
function secureSite($site)
{
    if (str_contains($site, "https")) {
        return "защищенный";
    }
    return "незащищенный";
}
