<?php

namespace App\Filter;
use App\Models\Property;
use App\Models\PropartyType;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class FiltersLocationSearch implements Filter
{
    protected $searchableColumns = [];

    public function setSearchableColumns($columns): self
    {
        $this->searchableColumns = $columns;

        return $this;
    }

    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where(function (Builder $query) use ($value) {
             $query->where('first_postcode', $value)
             ->orWhere('second_postcode', $value)
             ->orWhere('street_name', $value)
             ->orWhere('second_line_of_address', $value)
             ->orWhere('post_town', $value)
             ->orWhere('post_city', $value)
             ->orWhere('post_country', $value);
             
         });

    }
}