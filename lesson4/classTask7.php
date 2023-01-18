<?php

//Задание, реализовать валидацию email
//1) email должен содержать @ 2) до @ должно быть не менее 6 символов 3) должен содержать в конце .com .ru .net (11)

$mail = trim($argv[1]);
print_r(validMail($mail));
function validMail($mail)
{
    if (!str_contains($mail, "@")) {
        return "отсутствует знак \"@\"";
    }
    $beforeAt = strstr($mail, "@", true);
    if (strlen($beforeAt) < 6) {
        return "E-mail короче 6 символов";
    }
    if (!str_ends_with($mail, ".com") && !str_ends_with($mail, ".ru") && !str_ends_with($mail, ".net")) {
        return "E-mail не содержит домен(.com/.ru/.net)";
    }
    return "E-mail валидный";
}