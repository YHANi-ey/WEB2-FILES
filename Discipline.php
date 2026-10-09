<?php

namespace University;

class Discipline
{
    private string $code;
    private string $name;
    private int $units;
    private array $disciplines = [];

    public function __construct(string $code = "", string $name = "", int $units = 3)
    {
        $this->code = $code;
        $this->name = $name;
        $this->units = $units;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setUnits(int $units): self
    {
        $this->units = $units;
        return $this;
    }

    public function addDiscipline(Discipline $discipline): self
    {
        $this->disciplines[] = $discipline;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUnits(): int
    {
        return $this->units;
    }

    public function getDisciplines(): array
    {
        return $this->disciplines;
    }
}