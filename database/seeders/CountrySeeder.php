<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = file_get_contents(public_path() . '/countries/countries.json');
        $countries_array= json_decode($countries, true);
        // $countries_names=array_column($countries_array, 'name');
        foreach( $countries_array as $single_country){

            $country= new Country;
            $country->country_name= $single_country['name'];
            $country->country_code=$single_country['code'];
            $country->flag_image= strtolower($single_country['code']) .'.png';
            $country->save();

        }


        // Country::factory(count( $countries_names ))->create();
    }
}