<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
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
             'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => $this->faker->numerify('+20##########'),
            "course_id" => $this->faker->randomDigit,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_active'          => $this->faker->randomDigit,
            'created_at'    => $this->faker-> dateTimeThisMonth,

        
            'updated_at'    => $this->faker-> dateTimeThisMonth,
            
            'deleted_at'          => $this->faker->datetimeThisMonth,
            
        ];
    }
}
