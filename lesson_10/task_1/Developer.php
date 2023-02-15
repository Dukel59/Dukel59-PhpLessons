<?php

class Developer extends People
{

    public function greeting()
    {
        print_r("Hello, my name is " . $this->getName() . " " . $this->getLastName() . " and I'm developer");
    }
}