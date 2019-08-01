<?php
declare(strict_types=true);

namespace App\Entities;

use App\Interfaces\AbbreviableInterface;
use App\Interfaces\NameableInterface;
use App\Interfaces\TimestampableInterface;
use App\Traits\Abbreviable;
use App\Traits\Nameable;
use App\Traits\Timestampable;
use DateTimeInterface;

class State extends Entity implements NameableInterface, AbbreviableInterface
{
    use Nameable, Abbreviable;

    public function construct(
        string $name,
        string $abbreviation,
        DateTimeInterface $createdAt,
        DateTimeInterface $updatedAt)
    {
        $this->setName($name);
        $this->setAbbreviation($abbreviation);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
    }
}