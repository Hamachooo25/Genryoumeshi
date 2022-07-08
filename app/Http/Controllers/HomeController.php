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
    
    public function search()
    {
        $search_text = $_GET['query'];
        $restaurants = Restaurant::where('address','LIKE','%'.$search_text.'%')->get();
        
        return view('search',compact('restaurants'));
    }
    /*public function create()
    {
        return view('create');
    }
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/restaurants/' . $post->id);
    }*/
}

