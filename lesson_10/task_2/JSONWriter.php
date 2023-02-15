<?php

namespace task_2;

class JSONWriter implements IWriter
{

    public function contentPreparation(array $content): string
    {
        return json_encode($content);
    }

    public function writeToFile(string $fileName, string $content)
    {
        file_put_contents($fileName . ".json", $content);
    }

    public function readFromFile(string $fileName)
    {
        return json_decode(file_get_contents($fileName . ".json"), true);
    }
}