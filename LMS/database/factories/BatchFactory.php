<?php

namespace Database\Factories;
use App\Models\Batch;
use Illuminate\Database\Eloquent\Factories\Factory;

class BatchFactory extends Factory
{

    //import the corresponded MODEL
    protected $model = Batch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            "staff_id" => $this->faker->unique,
            "course_id" => $this->faker->name,
            "name" => $this->faker->name,
            "start_date" => $this->faker->name,
            "end_date" => $this->faker->name,
            "hours" => $this->faker->name,
            "days" => $this->faker->name,
            "created_by" => $this->faker->name,



            
            // //
            // $table->id();
            // $table->timestamps();
            // $table->string('staff_id');
            // $table->string('course_id');
            // $table->string('name');
            // $table->string('start_date');
            // $table->string('end_date');
            // $table->string('hours');
            // $table->string('days');
            // $table->string('created_by');
        ];
    }
}
