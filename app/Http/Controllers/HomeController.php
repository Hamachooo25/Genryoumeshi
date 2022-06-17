<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Prefecture;

class HomeController extends Controller
{
    //ホーム
    public function view()
    {
        return view('home');
    }
    //レストラン
    public function show(Prefecture $prefecture)
    {
        $restaurants = Restaurant::all();
        
  
        return view('restaurant', ['restaurants' => $restaurants]);
    }
}

