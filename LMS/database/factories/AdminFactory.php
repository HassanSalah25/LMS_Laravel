<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 
 use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => $this->faker->numerify('+20-##########'),
                        //Example (test): $faker->numerify('##########'); // "3579786681"

            'email_verified_at' => now(),
            //password = password
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           'remember_token' => Str::random(10),
            //
            // $table->id();
            // $table->timestamps();
			// $table->string('name');
			// $table->string('email')->unique();
			// $table->string('mobile');
			// $table->string('password');
			// $table->integer('role_id');
			// $table->tinyInteger('is_active')->default('1');
			// $table->softDeletes();
        ];
    }
}
