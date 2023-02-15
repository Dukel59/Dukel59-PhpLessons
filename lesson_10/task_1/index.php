<?php

require_once 'People.php';
require_once 'Developer.php';
require_once 'Student.php';
require_once 'Teacher.php';

$student = new Student("Саша", "Захаревич");
$teacher = new Teacher("Иван", "Иванов");
$developer = new Developer("John", "Doe");

$student->greeting();
print_r(PHP_EOL);
$teacher->greeting();
print_r(PHP_EOL);
$developer->greeting();
print_r(PHP_EOL);


