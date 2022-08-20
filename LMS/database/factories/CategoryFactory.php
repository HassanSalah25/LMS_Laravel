<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Modules\Category;

class CategoryFactory extends Factory
{

    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         //import the corresponded MODEL

        return [
            //"staff_id" => $this->faker->randomDigit,

            'position' => $this->faker->randomDigit,
            "name" => $this->faker->name,
            "is_active" => $this->faker->name,

            // $table->integer('position')->unsigned();
			// $table->string('name');
			// $table->string('is_active');
        ];
    }
}
