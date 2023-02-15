<?php

abstract class People
{
    private string $name;
    private string $lastName;

    public function __construct(string $name, string $lastName)
    {

        $this->name = $name;
        $this->lastName = $lastName;
    }

    abstract public function greeting();

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
}