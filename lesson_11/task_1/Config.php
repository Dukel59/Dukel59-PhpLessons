<?php

class Config
{
    private array $array = [];
    private string $fileName;

    private static $instance = null;
    protected function __construct()
    {
    }
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function getValue(string $key): string
    {
        return $this->array[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->array[$key] = $value;
    }

}