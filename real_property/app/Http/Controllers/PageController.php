<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getproperties()
    {
        return view('pages.properties');
    }

    public function getcontact()
    {
        return view('pages.contact');
    }

    public function getabout()
    {
        return view('pages.about');
    }
}
