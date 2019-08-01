<?php
declare(strict_types=true);

namespace App\Entities;

use App\Traits\Timestampable;
use DateTimeInterface;

class Route extends Entity
{
    private $origin;
    private $destination;

    public function __construct(
        Address $origin,
        Address $destination,
        DateTimeInterface $updatedAt,
        DateTimeInterface $createdAt)
    {
        $this->setDestination($destination);
        $this->setOrigin($origin);
        $this->setUpdatedAt($updatedAt);
        $this->setCreatedAt($createdAt);
    }

    public function getOrigin(): Address
    {
        return $this->origin;
    }

    public function getDestination(): Address
    {
        return $this->destination;
    }

    public function setOrigin(Address $address)
    {
        $this->origin = $address;
    }

    public function setDestination(Address $address)
    {
        $this->destination = $address;
    }
}