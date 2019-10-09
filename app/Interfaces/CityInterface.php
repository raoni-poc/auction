<?php


namespace App\Interfaces;


interface CityInterface
{
    public function setState(StateInterface $state): void;

    public function getState(): StateInterface;
}
