<?php

namespace App\Filter;
use App\Models\Proparty;
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
             $query->where('first_pastcode', $value)
             ->orWhere('second_pastcode', $value)
             ->orWhere('second_pastcode', $value)
             ->orWhere('post_town', $value)
             ->orWhere('post_city', $value)
             ->orWhere('post_country', $value);
             
         });

    }
}