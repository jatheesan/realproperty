<?php

namespace App\Filter;
use App\Models\Property;
use App\Models\PropartyType;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class PriceFilters implements Filter
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

            $query->whereBetween('price', array($value));
             
         });

    }
}
