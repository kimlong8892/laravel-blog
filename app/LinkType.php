<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkType extends Model
{
    protected $table = "type_link";
    protected $primaryKey = 'id';
    public $timestamps = true;
}
