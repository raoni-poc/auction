<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Mnabialek\LaravelEloquentFilter\Filters\SimpleQueryFilter;

class CityFilter extends SimpleQueryFilter
{
    protected $simpleFilters = ['search'];
    protected $simpleSorts = ['name'];

    protected function applySearch($value)
    {
        $this->query
            ->where('name', 'LIKE', "%$value%")
            ->orWhere('ibge_code', 'LIKE', "%$value%");
    }

    public function hasFilterParameter(){
        $contains = $this->parser->getFilters()->contains(function ($filter){
           return $filter->getField() === 'search' && empty($filter->getValue());
        });
        return $contains;
    }
}
