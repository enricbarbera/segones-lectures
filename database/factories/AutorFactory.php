<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'birthDate' => $this->faker->date(),
        ];
    }
}
