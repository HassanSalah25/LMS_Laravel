<?php

namespace Database\Factories;
use App\Models\courses_category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class courses_categoryFactory extends Factory
{
    protected $model = courses_category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'course_id' =>$this->faker->name,
            'category_id' =>$this->faker->name,

            // $table->string('course_id');
            // $table->string('category_id');
        ];
    }
}
