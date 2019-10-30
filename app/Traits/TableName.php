<?php


namespace App\Traits;


trait TableName
{
    static function table()
    {
        return (new static())->getTable();
    }
}
