<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Event extends Model
{
    //
    protected $fillable = [
    	'title',
    	'date',
    	'type',
    	'cover',
    	'video',
    	'youtube',
    	'description',
    	'facebook',
    	'twitter',
    	'instagram'
    ];

    public function reserves()
    {
    	return $this->hasMany('App\Reserve');
    }

    public function guests()
    {
    	return $this->hasMany('App\Guest');
    }

    public function scopeUnpublished($query)
    {
        $query->where('date', '>', Carbon::now()->subDay());
    }

    public function getJudul($id) {
        $judul = \DB::table('events')
                ->select('title')
                ->where('id', '=', $id)
                ->first();

        return $judul->title;
    }

    
}
