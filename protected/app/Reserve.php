<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    //
    protected $fillable = [
    	'event_id',
    	'name',
    	'age',
    	'phone',
    	'email'
    ];

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}
