<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'a' => 'App\User',
    'b' => 'App\Post'
]);

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'commentable_id', 'commentable_type', 'name',
    ];

//    public function taggable()
//    {
//        $this->morphTo();
//    }

}
