<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proparty;
use App\Models\PropartyType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sale_properties = Proparty::with('propertytype')->with('images')->where('catagery', 'for sale')->orderBy('updated_at', 'desc')->limit(5)->get();
        $rent_properties = Proparty::with('propertytype')->with('images')->where('catagery', 'for let')->orderBy('updated_at', 'desc')->limit(5)->get();
        return view('home', compact('sale_properties', 'rent_properties'));
        //dd($rent_properties);
    }

    public function getproperties($id)
    {
        if($id == 'sale')
        {
            $properties = Proparty::with('propertytype')->with('images')->where('catagery', 'for sale')->orderBy('updated_at', 'desc')->paginate(9);
        }
        elseif($id == 'let')
        {
            $properties = Proparty::with('propertytype')->with('images')->where('catagery', 'for let')->orderBy('updated_at', 'desc')->paginate(9);
        }
        else
        {
            $properties = Proparty::with('propertytype')->with('images')->orderBy('updated_at', 'desc')->paginate(9);
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
        $property = Proparty::with('propertytype')->findOrFail($id);
        //dd(amma);
        return view('pages.single-property', compact('property'));
    }

}
