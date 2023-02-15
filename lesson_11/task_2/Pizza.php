<?php

namespace task_2;

class Pizza
{
    CONST SMALL_SIZE = 25;
    CONST MEDIUM_SIZE = 30;
    CONST BIG_SIZE = 35;

    CONST THIN_PIZZA_DOUGH = "тонкое";
    CONST THICK_PIZZA_DOUGH = "толстое";
    CONST REGULAR_PIZZA_DOUGH = "обычное";
    public int $size;
    public string $dough;
    public string $sauce;
    public bool $ham;
    public bool $mushrooms;
    public bool $pickles;
    public bool $cheese;
    public int $count;
    public bool $shrimp;
    public bool $basil;
    public bool $pork;
    public bool $onion;
    public bool $salami;
    public bool $pepperoni;
    public bool $olives;
    public bool $chicken;
    public bool $tomatoes;
    public bool $pineapples;
    public bool $garlic;
    public bool $jalapeno;
    public bool $bacon;
}