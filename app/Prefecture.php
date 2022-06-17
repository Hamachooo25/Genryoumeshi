<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    //
    protected $table = 'prefectures';
    
    protected $fillable =
    [
        'prefecture'
    ];
    
    public function restaurants()
    {
        return $this->hasMany('App\Restaurant');
    }
}
