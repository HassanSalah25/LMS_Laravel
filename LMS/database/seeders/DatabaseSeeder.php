<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// MAIN Seeder Class by:laravel

use App\Models\Admin;

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
         //$this->call(AdminsSeeder::class);
         Admin::factory()->times(10)->create();
         Batch::factory()->times(10)->create();
         
         
         $this->call(BatchsSeeder::class);
         $this->call(CategoriesSeeder::class);
         $this->call(CertficationsSeeder::class);
         $this->call(courses_categoriesSeeder::class);
         $this->call(CoursesSeeder::class);
         $this->call(EnrollsSeeder::class);
         $this->call(FeedbacksSeeder::class);
         $this->call(LessonsSeeder::class);
         $this->call(ModulesSeeder::class);
         $this->call(StaffsSeeder::class);
         $this->call(UsersSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
