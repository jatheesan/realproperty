<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getproperties()
    {
        return view('pages.properties');
    }
}
