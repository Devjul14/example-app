<?php

namespace Database\Factories;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'golongan_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'reg' => $this->faker->unixTime(),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'nohp' => $this->faker->phoneNumber(),
        ];
    }
}
