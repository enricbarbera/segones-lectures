<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Autor;

class TitolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'synthesis' => $this->faker->paragraph(),
            'autor_id' => Autor::get()->random()->id,
            'genre' => $this->faker->word(),
            'language' => $this->faker->word(),
            'edition_year' => $this->faker->date(),
        ];
    }
}
