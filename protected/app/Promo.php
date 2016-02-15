<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //
    protected $fillable = [
    	'title',
    	'date',
    	'description',
    	'image'
    ];

    public function reserves()
    {
    	return $this->hasMany('App\ReservePromo');
    }
}
