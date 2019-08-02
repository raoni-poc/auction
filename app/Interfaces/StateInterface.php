<?php

namespace App\Interfaces;

interface StateInterface
{
    public function setCountry(CountryInterface $country): void;

    public function getCountry(): CountryInterface;
}