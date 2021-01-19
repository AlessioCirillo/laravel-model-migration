<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;

class HomeController extends Controller
{
    public function index() {
        
        // Get data from DB
        $cars = car::all();
        dump($cars);

        return view ('home', compact('cars'));
    }
}
