<?php

namespace App\Traits;

trait Abbreviable
{
    protected $abbreviation;

    public function setAbbreviation(string $abbreviation): self
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

}