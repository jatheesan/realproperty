<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropartyType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sale_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->limit(5)->get();
        $rent_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->limit(5)->get();
        return view('home', compact('sale_properties', 'rent_properties'));
        //dd($rent_properties);
    }

    public function getproperties($id)
    {
        if($id == 'sale')
        {
            $properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->paginate(9);
        }
        elseif($id == 'let')
        {
            $properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->paginate(9);
        }
        else
        {
            $properties = Property::with('propertytype')->with('images')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->paginate(9);
        }

        $propertytypes = PropartyType::pluck('type_name','type_id')->all();
        return view('pages.properties', compact('properties', 'propertytypes'));
    }

    public function getcontact()
    {
        return view('pages.contact');
    }

    public function getabout()
    {
        return view('pages.about');
    }

    public function getproperty($id)
    {
        $property = Property::with('propertytype')->findOrFail($id);
        //dd(amma);
        return view('pages.single-property', compact('property'));
    }

}
