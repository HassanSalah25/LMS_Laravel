<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollFactory extends Factory
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
            'course_id'          => $this->faker->randomDigit,
            'batch_id'          => $this->faker->randomDigit,
            'student_id'          => $this->faker->randomDigit,
            'type'          => $this->faker->randomDigit,
            'deleted_at'          => $this->faker->datetimeThisMonth,
            
            //
//             +------------+---------------------+------+-----+---------+----------------+
// | Field      | Type                | Null | Key | Default | Extra          |
// +------------+---------------------+------+-----+---------+----------------+
// | id         | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
// | created_at | timestamp           | YES  |     | NULL    |                |
// | updated_at | timestamp           | YES  |     | NULL    |                |
// | course_id  | int(10) unsigned    | NO   |     | NULL    |                |
// | batch_id   | int(10) unsigned    | NO   |     | NULL    |                |
// | student_id | int(10) unsigned    | NO   |     | NULL    |                |
// | type       | enum('0','1')       | YES  |     | NULL    |                |
// | deleted_at | timestamp           | YES  |     | NULL    |                |
// +------------+---------------------+------+-----+---------+----------------+

        ];
    }
}
