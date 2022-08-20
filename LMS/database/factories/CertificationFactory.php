<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CertificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'created_at' => $this->faker-> dateTimeThisMonth,
            'updated_at' => $this->faker-> dateTimeThisMonth,
            'course_id' => $this->faker->randomDigit,
            'batch_id' => $this->faker->randomDigit,
            'type' => $this->faker->name,
            'certificate' => $this->faker->name,
            'created_by' => $this->faker->name,


            // dateTimeThisMonth
            // | Field       | Type                | Null | Key | Default | Extra          |
            // +-------------+---------------------+------+-----+---------+----------------+
            // | id          | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
            // | created_at  | timestamp           | YES  |     | NULL    |                |
            // | updated_at  | timestamp           | YES  |     | NULL    |                |
            // | course_id   | varchar(255)        | NO   |     | NULL    |                |
            // | batch_id    | varchar(255)        | NO   |     | NULL    |                |
            // | type        | varchar(255)        | NO   |     | NULL    |                |
            // | certificate | varchar(255)        | NO   |     | NULL    |                |
            // | created_by  | varchar(255)        | NO   |     | NULL    |                |
            // +-------------+---------------------+------+-----+---------+----------------+
            

        ];
    }
}
