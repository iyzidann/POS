<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function food_beverage(){
        return view('product.food-beverage'); 
    }
    public function beauty_health(){
        return view('product.beauty-health'); 
    }
    public function home_care(){
        return view('product.home-care'); 
    }
    public function baby_kid(){
        return view('product.baby-kid'); 
    }
}
