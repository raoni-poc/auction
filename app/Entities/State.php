<?php
declare(strict_types=1);

namespace App\Entities;

use App\Interfaces\AbbreviableInterface;
use App\Interfaces\CountryInterface;
use App\Interfaces\NameableInterface;
use App\Interfaces\StateInterface;
use App\Traits\Abbreviable;
use App\Traits\Nameable;
use DateTimeInterface;

class State extends Entity implements NameableInterface, AbbreviableInterface, StateInterface
{
    use Nameable, Abbreviable;

    protected $country;

    public function __construct(
        int $id,
        DateTimeInterface $createdAt,
        DateTimeInterface $updatedAt,
        CountryInterface $country,
        string $name,
        string $abbreviation
    )
    {
        $this->setId($id);
        $this->setName($name);
        $this->setAbbreviation($abbreviation);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
        $this->setCountry($country);
    }

    public function setCountry(CountryInterface $country): void
    {
        $this->country = $country;
    }

    public function getCountry(): CountryInterface
    {
        return $this->country;
    }
}