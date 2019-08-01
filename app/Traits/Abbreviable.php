<?php

namespace App\Traits;

trait Abbreviable
{
    protected $abbreviation;

    public function setAbbreviation(string $abbreviation): void
    {
        $this->abbreviation = $abbreviation;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

}