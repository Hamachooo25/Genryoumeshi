<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //テーブル名
    protected $table = 'restaurants';
    
    //可変項目(保存したい値)
    protected $fillable = 
    [
        'name',
        'email',
        'password',
        'address',
        'prefecture_id'
    ];
    
    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture');
    }
    
    public function post()
    {
        return $this->hasOne('App\Post');
    }
}
