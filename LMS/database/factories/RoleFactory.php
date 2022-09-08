<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
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
            'name' =>  "admin",
            'name' =>  "student",
            'name' =>  "user",
            'name' =>  "staff",
        ];
    }
}
