<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certification;
 class CertificationSeeder extends Seeder
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
        Certification::factory(10)->create();
//        Admin::factory()->times(10)->create();
    }
}
