<?php
declare(strict_types=1);

namespace App\Entities;


use App\Interfaces\AuctionInterface;

class Auction extends Entity implements AuctionInterface
{
    public function __construct(
        int $id,
        \DateTimeInterface $createdAt,
        \DateTimeInterface $updatedAt
    )
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
    }
}