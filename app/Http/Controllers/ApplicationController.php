<?php

namespace App\Http\Controllers;

// Product Controller dealing with functions related to product operations
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Quack;

class ApplicationController extends Controller {

    public function getLandingPage() {
        $randomQuacksArr = DB::select('SELECT * FROM quacks ORDER BY RAND() LIMIT 1');    
        $randomQuacks = Quack::hydrate($randomQuacksArr);        
        return view('application.landing_page', ['randomQuacks' => $randomQuacks]);
    }
}
