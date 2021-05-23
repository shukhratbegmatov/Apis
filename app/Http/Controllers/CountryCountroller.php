<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Models\Country;

class CountryCountroller extends Controller
{
    function country($id = null)
    {
        return $id ? Country::find($id) : Country::all();
    }
}