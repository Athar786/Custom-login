<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Roles extends Model
{
    protected $table = 'user_role';

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Roles()
    {
        return $this->belongsTo('App\Roles');
    }
}
