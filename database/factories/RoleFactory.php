<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'role_name' => fake()->randomElement(['Admin', 'Contributor', "Subscriber']),
            'description' => fake(0)->paragraph(),
        ];
    }
}
