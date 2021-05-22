<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutiController extends Controller
{
    public function landingpage(){
        return view('v_landingpage');
    }

    public function restaurants(){
        return view('v_restaurants');
    }

    public function restaurantDetail(){
        return view('v_restaurantDetail');
    }

}

