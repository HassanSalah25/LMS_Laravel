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
        $teacherName = $this->faker->name;
        return [
                //Error :  Maximum retries of 10000 reached without finding a unique value
//          "staff_id" => $this->faker->unique->randomDigit,
            "staff_id" => $this->faker->randomDigit,
            "course_id" => $this->faker->randomDigit,
            "student_id" => $this->faker->randomDigit,
            "name" => $teacherName,
            "start_date" => $this->faker->dateTimeThisMonth,
            "end_date" => $this->faker->dateTimeThisMonth,
            "hours" => $this->faker->unixTime,//need to be divided /hours...
            "days" => $this->faker->unixTime,
            "created_by" => $teacherName,
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
