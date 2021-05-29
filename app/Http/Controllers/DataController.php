<?php

namespace App\Http\Controllers;

use App\Models\Sparql;

class DataController extends Controller
{

    function search($search)
    {
        $sparql = new Sparql();
        
        $byId = $sparql->getRestaurants('id', $search);
        $Name = $sparql->getRestaurants('name', $search);
        $Category = $sparql->getRestaurants('category', $search);
        $SpecialMenu = $sparql->getRestaurants('specialMenu', $search);
        $City = $sparql->getRestaurants('city', $search);
        $Province = $sparql->getRestaurants('province', $search);

        return compact("Name", "Category", "SpecialMenu", "City", "Province");
    }

    function getAllRestaurants(){
        $sparql = new Sparql();

        return $sparql->getRestaurants('all');
    }

    function getRestaurant($id){
        $sparql = new Sparql();

        return $sparql->getRestaurants('id', $id);
    }

    function getByCity($city){
        $sparql = new Sparql();

        return $sparql->getRestaurants('city', $city);
    }

    function getByCategory($category){
        $sparql = new Sparql();

        return $sparql->getRestaurants('category', $category);
    }

    function getBySpecMenu($specialMenu){
        $sparql = new Sparql();

        return $sparql->getRestaurants('specialMenu', $specialMenu);
    }  
}
