<?php

namespace Database\Factories;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    //the name of the factory corresponding model
        //Note:  you must give the entire PATH 
    protected $model = Admin::class;

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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'mobile' => $this->faker->numerify('+20##########'),
                //Example (test): $faker->numerify('##########'); // "3579786681"
        //  $table->string('name');
        //  $table->string('email')->unique();
        //  $table->string('password');
        //  $table->rememberToken();
        //  $table->timestamps();
        //  $table->string('mobile')->nullable();
         
        ];
    }

       /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
