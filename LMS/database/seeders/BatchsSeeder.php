<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Batch;
class BatchSeeder extends Seeder
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
        Batch::factory()->times(100)->create();
    }
}
