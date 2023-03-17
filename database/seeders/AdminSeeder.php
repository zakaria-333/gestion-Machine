<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"superadmin",
            "email"=>"superadmin@gmail.com",
            "password"=>Hash::make('superadmin1234')
        ]);
    }
}
