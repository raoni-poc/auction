<?php
declare(strict_types=1);

namespace App\Entities;

use App\Interfaces\AbbreviableInterface;
use App\Interfaces\CountryInterface;
use App\Interfaces\NameableInterface;
use App\Traits\Abbreviable;
use App\Traits\Nameable;

class Country extends Entity implements NameableInterface, CountryInterface
{
    use Nameable;

    public function __construct(
        int $id,
        \DateTimeInterface $createdAt,
        \DateTimeInterface $updatedAt,
        string $name
    )
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
        $this->setName($name);
    }
}