<?php

use task_2\CSVWriter;
use task_2\JSONWriter;

require_once "IWriter.php";
require_once "JSONWriter.php";
require_once "CSVWriter.php";

$content = [
[
"name" => "Alex",
"position" => "Developer",
"description" => "Iamdeveloper"
],
[
"name" => "Nik",
"position" => "Manager",
"description" => "Ilovemyjob"
]
];

$writer = new JSONWriter();
print_r($writer->readFromFile("test"));
$formattedContent = $writer->contentPreparation($content);
$writer->writeToFile("test", $formattedContent);

$writer = new CSVWriter();
$writer->readFromFile("test");
$formattedContent = $writer->contentPreparation($content);
$writer->writeToFile("test", $formattedContent);
