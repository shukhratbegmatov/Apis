<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function add(Request $req)
    {
        $device = new Device;
        $device->id = $req->id;
        $device->name = $req->name;
        $result = $device->save();
        if ($result) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "Operation failed"];
        }
    }
}