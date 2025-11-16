<?php

namespace Database\Factories;

use Faker\Guesser\Name;
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
         $countries = file_get_contents( public_path() . '/countries/countries.json');
         $countries_array = json_decode($countries, true);
         $countries_names = array_column($countries_array, 'name');
         $countries_codes = array_column($countries_array, 'code');

         return [
            'country_name' =>fake()->unique()->randomElement($countries_names),
            'country_code' =>fake()->unique()->randomElement($countries_codes),
            'flag_image' => null,
        ];
    }
}
