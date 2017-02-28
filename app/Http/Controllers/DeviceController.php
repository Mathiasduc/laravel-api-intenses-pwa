<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class DeviceController extends Controller
{
    public function installDevice(Request $request, $hexaID)
    {	
    	$device = Device::where('hexaID',$hexaID)->firstOrFail();
    	$device->comment = $request->comment;
    	$device->location = $request->location;
    	$device->name = $request->name;
    	$device->save();
    }
}
