<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 5),
            'address' => $this->faker->address(),
            'country' => $this->faker->country(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'birthday' => $this->faker->date(),
        ];
    }
}
