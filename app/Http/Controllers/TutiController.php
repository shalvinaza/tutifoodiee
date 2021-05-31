<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;

class TutiController extends Controller
{
    public function index(){
        // return view('v_landingpage');

        $data = new DataController();

        $dataAll = collect($data->getAllRestaurants());
        $unique = $dataAll->unique('category');
        $unique->values()->all();

        $uniques = $dataAll->unique('specialMenu');
        $uniques->values()->all();

        return view('v_landingpage',compact('unique','uniques'));
    }

    public function cities($city){
        $data = new DataController();

        $cities = $data->getByCity($city);
        return view('v_restaurants',compact('cities','city'));
    }

    public function getRestaurantById($id){
        $data = new DataController();

        $ids = $data->getRestaurant($id);

        return view('v_restaurantDetail',compact('ids','id'));
    }

    public function categories($category){
        $data = new DataController();

        $categories = $data->getByCategory($category);
        return view('v_restaurantsByCategory',compact('categories','category'));
    }
    

    public function specialMenus($specialMenu){
        $data = new DataController();

        $specialMenus = $data->getBySpecMenu($specialMenu);
        return view('v_restaurantsBySpecMenu',compact('specialMenus','specialMenu'));
    }

    public function search(Request $request){
        $data = new DataController();

        $varsearch = $request->search;
        $search = $data->search($varsearch);
        return view('v_hasilSearch',compact('search','varsearch'));
    }
}