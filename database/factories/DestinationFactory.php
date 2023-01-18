<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'place_name' => $this->faker->country,
            'descriptions' => $this->faker->text,
        ];
    }
}
