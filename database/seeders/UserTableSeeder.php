<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeding My user table

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => Hash::make('pass'),
            'username' => 'Administrator'
        ]);

    }
}
