<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Comment::class;

    public function definition()
    {
        return [
            //0-9
            //"id" => $this->faker->unique()->randomDigit(),
            "created_at"=> $this->faker->dateTimeThisMonth,
            "updated_at"=> $this->faker->dateTimeThisMonth,


//            id         | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
//| created_at | timestamp           | YES  |     | NULL    |                |
//| updated_at
        ];
    }
}
