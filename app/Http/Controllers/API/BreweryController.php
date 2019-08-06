<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Brewery;

class BreweryController extends Controller
{
    
    public function breweries()
    {
        return response()->json(Brewery::all()); 
    }
    
    public function brewery(Brewery $brewery)
    {
        
        return response()->json($brewery);
    }
    
}
