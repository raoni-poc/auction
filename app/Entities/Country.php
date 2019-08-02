<?php
declare(strict_types=1);

namespace App\Entities;

use App\Interfaces\AbbreviableInterface;
use App\Interfaces\CountryInterface;
use App\Interfaces\NameableInterface;
use App\Traits\Abbreviable;
use App\Traits\Nameable;

class Country extends Entity implements NameableInterface, AbbreviableInterface, CountryInterface
{
    use Nameable, Abbreviable;
}