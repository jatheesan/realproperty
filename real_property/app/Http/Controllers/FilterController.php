<?php

namespace App\Http\Controllers;
use App\Models\Proparty;
use App\Models\PropartyType;
use App\Filter\FiltersKeywordSearch;
use App\Filter\PriceFilters;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;


class FilterController extends Controller
{
    public function filtering(Request $request)
    {

        $properties = QueryBuilder::for(Proparty::class)
            ->allowedFilters([
                AllowedFilter::exact('catagery'),
                AllowedFilter::exact('type'),
                AllowedFilter::exact('no_of_bedrooms'),
                AllowedFilter::exact('no_of_bathrooms'),
                AllowedFilter::exact('no_of_halls'),
                AllowedFilter::custom('search', new FiltersKeywordSearch),
                AllowedFilter::scope('starts_between'),
                AllowedFilter::exact('is_publish')->default('1')
                // AllowedFilter::custom('starts_between', new PriceFilters)
            ])
            ->paginate(9);

            $propertytypes = PropartyType::pluck('type_name','type_id')->all();
            return view('pages.properties', compact('properties', 'propertytypes'));
    }

}

// class FiltersKeywordSearch implements Filter
// {
//     public function __invoke(Builder $query, $value, string $property)
//     {
//         $query->whereHas('permissions', function (Builder $query) use ($value) {
//             $query->where('name', $value);
//         });
//     }
// }
