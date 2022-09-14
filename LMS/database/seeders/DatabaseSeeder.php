<?php

namespace Database\Seeders;

use App\Models\CourseStudent;
use App\Models\Role;
use App\Models\UserRole;
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
use App\Models\Comment;




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
            Admin::factory()->times(5)->create();
            Batch::factory()->times(5)->create();
            Category::factory()->times(5)->create();
            Certification::factory()->times(5)->create();
            CourseCategory::factory()->times(5)->create();
            Course::factory()->times(5)->create();
            Enroll::factory()->times(5)->create();
            Feedback::factory()->times(5)->create();
            Lesson::factory()->times(5)->create();
            Module::factory()->times(5)->create();
            Staff::factory()->times(5)->create();
            Student::factory()->times(5)->create();
            User::factory()->times(5)->create();
            CourseStudent::factory()->times(5)->create();
            Comment::factory()->times(5)->create();
            Post::factory()->times(5)->create();
            Role::factory()->times(4)->create();
            UserRole::factory()->times(5)->create();



            //way 2
            //$this->call(UsersSeeder::class);

            // \App\Models\User::factory(10)->create();
    }
}
