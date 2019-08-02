<?php
declare(strict_types=1);

namespace App\Entities;

use App\Interfaces\BidInterface;
use App\Traits\PriceTrait;

class Bid extends Entity implements BidInterface
{
    use PriceTrait;

    public function __construct(
        int $id,
        \DateTimeInterface $createdAt,
        \DateTimeInterface $updatedAt,
        float $price
    )
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
        $this->setPrice($price);
    }

}