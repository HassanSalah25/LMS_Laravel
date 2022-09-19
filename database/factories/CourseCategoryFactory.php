<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseCategoryFactory extends Factory
{

    //CourseCategory
    //protected $model = CourseCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         
            'created_at' => $this->faker-> dateTimeThisMonth,
            'updated_at' => $this->faker-> dateTimeThisMonth,
            'course_id' => $this->faker->randomDigit,
            'category_id' => $this->faker->randomDigit,
            
            //
            // +-------------+---------------------+------+-----+---------+----------------+
            // | Field       | Type                | Null | Key | Default | Extra          |
            // +-------------+---------------------+------+-----+---------+----------------+
            // | id          | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
            // | created_at  | timestamp           | YES  |     | NULL    |                |
            // | updated_at  | timestamp           | YES  |     | NULL    |                |
            // | course_id   | varchar(255)        | NO   |     | NULL    |                |
            // | category_id | varchar(255)        | NO   |     | NULL    |                |
            // +-------------+---------------------+------+-----+---------+----------------+
            
        
        
        ];
    }
}
