<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'name' => $this->faker->lastName(),
            'lang' =>  Arr::random(['fr', 'nl']),
            'email' => $this->faker->email(),
            'noemail' => $this->faker->boolean(),
            'phone' => $this->faker->phoneNumber(),
            'commune' => Arr::random(['1150', '1160', '1170', '1200']),
            'national' => 12121212312
        ];
    }
}
