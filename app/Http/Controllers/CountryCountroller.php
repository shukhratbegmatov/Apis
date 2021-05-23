<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;


class CountryCountroller extends Controller
{
    function country()
    {
        return ["name" => "hello"];
    }
}