<?php

use Illuminate\Database\Seeder;
use App\User;
use App\User_Roles;
use App\Roles;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->surname = 'admin';
        $user->username = 'admin';
        $user->email = "admin@admin.com";
        $user->phone_number = 7990623308;
        $user->phone_country_code = 91;
        $user->password = Hash::make('admin123'); //password
        $user->company = 'Incipient';
        $user->save();

        $roles = new Roles();
        $roles->name = 'admin';
        $roles->guard_name = 'admin';
        $roles->save();

        $user_role = new User_Roles();
        $user_role->user_id = 1;
        $user_role->role_id = 1;
        $user_role->save();

    }
}
