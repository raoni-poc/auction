<?php

namespace App\Traits;

trait Identifiable
{
    protected $id;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}