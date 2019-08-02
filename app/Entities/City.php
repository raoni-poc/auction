<?php
declare(strict_types=1);

namespace App\Entities;


use App\Interfaces\CityInterface;
use App\Interfaces\StateInterface;
use App\Traits\Nameable;

class City extends Entity implements CityInterface
{
    use Nameable;

    protected $state;

    public function __construct(
        int $id,
        \DateTimeInterface $createdAt,
        \DateTimeInterface $updatedAt,
        StateInterface $state,
        string $name
    )
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
        $this->setState($state);
        $this->setName($name);
    }

    public function setState(StateInterface $state): void
    {
        $this->state = $state;
    }

    public function getState(): StateInterface
    {
        return $this->state;
    }
}