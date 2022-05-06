<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 7),
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->sentence(3),
            'sinopsis' => $this->faker->paragraph(7),
        ];
    }
}
