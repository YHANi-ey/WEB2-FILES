<?php

namespace University;

class School
{
    private string $name;
    private string $location;

    public function __construct(string $name, string $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): string
    {
        return $this->location;
    }
}