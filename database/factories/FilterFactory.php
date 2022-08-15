<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_fr' => $this->faker->word(),
            'name_nl' => $this->faker->word(),
        ];
    }
}
