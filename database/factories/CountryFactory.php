<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         $countries = ['Bangladesh','India','Pakistan', 'United Kindom','United States Of America'];
         return [
            'country_name' =>fake()->unique()->randomElement($countries),
            'flag_image' => null,
        ];
    }
}
