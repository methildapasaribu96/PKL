<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    protected $fillable = ['name'];

        public function mutasi()
    {
        return $this->hasMany('App\Mutasi');
    }
}
