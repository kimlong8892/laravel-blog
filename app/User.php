<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "user";
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function Item()
    {
        return $this->hasMany('App\Item');
    }
}
