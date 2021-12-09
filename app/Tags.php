<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = [
        'name'
    ];

//    public function tags()
//    {
//        return $this->morphToMany('App\Tags','taggable');
//    }
}
