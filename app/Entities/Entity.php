<?php
declare(strict_types=true);

namespace App\Entities;

use App\Interfaces\IdentifiableInterface;
use App\Interfaces\TimestampableInterface;
use App\Traits\Identifiable;
use App\Traits\Timestampable;

abstract class Entity implements IdentifiableInterface, TimestampableInterface
{
    use Identifiable, Timestampable;
}