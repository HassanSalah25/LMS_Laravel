<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
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
            'name'          => $this->faker->name,
             'position'          => $this->faker->address,
            'is_active'          => $this->faker->text,
            'created_by'         => $this->faker->randomDigit,

        ];
    }
}
