<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class LogoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text($maxNbChars = 13),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'url_fr' => $this->faker->url(),
            'url_nl' => $this->faker->url(),
            'order' => $this->faker->randomDigit(),
            'page' => Arr::random(['home', 'about']),
        ];
    }
}
