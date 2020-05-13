<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function Items()
    {
        return $this->belongstoMany('App\Item', 'item_category');
    }
}
