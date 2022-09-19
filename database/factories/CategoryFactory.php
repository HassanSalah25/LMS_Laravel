<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'position' => $this->faker->randomDigit,
            "course_id" => $this->faker->randomDigit,
            "name" => $this->faker->name,
            "is_active" => $this->faker->name,
        ];
    }
}
