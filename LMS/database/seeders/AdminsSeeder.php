<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
 class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //use factory here to fill the data
        Admin::factory(10)->create();
//        Admin::factory()->times(10)->create();
    }
}
