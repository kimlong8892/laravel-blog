<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item";
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function Categorys()
    {
        return $this->belongstoMany('App\Category', 'item_category');
    }
    public function Links()
    {
        return $this->hasMany('App\LinkDown');
    }
    public function User()
    {
        return $this->belongsto('App\User');
    }
}
