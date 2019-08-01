<?php


namespace App\Interfaces;


use App\Entities\Country;

interface StateInterface
{
    public function setCountry(CountryInterface $country): void;
    public function getCountry(): Country;
}