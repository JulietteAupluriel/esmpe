<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_fr' => $this->faker->sentence(),
            'title_nl' => $this->faker->sentence(),
            'body_fr' => $this->faker->text($maxNbChars = 3000),
            'body_nl' => $this->faker->text($maxNbChars = 3000),
            'date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '1 year'),
            'schedule_fr' => $this->faker->text($maxNbChars = 13),
            'schedule_nl' => $this->faker->text($maxNbChars = 13),
            'venue_fr' => $this->faker->address(),
            'venue_nl' => $this->faker->address(),
            'speaker_fr' => $this->faker->company(),
            'speaker_nl' => $this->faker->company(),
            'website' => $this->faker->url()
         
        ];
    }
}
