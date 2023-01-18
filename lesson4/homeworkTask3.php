<?php

//Задание, имеется массив разрешенных расширений для файла
// .jpg .jpeg .png .svg ввести название файла в консоль и вывести результат является ли изображение с валидным форматом.

$fileExtensions = ['.jpg', '.jpeg', '.png', '.svg'];

$file = $argv[1];
print_r($file . " - " . fileValid($file, $fileExtensions));

function fileValid($file, $extensions)
{
    $extension = strstr($file, ".");
    if (in_array($extension, $extensions)) {
        return "valid";
    }
    return "invalid";
}