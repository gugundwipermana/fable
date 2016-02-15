<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservePromo extends Model
{
    //
    protected $fillable = [
    	'promo_id',
    	'name',
    	'age',
    	'phone',
    	'email'
    ];

    public function promo()
    {
    	return $this->belongsTo('App\Promo');
    }
}
