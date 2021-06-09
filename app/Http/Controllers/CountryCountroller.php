<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Models\Country;

class CountryCountroller extends Controller
{
    function show($id = null)
    {
    	
        return $id ? Country::find($id) : Country::all();
    }
    function store(Request $request){
    	$request->validate([
    		'id'=>'required',
    		'name'=>'required'
    	]);
    	return Country::create($request->all());	
    }
    function update(Request $request,$id){
    	$country=Country::find($id);
    	$country->update($request->all());
    	return $country;
    }
    
}
