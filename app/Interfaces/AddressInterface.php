<?php

namespace App\Interfaces;

Interface AddressInterface
{
    public function setCity(CityInterface $city): void;

    public function setZipCode(string $zipCode): void;

    public function setNumber(string $number): void;

    public function setNeighborhood(string $neighborhood): void;

    public function setLineOne(string $lineOne): void;

    public function setLineTwo(string $lineTwo): void;

    public function setObservation(string $observation): void;

    public function getCity(): CityInterface;

    public function getZipCode(): string;

    public function getNumber(): string;

    public function getNeighborhood(): string;

    public function getLineOne(): string;

    public function getLineTwo(): string;

    public function getObservation(): string;
}