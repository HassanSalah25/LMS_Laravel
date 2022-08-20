<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at'    => $this->faker-> dateTimeThisMonth,
            'updated_at'    => $this->faker-> dateTimeThisMonth,
            'name'          => $this->faker->name,
            'description'   => $this->faker->randomDigit,
            'cover_image'   => $this->faker->randomDigit,
            'hours'         => $this->faker->randomDigit,
            'certificate_image'         => $this->faker->randomDigit,
            'position'         => $this->faker->randomDigit,
            'is_active'         => $this->faker->randomDigit,
            'created_by'         => $this->faker->randomDigit,

            // MariaDB [lms]> describe courses;
            // +-------------------+---------------------+------+-----+---------+----------------+
            // | Field             | Type                | Null | Key | Default | Extra          |
            // +-------------------+---------------------+------+-----+---------+----------------+
            // | id                | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
            // | created_at        | timestamp           | YES  |     | NULL    |                |
            // | updated_at        | timestamp           | YES  |     | NULL    |                |
            // | name              | varchar(255)        | NO   |     | NULL    |                |
            // | description       | varchar(255)        | NO   |     | NULL    |                |
            // | cover_image       | varchar(255)        | NO   |     | NULL    |                |
            // | hours             | varchar(255)        | NO   |     | NULL    |                |
            // | certificate_image | varchar(255)        | NO   |     | NULL    |                |
            // | position          | varchar(255)        | NO   |     | NULL    |                |
            // | is_active         | varchar(255)        | NO   |     | NULL    |                |
            // | created_by        | varchar(255)        | NO   |     | NULL    |                |
            // +-------------------+---------------------+------+-----+---------+----------------+
            

        ];
    }
}
