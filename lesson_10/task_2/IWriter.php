<?php

namespace task_2;

interface IWriter
{
    public function contentPreparation(array $content);
    public function writeToFile(string $fileName, string $content);
    public function readFromFile(string $fileName);
}