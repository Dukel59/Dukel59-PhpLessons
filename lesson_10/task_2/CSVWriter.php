<?php

namespace task_2;

class CSVWriter implements IWriter
{

    public function contentPreparation(array $content)
    {
        $keys = array_keys($content[0]);
        $string = implode(",", array_map('ucfirst', $keys)) . PHP_EOL;
        foreach ($content as $item) {
            $string .= $item['name'] . "," . $item['position'] . "," . $item['description'] . PHP_EOL;
        }
        return $string;
    }

    public function writeToFile(string $fileName, string $content)
    {
        file_put_contents($fileName . ".csv", $content);
    }

    public function readFromFile(string $fileName)
    {
        $content = file($fileName . ".csv");
        $keys = [];
        $data = [];

        foreach ($content as $key => $item) {
            if ($key == 0) {
                $keys = explode("," , $item);
            }
        }

        foreach ($content as $key => $item) {
            if ($key >= 1) {
                $values = explode(",", $item);
                $data[] = [
                    $keys[0] => $values[0],
                    $keys[1] => $values[1],
                    $keys[2] => $values[2],
                ];
            }
        }

        return $data;
    }
}