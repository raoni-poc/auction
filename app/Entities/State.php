<?php

namespace App\Entities;

use App\Interfaces\TimestampableInterface;
use App\Traits\Timestampable;
use DateTimeInterface;

class State implements TimestampableInterface
{
    use Timestampable;

    private $name;
    private $abbreviation;

    public function construct(
        string $name,
        string $abbreviation,
        DateTimeInterface $createdAt,
        DateTimeInterface $updatedAt)
    {
        $this->setName($name);
        $this->setAbbreviation($abbreviation);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
    }

    public function setAbbreviation($abbreviation): self
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }
}