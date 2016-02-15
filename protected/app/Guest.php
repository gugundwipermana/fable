<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //
    protected $fillable = [
    	'event_id',
    	'name',
    	'age',
    	'phone',
    	'email',
    	'genre'
    ];

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}
