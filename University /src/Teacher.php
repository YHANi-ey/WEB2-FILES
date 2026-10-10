<?php

namespace University;

class Teacher
{
    private string $id;
    private string $name;
    private string $department;

    public function __construct(string $id = "", string $name = "", string $department = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
    }

    public function getId(): string { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getDepartment(): string { return $this->department; }
}
