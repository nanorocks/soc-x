<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;

    protected $table='users';

    public function post()
    {
        return $this->hasMany('App\Post');
    }
    public  function likes()
    {
        return $this->hasMany('App\Like');
    }
}