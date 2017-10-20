<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{

	protected $with = ['user'];

    protected $dates = ['task_deadline'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function setSlugAttribute($value) 
    {  	
        $this->attributes['slug'] = str_slug($this->name);
    }

    public function path()
    {
    	return '/users/'.$this->user->username.'/'.$this->slug;
    }

    public function deadlinePassed()
    {
        return (Carbon::now()->lte($this->task_deadline)) ? false : true;
    }

}
