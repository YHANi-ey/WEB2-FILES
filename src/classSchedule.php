<?php

namespace University;

class ClassSchedule
{
    private string $days;
    private string $time;
    private string $room;

    public function __construct(string $days = "", string $time = "", string $room = "")
    {
        $this->days = $days;
        $this->time = $time;
        $this->room = $room;
    }

    public function setDays(string $days): self
    {
        $this->days = $days;
        return $this;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;
        return $this;
    }

    public function setRoom(string $room): self
    {
        $this->room = $room;
        return $this;
    }

    public function getDays(): string
    {
        return $this->days;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function getRoom(): string
    {
        return $this->room;
    }
}
