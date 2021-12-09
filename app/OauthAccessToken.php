<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OauthAccessToken extends Model
{
    use HasFactory;

    protected $table = 'oauth_access_tokens';

    protected $fillable = ['user_id','client_id','name','scopes','revoked'];
}
