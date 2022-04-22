<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //trying to seed my UserTable using DBseeder
        $this->call([
            UserTableSeeder::class
        ]);
    }
}
