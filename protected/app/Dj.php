<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dj extends Model
{
    //
    protected $fillable = [
    	'name',
    	'title',
    	'description',
    	'facebook',
    	'twitter',
    	'instagram',
    	'image',
    	'background',
        'type'
    ];
}
