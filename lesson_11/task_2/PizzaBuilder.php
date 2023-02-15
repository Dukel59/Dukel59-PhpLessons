<?php

namespace task_2;

class PizzaBuilder implements IPizzaBuilder
{
    private Pizza $pizza;
    public function __construct()
    {
        $this->reset();
    }
    public function reset(){
        $this->pizza = new Pizza();
    }
    public function getPizza(): Pizza
    {
        $result = $this->pizza;
        $this->reset();
        return $result;
    }
    public function setSize($size){
        if ($size == 25) {
            $this->pizza->size = $size;
            print_r('Маленькая пиица. Размер пиццы ' . $size . ' см.' . PHP_EOL );
        } elseif ($size == 30){
            $this->pizza->size = $size;
            print_r('Средняя пиица. Размер пиццы ' . $size . ' см.' . PHP_EOL );
        } elseif ($size == 35) {
            $this->pizza->size = $size;
            print_r('Большая пиица. Размер пиццы ' . $size . ' см.' . PHP_EOL );
        } else {
            print_r('Пожалуйста, выберите из существующих размеров: 25 см, 30см, 35см.');
        }
        return $this;
    }
    public function setDough(string $dough)
    {
        $this->pizza->dough = $dough;
        print_r('В пиццу нужно добавить: '. $dough . ' тесто.' . PHP_EOL);
        return $this;
    }

    public function setSauce(string $sauce)
    {
        $this->pizza->sauce = $sauce;
        print_r($sauce . ' соус.' . PHP_EOL);
        return $this;
    }

    public function setHam(bool $ham)
    {
        $this->pizza->ham = $ham;
        print_r( $ham ? 'Ветчину.'. PHP_EOL : 'Не добавлять ветчину.'. PHP_EOL);
        return $this;
    }

    public function setMushrooms(bool $mushrooms)
    {
        $this->pizza->mushrooms = $mushrooms;
        print_r($mushrooms ? 'Грибы.' . PHP_EOL: 'Не добавлять грибы.' . PHP_EOL);
        return $this;
    }

    public function setPickles(bool $pickles)
    {
        $this->pizza->pickles = $pickles;
        print_r($pickles ? 'Соленья.' . PHP_EOL : 'Не добавлять соленья.' . PHP_EOL);
        return $this;
    }

    public function setCheese(bool $cheese, int $count)
    {
        $this->pizza->cheese = $cheese;
        if ($count == 1) {
            $this->pizza->count = $count;
            print_r('Сыр ' . PHP_EOL);
        } elseif ($count == 2) {
            $this->pizza->count = $count;
            print_r(  'Дабл сыр.' . PHP_EOL);
        } elseif($count == 0){
            print_r('Сыр не добавлен');
        } else {
            print_r('Не рекомендуем добавлять больше двух порций сыра. Пожалуйста, сделайте другой выбор.' . PHP_EOL);
        }
        return $this;
    }

    public function setShrimp(bool $shrimp)
    {
        $this->pizza->shrimp = $shrimp;
        print_r($shrimp ? 'Креветки.' . PHP_EOL : 'Не добавлять креветки.'. PHP_EOL);
        return $this;
    }

    public function setBasil(bool $basil)
    {
        $this->pizza->basil = $basil;
        print_r($basil ? 'Базилик.' . PHP_EOL : 'Не добавлять базилик.' . PHP_EOL);
        return $this;
    }

    public function setPork(bool $pork)
    {
        $this->pizza->pork = $pork;
        print_r( $pork ? 'Свинину.' . PHP_EOL : 'Не добавлять свинину.' . PHP_EOL);
        return $this;
    }

    public function setOnion(bool $onion)
    {
        $this->pizza->onion = $onion;
        print_r($onion ? 'Лук.' . PHP_EOL : 'Не добавлять лук.' . PHP_EOL);
        return $this;
    }

    public function setSalami(bool $salami)
    {
        $this->pizza->salami = $salami;
        print_r($salami ? 'Салями.' . PHP_EOL : 'Не добавлять салями.' . PHP_EOL);
        return $this;
    }

    public function setPepperoni(bool $pepperoni)
    {
        $this->pizza->pepperoni = $pepperoni;
        print_r($pepperoni ? 'Пеперони.' . PHP_EOL : 'Не добавлять пеперони.'. PHP_EOL);
        return $this;
    }

    public function setOlives(bool $olives)
    {
        $this->pizza->olives = $olives;
        print_r($olives ? 'Оливки.' . PHP_EOL : 'Не добавлять оливки' . PHP_EOL);
        return $this;
    }

    public function setChicken(bool $chicken)
    {
        $this->pizza->chicken = $chicken;
        print_r($chicken ? 'Курицу.' . PHP_EOL : 'Не добавлять курицу.' . PHP_EOL);
        return $this;
    }

    public function setTomatoes(bool $tomatoes)
    {
        $this->pizza->tomatoes = $tomatoes;
        print_r($tomatoes ? 'Помидоры.' . PHP_EOL : 'Не добавлять помидоры' . PHP_EOL);
        return $this;
    }

    public function setPineapples(bool $pineapples)
    {
        $this->pizza->pineapples = $pineapples;
        print_r($pineapples ? 'Ананасы.' . PHP_EOL : 'Не добавлять ананасы.' . PHP_EOL);
        return $this;
    }

    public function setGarlic(bool $garlic)
    {
        $this->pizza->garlic = $garlic;
        print_r($garlic ? 'Чеснок.' . PHP_EOL : 'Не добалять чеснок.' . PHP_EOL);
        return $this;
    }
    public function setJalapeno(bool $jalapeno)
    {
        $this->pizza->jalapeno = $jalapeno;
        print_r($jalapeno ? 'Халапеньо.' . PHP_EOL : 'Не добалять халапеньо.' . PHP_EOL);
        return $this;
    }
    public function setBacon(bool $bacon)
    {
        $this->pizza->bacon = $bacon;
        print_r($bacon ? 'Бекон.' . PHP_EOL : 'Не добалять бекон.' . PHP_EOL);
        return $this;
    }


}