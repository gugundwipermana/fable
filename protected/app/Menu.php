<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
    	'category_menu_id',
    	'title',
    	'description'
    ];

    public function category()
    {
    	return $this->belongsTo('App\CategoryMenu');
    }

}
