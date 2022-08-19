<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


// #inheret from super class
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // # call the seeder for your table 
         $this->call(UsersSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
