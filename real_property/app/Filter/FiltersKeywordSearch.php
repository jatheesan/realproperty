<?php

namespace App\Filter;
use App\Models\Property;
use App\Models\PropartyType;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class FiltersKeywordSearch implements Filter
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
             $query->where('property_details', 'like', '%'.$value.'%')
             ->orWhere('further_details', 'like', '%'.$value.'%');
             
         });

    }
}