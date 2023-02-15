<?php

class Teacher extends People
{
    public function greeting()
    {
        print_r("Добрый день, я " . $this->getName() . " " . $this->getLastName() . " и я работаю учителем");
    }
}