<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
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
            'module_id'          => $this->faker->text,
            'name'          => $this->faker->name,
            'description'          => $this->faker->text,
            'position'          => $this->faker->address,
            'is_active'          => $this->faker->text,
             
        ];
    }
}
