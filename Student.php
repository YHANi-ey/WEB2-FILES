<?php

namespace University;

class Student
{
    private string $studentId;
    private string $name;
    private string $course;

    public function __construct(string $studentId = "", string $name = "", string $course = "")
    {
        $this->studentId = $studentId;
        $this->name = $name;
        $this->course = $course;
    }

    public function setStudentId(string $studentId): self
    {
        $this->studentId = $studentId;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;
        return $this;
    }

    public function getStudentId(): string
    {
        return $this->studentId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCourse(): string
    {
        return $this->course;
    }
}