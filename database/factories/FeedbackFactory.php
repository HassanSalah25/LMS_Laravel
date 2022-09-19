<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
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
            'created_at'    => $this->faker-> dateTimeThisMonth,
            'updated_at'    => $this->faker-> dateTimeThisMonth,
            'course_id'          => $this->faker->randomDigit,
            'batch_id'          => $this->faker->randomDigit,
            'staff_id'          => $this->faker->randomDigit,
            'student_id'          => $this->faker->randomDigit,
            'title'          => $this->faker->realTextBetween(160,191),
            'rating'          => $this->faker->address,
            'review'          => $this->faker->realTextBetween(160,191),
            'is_active'          => $this->faker->randomDigit,
            'deleted_at'          => $this->faker->datetimeThisMonth,
            
        ];
    }
}
