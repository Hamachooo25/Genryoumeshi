<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
        'id'=>'11',
        'name'=>'精進カフェ宙',
        'email'=>'hehe@hehe',
        'password'=>'hehe',
        'address'=>'〒761-0121 香川県高松市牟礼町牟礼2500-2',
        'prefecture_id'=>'36',
        'created_at'=>now(),
        'updated_at'=>now(),
        ]);
        
         Restaurant::create([
        'id'=>'33',
        'name'=>'筋肉食堂',
        'email'=>'hoho@hoho',
        'password'=>'hehe',
        'address'=>'〒106-0032 東京都港区六本木7-8-5',
        'prefecture_id'=>'13',
        'created_at'=>now(),
        'updated_at'=>now(),
        ]);
        
    }
}
