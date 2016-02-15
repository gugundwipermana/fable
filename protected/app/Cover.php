<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    //
    protected $fillable = [
    	'firstquote',
    	'lastquote',
    	'video',
    	'music',
    	'title',
    	'band',
    	'album',
    	'date'
    ];
}
