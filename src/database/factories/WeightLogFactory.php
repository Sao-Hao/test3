<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::first()->id, // 既存のユーザーIDを使用
            'date' => $this->faker->date(),
            'weight' => $this->faker->randomFloat(1,20,300),
            'calories' => $this->faker->numberBetween(0,10000),
            'exercise_time' => $this->faker->time(),
            'exercise_content' => $this->faker->sentence(),
        ];
    }
}
