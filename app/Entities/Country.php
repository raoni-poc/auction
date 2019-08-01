<?php
declare(strict_types=true);

namespace App\Entities;

use App\Interfaces\AbbreviableInterface;
use App\Interfaces\NameableInterface;
use App\Traits\Abbreviable;
use App\Traits\Nameable;

class Country extends Entity implements NameableInterface, AbbreviableInterface
{
    use Nameable, Abbreviable;
}