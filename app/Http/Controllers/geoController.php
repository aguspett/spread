<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class geoController extends Controller
{
    public function index(
    )
    {
        return view('geo.index');
    }
}
