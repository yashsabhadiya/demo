<?php

namespace App;

use App\Post;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations\Relation;

//Relation::morphMap([
//    'a' => 'App\User',
//    'b' => 'App\Post'
//]);

class User extends Authenticatable
{
    use Notifiable,HasRoles,Searchable;
    // use Notifiable,HasApiTokens,HasRoles,Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function AauthAcessToken(){
        return $this->hasMany('\App\OauthAccessToken');
    }

    public function searchableAs()
    {
        return 'name';
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable','c_type','c_id');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tags','c','comments')->as('data')->withTimestamps();
    }

    public function users()
    {
        return $this->hasOne(Post::class,'users_id','id');
        // return $this->belongsTo(User::class,'users_id','id');
//     	return $this->belongsToMany(User::class,'post_user','users_id','posts_id');
    }

//    public function posts()
//    {
//        // return $this->hasOne(Post::class,'users_id','id');
//        // return $this->hasMany(Post::class,'users_id','id');
//        // return $this->belongsToMany(Post::class,'post_user','post_id','users_id');
//        // return $this->hasOne(Post::class,'users_id','id');
//        // return $this->hasMany(Post::class,'users_id','id');
//        // return $this->belongsToMany(Post::class,'post_user','users_id','posts_id')->as('subscription');
//        return $this->hasManyThrough(Comment::class,Post::class,'users_id','post_id','id','id');
//    }
}
