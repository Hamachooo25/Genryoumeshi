<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Prefecture;
use App\Post;


class HomeController extends Controller
{
    //ホーム
    public function view()
    {
        return view('home');
    }
    //レストラン
    public function show(Prefecture $prefecture, Restaurant $restaurant)
    {
  
        return view('restaurant', ['restaurants' => $prefecture->restaurants]);
    }
    
    public function index($id)
    {
        $post = Post::where('restaurant_id', $id)->first();
      

        return view('post',['post' => $post]);
    }
}

