<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proparty;
use App\Models\PropartyType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$sale_properties = Proparty::with('propertytype')->with('images')->where('catagery', 'for sale')->orderBy('updated_at', 'desc')->limit(5)->get();
        //$rent_properties = Proparty::with('propertytype')->with('images')->where('catagery', 'for let')->orderBy('updated_at', 'desc')->limit(5)->get();
        //return view('home', compact('sale_properties', 'rent_properties'));
        //dd($rent_properties);
    }
}
