<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

	protected $with = ['user'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function path()
    {
    	return '/users/'.$this->user->username.'/'.$this->slug;
    }

}
