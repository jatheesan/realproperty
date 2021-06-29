<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\PropartyType;
use App\Filter\FiltersKeywordSearch;
use App\Filter\FiltersLocationSearch;
use App\Filter\PriceFilters;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;


class FilterController extends Controller
{
    public function filtering(Request $request)
    {
        $type = $request->filter[ 'type' ];
        $typename = PropartyType::where('type_id', '=', $type)->value('type_name');
        $catagery = $request->filter[ 'catagery' ];
        $location = $request->filter[ 'location' ];
        $bedrooms = $request->filter[ 'bedrooms' ];
        $bathrooms = $request->filter[ 'bathrooms' ];
        $halls = $request->filter[ 'halls' ];

        $properties = QueryBuilder::for(Property::class)
            ->allowedFilters([
                AllowedFilter::exact('catagery'),
                AllowedFilter::exact('type'),
                AllowedFilter::custom('location', new FiltersLocationSearch),
                AllowedFilter::exact('bedrooms'),
                AllowedFilter::exact('bathrooms'),
                AllowedFilter::exact('halls'),
                AllowedFilter::scope('area_between'),
                AllowedFilter::custom('search', new FiltersKeywordSearch),
                AllowedFilter::scope('starts_between'),
                AllowedFilter::exact('is_publish')->default('1'),
                AllowedFilter::exact('is_complete')->default('1'),
                AllowedFilter::custom('saleprice', new PriceFilters)
            ])
            ->paginate(9);

            $propertytypes = PropartyType::pluck('type_name','type_id')->all();
            //dd($typename);
            return view('boxroom4rent.property-list', compact('properties', 'propertytypes', 'typename', 'catagery', 'location', 'bedrooms', 'bathrooms', 'halls'));
    }


    public function filteringhome(Request $request)
    {
        $type = $request->filter[ 'type' ];
        $typename = PropartyType::where('type_id', '=', $type)->value('type_name');
        $catagery = $request->filter[ 'catagery' ];
        $location = $request->filter[ 'location' ];

        $properties = QueryBuilder::for(Property::class)
            ->allowedFilters([
                AllowedFilter::exact('catagery'),
                AllowedFilter::exact('type'),
                AllowedFilter::custom('location', new FiltersLocationSearch),
                AllowedFilter::exact('bedrooms'),
                AllowedFilter::exact('bathrooms'),
                AllowedFilter::exact('halls'),
                AllowedFilter::scope('area_between'),
                AllowedFilter::custom('search', new FiltersKeywordSearch),
                AllowedFilter::scope('starts_between'),
                AllowedFilter::exact('is_publish')->default('1'),
                AllowedFilter::exact('is_complete')->default('1'),
                AllowedFilter::custom('saleprice', new PriceFilters)
            ])
            ->paginate(9);

            $propertytypes = PropartyType::pluck('type_name','type_id')->all();
            //dd($typename);
            return view('boxroom4rent.property-list', compact('properties', 'propertytypes', 'typename', 'catagery', 'location'));
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
