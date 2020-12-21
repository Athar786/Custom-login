<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name','guard_name'];

    public function User_Roles()
    {
        return $this->hasOne('App\User_Roles');
    }

}
