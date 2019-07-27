<?php


namespace App\Interfaces;


interface TimestampableInterface extends
    GetCreatedAtInterface,
    GetUpdatedAtInterface,
    SetCreatedAt,
    SetUpdatedAtInterface
{

}