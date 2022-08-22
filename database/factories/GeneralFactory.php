<?php
namespace Database\Factories;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;


class GeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'intro_fr' => $this->faker->text($maxNbChars = 300),
            'intro_nl' => $this->faker->text($maxNbChars = 300),
            'aboutintro_fr' => $this->faker->text($maxNbChars = 300),
            'aboutintro_nl' => $this->faker->text($maxNbChars = 300),
            'about_fr' => $this->faker->text($maxNbChars = 3000),
            'about_nl' => $this->faker->text($maxNbChars = 3000),
            'legals_fr' => $this->faker->text($maxNbChars = 3000),
            'legals_nl' => $this->faker->text($maxNbChars = 3000),
            'formintro_fr' => $this->faker->text($maxNbChars = 300),
            'formintro_nl' => $this->faker->text($maxNbChars = 300),
            'hideprog' => Arr::random(['oui', 'non']),
        ];
    }
}
