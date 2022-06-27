<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = 
    [
        'title',
        'body',
        'picture_url',
        'restaurant_id'
    ];
    
    public function post()
    {
        return $this->hasOne('App\Restaurant');
    }
}  