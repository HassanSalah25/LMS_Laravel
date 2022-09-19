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
           // 'name' => $this->faker->name("male"),
            'name' =>  "admin",
            'email' => "admin@gmail.com",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'mobile' => $this->faker->numerify('+20##########'),
                //Example (test): $faker->numerify('##########'); // "3579786681"

        ];
    }


}
