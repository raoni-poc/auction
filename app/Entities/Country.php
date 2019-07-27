<?php


namespace App\Entities;


use App\Interfaces\AbbreviableInterface;
use App\Interfaces\NameableInterface;
use App\Interfaces\TimestampableInterface;
use App\Traits\Abbreviable;
use App\Traits\Nameable;
use App\Traits\Timestampable;

class Country implements TimestampableInterface
{
    use Timestampable;
    use Nameable;
    use Abbreviable;
}