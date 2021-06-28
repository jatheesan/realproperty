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
        $properties = Property::with('propertytype')->with('images')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->limit(6)->get();
        return view('boxroom4rent.home', compact('sale_properties', 'rent_properties', 'properties'));
        //dd($rent_properties);
    }

    public function listing()
    {   
        $properties = Property::with('propertytype')->with('images')->where('is_publish', 1)->where('is_complete', 1)->orderBy('updated_at', 'desc')->paginate(6);
        return view('boxroom4rent.property-list', compact('properties'));
    }

    public function single($id)
    {
        $property = Property::with('propertytype')->findOrFail($id);
        $rooms = Room::with('roomimages')->where('property_id', '=', $id)->get();
        //dd($rooms);
        return view('boxroom4rent.property-single', compact('property', 'rooms'));
    }
}
