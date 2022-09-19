<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
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
              //
                'name' => $this->faker->name(),
                'mobile' => $this->faker->numerify('+20##########'),

                'email' => $this->faker->unique()->safeEmail(),
                'remember_token' => $this->faker->unique()->safeEmail(),
                    
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active'          => $this->faker->randomDigit,

                'balance_amount'    => $this->faker-> randomDigit,


                'is_enrolled'    => $this->faker-> randomDigit,
                'is_active'    => $this->faker-> randomDigit,
                'is_balance'    => $this->faker-> randomDigit,
                'created_at'    => $this->faker-> dateTimeThisMonth,
                'updated_at'    => $this->faker-> dateTimeThisMonth,
                'deleted_at'          => $this->faker->datetimeThisMonth,

        ];
    }
}
