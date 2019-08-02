<?php
declare(strict_types=1);

namespace App\Entities;

use App\Interfaces\AddressInterface;
use App\Interfaces\RouteInterface;
use DateTimeInterface;

class Route extends Entity implements RouteInterface
{
    private $origin;
    private $destination;

    public function __construct(
        int $id,
        DateTimeInterface $createdAt,
        DateTimeInterface $updatedAt,
        AddressInterface $origin,
        AddressInterface $destination
    )
    {
        $this->setId($id);
        $this->setDestination($destination);
        $this->setOrigin($origin);
        $this->setUpdatedAt($updatedAt);
        $this->setCreatedAt($createdAt);
    }

    public function getOrigin(): AddressInterface
    {
        return $this->origin;
    }

    public function getDestination(): AddressInterface
    {
        return $this->destination;
    }

    public function setOrigin(AddressInterface $address): void
    {
        $this->origin = $address;
    }

    public function setDestination(AddressInterface $address): void
    {
        $this->destination = $address;
    }
}