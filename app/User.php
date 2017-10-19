<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    protected $withCount = ['projects'];

    public function shortName()
    {
        return strtolower($this->first_name);
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
