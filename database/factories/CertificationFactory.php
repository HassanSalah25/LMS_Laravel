<?php

namespace Database\Factories;
use App\Models\Certification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CertificationFactory extends Factory
{
    protected $model = Certification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // "created_at"     =>$this->faker->dateTimeThisMonth,
            // "updated_at"      =>$this->faker->dateTimeThisMonth,
            "course_id" =>$this->faker->randomDigit,
            "batch_id"   =>$this->faker->randomDigit,
            "type"    =>$this->faker->name,
            "certificate"    =>$this->faker->name,
            "created_by"    =>$this->faker->name,
            "created_at"    =>$this->faker->dateTimeThisMonth,
            "updated_at"    =>$this->faker->dateTimeThisMonth,
             

          
            
            
        ];
    }
}
