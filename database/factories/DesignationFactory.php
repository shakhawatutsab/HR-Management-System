<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designation>
 */
class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $designation = ['CEO','Managine Direction','Project Manager', 'Software Developer','UX Deginer'];
        return [
            'designation_name' =>fake()->randomElement($designation),
            'parent_id' => null,
        ];
    }
}