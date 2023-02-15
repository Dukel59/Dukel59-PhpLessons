<?php

namespace task_2;

interface IPizzaBuilder
{
    public function reset();
    public function setSize(string $size);
    public function setDough(string $dough);
    public function setSauce(string $sauce);
    public function setHam(bool $ham);
    public function setMushrooms(bool $mushrooms);
    public function setPickles(bool $pickles);
    public function setCheese(bool $cheese, int $count);
    public function setShrimp(bool $shrimp);
    public function setBasil(bool $basil);
    public function setPork(bool $pork);
    public function setOnion(bool $onion);
    public function setSalami(bool $salami);
    public function setPepperoni(bool $pepperoni);
    public function setOlives(bool $olives);
    public function setChicken(bool $chicken);
    public function setTomatoes(bool $tomatoes);
    public function setPineapples(bool $pineapples);
    public function setGarlic(bool $garlic);
}