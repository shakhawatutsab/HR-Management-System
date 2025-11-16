<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all()->pluck('id')->toArray();
        return [
            'user_id' => fake()->unique()->randomElement($users),
            'profile_picture' => fake()->imageUrl(),
            'designation_id' => fake()->numberBetween(1,20),
            'department_id' => fake()->numberBetween(1,20),
            'country_id' => fake()->numberBetween(1,20),
            'mobile' =>fake()->phoneNumber(),
            'gender' => 'Male',
            'joining_date' => fake()->date(),
            'birth_date' => fake()->date(),
            'reporting_to' => fake()->numberBetween(1,20),
            'language_id' => fake()->numberBetween(1,20),
            'address' => fake()->address(),
            'about' => fake()->paragraph(),
            'loging_permission' => fake()->boolean(),
            'notification_permission' => fake()->boolean(),
            'hourly_rate' => fake()->randomFloat(),
            'slack_username' => fake()->userName(),
            'skills' => fake()->paragraph(),

        ];
    }
}