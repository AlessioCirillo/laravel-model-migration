<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class BikeController extends Controller
{
    public function index(){
        $bikes = bike::all();

        return response()->json($bikes);
    }
}
