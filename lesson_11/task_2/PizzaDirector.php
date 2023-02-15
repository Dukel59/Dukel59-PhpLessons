<?php

use task_2\PizzaBuilder;

class PizzaDirector
{
    private PizzaBuilder $builder;

    public function __construct(PizzaBuilder $builder)
    {
        $this->builder = $builder;
    }
    public function getBuilder(): PizzaBuilder
    {
        return $this->builder;
    }
    public function setBuilder(PizzaBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function pepperonyPizza(int $size, string $dough){
        $this->builder->setSize($size);
        $this->builder->setDough($dough);
        $this->builder->setPepperoni(true);
        $this->builder->setCheese(true, 1);
        $this->builder->setSauce('BBQ');
        $this->builder->getPizza();
    }

    public function hawaiianPizza(int $size, string $dough){
        $this->builder->setSize($size);
        $this->builder->setDough($dough);
        $this->builder->setChicken(true);
        $this->builder->setCheese(true, 1);
        $this->builder->setPineapples(true);
        $this->builder->setHam(true);
        $this->builder->setSauce('кисло-сладкий');
        $this->builder->getPizza();
    }

    public function margaritaPizza(int $size, string $dough){
        $this->builder->setSize($size);
        $this->builder->setDough($dough);
        $this->builder->setCheese(true, 2);
        $this->builder->setSauce('сырный');
        $this->builder->getPizza();
    }

    public function spicyPizza(int $size, string $dough){
        $this->builder->setSize($size);
        $this->builder->setDough($dough);
        $this->builder->setPepperoni(true);
        $this->builder->setJalapeno(true);
        $this->builder->setCheese(true, 1);
        $this->builder->setTomatoes(true);
        $this->builder->setBacon(true);
        $this->builder->setSauce('острый');
        $this->builder->getPizza();
    }
}