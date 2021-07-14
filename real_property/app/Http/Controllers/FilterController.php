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
        $data = $request->all();
        if(isset($request->filter[ 'type' ]))
        {
            $type = $request->filter[ 'type' ];
            $typename = PropartyType::where('type_id', '=', $type)->value('type_name');
        }
        if(isset($request->filter[ 'catagery' ]))
        {
            $catagery = $request->filter[ 'catagery' ];
        }
        if(isset($request->filter[ 'location' ]))
        {
            $catagery = $request->filter[ 'location' ];
        }
        if(isset($request->filter[ 'bedrooms' ]))
        {
            $catagery = $request->filter[ 'bedrooms' ];
        }
        if(isset($request->filter[ 'bathrooms' ]))
        {
            $catagery = $request->filter[ 'bathrooms' ];
        }
        if(isset($request->filter[ 'halls' ]))
        {
            $catagery = $request->filter[ 'halls' ];
        }


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
                AllowedFilter::scope('price_between')
            ])
            ->paginate(12)
            ->appends(request()->query());

            $propertytypes = PropartyType::pluck('type_name','type_id')->all();
            //dd($typename);
            //return view('boxroom4rent.property-list', compact('properties', 'propertytypes', 'typename', 'catagery', 'location', 'bedrooms', 'bathrooms', 'halls', 'data'));
            return view('boxroom4rent.property-list', compact('properties', 'propertytypes', 'data'));
    }


    public function filteringhome(Request $request)
    {
        $data = $request->all();
        if(isset($request->filter[ 'type' ]))
        {
            $type = $request->filter[ 'type' ];
            $typename = PropartyType::where('type_id', '=', $type)->value('type_name');
        }
        if(isset($request->filter[ 'catagery' ]))
        {
            $catagery = $request->filter[ 'catagery' ];
        }
        if(isset($request->filter[ 'location' ]))
        {
            $catagery = $request->filter[ 'location' ];
        }

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
                AllowedFilter::scope('price_between')
            ])
            ->paginate(9);

            $propertytypes = PropartyType::pluck('type_name','type_id')->all();
            //dd($typename);
            //return view('boxroom4rent.property-list', compact('properties', 'propertytypes', 'typename', 'catagery', 'location'));
            return view('boxroom4rent.property-list', compact('properties', 'propertytypes'));
    }

}
