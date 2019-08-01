<?php

namespace App\Interfaces;


interface RouteInterface
{
    public function setOrigin(AddressInterface $origin): void;

    public function setDestination(AddressInterface $destination): void;

    public function getOrigin(): AddressInterface;

    public function getDestination(): AddressInterface;
}