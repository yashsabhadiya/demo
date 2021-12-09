<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'a' => 'App\User',
    'b' => 'App\Post'
]);

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['users_id','name'];

//     public function users()
//     {
//         return $this->hasMany(Post::class,'users_id','id');
//     	// return $this->belongsTo(User::class,'users_id','id');
////     	return $this->belongsToMany(User::class,'post_user','users_id','posts_id');
//     }

    public function comments()
    {
//        return $this->morphMany(Comment::class,'commentable','c_type','c_id');
        return $this->morphMany(Comment::class,'commentable','c_type','c_id');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tags','c','comments');
    }
}
