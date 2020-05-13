<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkDown extends Model
{
    protected $table = "link_download";
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function Type()
    {
        return $this->belongsTo('App\LinkType');
    }
}
