<?php
declare(strict_types=1);

namespace App\Entities;

use App\Interfaces\AddressInterface;
use App\Interfaces\CityInterface;

class Address extends Entity implements AddressInterface
{
    protected $city;
    protected $number;
    protected $zipcode;
    protected $neighborhood;
    protected $lineOne;
    protected $lineTwo;
    protected $observation;

    public function __construct(
        int $id,
        \DateTimeInterface $createdAt,
        \DateTimeInterface $updatedAt,
        CityInterface $city,
        string $number,
        string $zipCode,
        string $neighborhood,
        string $lineOne,
        string $lineTwo,
        string $observation
    )
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
        $this->setCity($city);
        $this->setNumber($number);
        $this->setZipCode($zipCode);
        $this->setNeighborhood($neighborhood);
        $this->setLineOne($lineOne);
        $this->setLineTwo($lineTwo);
        $this->setObservation($observation);
    }

    public function setCity(CityInterface $city): void
    {
        $this->city = $city;
    }

    public function setZipCode(string $zipCode): void
    {
        $this->zipcode = $zipCode;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function setNeighborhood(string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    public function setLineOne(string $lineOne): void
    {
        $this->lineOne = $lineOne;
    }

    public function setLineTwo(string $lineTwo): void
    {
        $this->lineTwo = $lineTwo;
    }

    public function setObservation(string $observation): void
    {
        $this->observation = $observation;
    }

    public function getCity(): CityInterface
    {
        return $this->city;
    }

    public function getZipCode(): string
    {
        return $this->zipcode;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getLineOne(): string
    {
        return $this->lineOne;
    }

    public function getLineTwo(): string
    {
        return $this->lineTwo;
    }

    public function getObservation(): string
    {
        return $this->observation;
    }
}