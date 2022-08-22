<?php

namespace Database\Seeders;

use App\Models\CourseStudent;
use Illuminate\Database\Seeder;
// MAIN Seeder Class by:laravel

///NOTE : import ALL models in this main seeder class
use App\Models\Admin;
use App\Models\Batch;
use App\Models\Category;
//use app\Models\Category;
use App\Models\Certification;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Enroll;

use App\Models\Feedback;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Post;
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
        //Note : must take care of the way of sorting same as factory
            //way 1
        // # call the seeder for your table
         //$this->call(AdminsSeeder::class);
         Admin::factory()->times(100)->create();
         Batch::factory()->times(100)->create();
         Category::factory()->times(100)->create();
         Certification::factory()->times(100)->create();
         CourseCategory::factory()->times(100)->create();
         Course::factory()->times(100)->create();
         Enroll::factory()->times(100)->create();
         Feedback::factory()->times(100)->create();
         Lesson::factory()->times(100)->create();
         Module::factory()->times(100)->create();
         Staff::factory()->times(100)->create();
         Student::factory()->times(100)->create();
         User::factory()->times(100)->create();
        CourseStudent::factory()->times(100)->create();

        //way 2
         //$this->call(UsersSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
