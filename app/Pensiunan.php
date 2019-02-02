<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Pensiunan extends Model
{
 protected $guarded = array();

        public function user()
    {
        return $this->belongsTo('App\Users','pensiunan_id','nip');
    }
            public function mutasi()
    {
        return $this->hasManyThrough('App\Users','App\Mutasi');
    }
}
