<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>User::where('id', '=', '1')->get('name'),
            'email' => User::where('id', '=', '1')->get('email'),
            'address' => $this->faker->streetAddress,
            'class' => 'economy',
            'status' => 'confirmed',
            'departure' => $this->faker->city,
            'departure_date' => 'Monday, January 5, 2023 01:25',
            'arrival_date' => 'Monday, January 6, 2023 01:25',
            'user_id' => User::first(),
        ];
    }
}
