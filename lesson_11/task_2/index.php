<?php

use task_2\Pizza;
use task_2\PizzaBuilder;

require_once "IPizzaBuilder.php";
require_once "PizzaBuilder.php";
require_once "PizzaDirector.php";
require_once "Pizza.php";

$builder = new PizzaBuilder();
$pizza = $builder
    ->setSize(Pizza::SMALL_SIZE)
    ->setDough(Pizza::THIN_PIZZA_DOUGH)
    ->setSauce('сырный')
    ->setMushrooms(false)
    ->setTomatoes(true)
    ->setOlives(false)
    ->setPineapples(true)
    ->setCheese(true, 2)
    ->getPizza();

print_r($pizza);
print_r(PHP_EOL);

$director = new PizzaDirector($builder);
$director->hawaiianPizza(Pizza::MEDIUM_SIZE, Pizza::REGULAR_PIZZA_DOUGH);
print_r(PHP_EOL);
$director->spicyPizza(Pizza::SMALL_SIZE, Pizza::THICK_PIZZA_DOUGH);
print_r(PHP_EOL);