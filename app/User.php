<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password','pensiunan_id','id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function getStockAttribute()
    {
        $stock = $this->pensiunan_id;
        return $stock;
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
                public function mutasi()
    {
        return $this->belongsTo('App\Mutasi','id','user_id');
    }
        public function pensiunan()
    {
        return $this->belongsTo('App\Pensiunan', 'pensiunan_id','nip');
    }
}
