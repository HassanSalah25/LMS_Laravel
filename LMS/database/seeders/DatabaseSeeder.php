<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $this->call(UsersSeeders::class);
        
        // \App\Models\User::factory(10)->create();
    }
}
