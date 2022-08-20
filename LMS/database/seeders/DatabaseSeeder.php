<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// MAIN Seeder Class by:laravel

///NOTE : import ALL models in this main seeder class
use App\Models\Admin;
use App\Models\Batch;
use App\Models\Category;
use App\Models\Certification;
use App\Models\Course;
use App\Models\courses_category;
use App\Models\Enrool;
use App\Models\Feedback;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Staff;
use App\Models\Student;
use App\Models\User;




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
            //way 1
        // # call the seeder for your table 
         //$this->call(AdminsSeeder::class);
         Admin::factory()->times(10)->create();
         Batch::factory()->times(10)->create();
         Category::factory()->times(10)->create();
         Certfication::factory()->times(10)->create();
         Course::factory()->times(10)->create();
         course_category::factory()->times(10)->create();
         Enrool::factory()->times(10)->create();
         feedback::factory()->times(10)->create();
         Lesson::factory()->times(10)->create();
         Module::factory()->times(10)->create();
         Staff::factory()->times(10)->create();
         Student::factory()->times(10)->create();

         
        //way 2
         $this->call(UsersSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
