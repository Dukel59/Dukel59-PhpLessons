<?php

class Student extends People
{

    public function greeting()
    {
        print_r("Привет, я " . $this->getName() . " " . $this->getLastName() . " и я студент");
    }
}