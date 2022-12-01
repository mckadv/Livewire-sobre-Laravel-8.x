<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrudProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
		    'name' => $this->faker->sentence,
		    'description' => $this->faker->text(),
		    'quantity' => $this->faker->randomElement([2, 4, 8, 15, 30]),
		    'price' => $this->faker->numberBetween(5, 100),
		    'user_id' => User::factory(), //Generates a User from factory			
        ];
    }
}
