<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = 
    [
        'title',
        'body',
        'picture_url',
        'restaurants_id'
    ];
}  