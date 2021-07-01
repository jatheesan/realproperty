<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Room;
use App\Models\PropartyType;
use Illuminate\Http\Request;

class BoxRoomController extends Controller
{
    public function index()
    {
        $sale_properties = Property::with('propertytype')->with('images')->where('catagery', 'for sale')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->limit(5)->get();
        $rent_properties = Property::with('propertytype')->with('images')->where('catagery', 'for let')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->limit(5)->get();
        $properties = Property::with('propertytype')->with('images')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->limit(9)->get();
        $propertytypes = PropartyType::pluck('type_name','type_id')->all();
        return view('boxroom4rent.home', compact('sale_properties', 'rent_properties', 'properties', 'propertytypes'));
        //dd($rent_properties);
    }

    public function listing()
    {   
        $propertytypes = PropartyType::pluck('type_name','type_id')->all();
        $properties = Property::with('propertytype')->with('images')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->paginate(12);
        return view('boxroom4rent.property-list', compact('properties', 'propertytypes'));
    }

    public function single($id)
    {
        $property = Property::with('propertytype')->findOrFail($id);
        $rooms = Room::with('roomimages')->where('property_id', '=', $id)->get();
        //dd($rooms);
        return view('boxroom4rent.property-single', compact('property', 'rooms'));
    }

    public function about()
    {
        return view('boxroom4rent.about');
    }

    public function contact()
    {
        return view('boxroom4rent.contact');
    }

    public function signin()
    {
        return view('boxroom4rent.sign-in');
    }
}
