<?php

require_once 'Config.php';

$config = Config::getInstance();
$login = "login123";
$config->setValue("login", $login);

$config1 = Config::getInstance();
if($login == $config->getValue("login")){
    print_r("Singleton work");
}