<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'no_of_days'=> $this->faker->randomDigit,
             'cost'=> $this->faker->randomFloat(2,100,10000),
             'hotels'=> $this->faker->company,
             'contact_no'=> $this->faker->e164PhoneNumber,
             'discount'=> $this->faker->randomFloat(2,100,5000)
        ];
    }
}
