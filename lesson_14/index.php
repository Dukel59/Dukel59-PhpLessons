<?php

require_once "Student.php";
require_once "StudentHandler.php";

use \lesson_14\StudentHandler;
use \lesson_14\Student;

$connection = new StudentHandler();

print_r($connection->deleteStudent(18));
