<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeaType;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teas>
 */
class TeasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'user_id' => User::factory(),
            'tea_type_id' => $this->faker->randomElement(TeaType::pluck('id')),
            'vendor' => fake()->company(),
            'url' => fake()->url(),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 1, 100),
            'weight_grams' => fake()->numberBetween(100, 1000),
            'year' => fake()->year(),
            'production_batch' => fake()->word(),
            'packaging_type' => fake()->word(),
            'region_of_origin' => fake()->word(),
            'tasting_notes' => fake()->sentence(),
            'aging_potential' => fake()->word(),
            'recommended_brewing_temp_celsius' => fake()->numberBetween(80, 100),
            'recommended_steeping_time_seconds' => fake()->numberBetween(30, 120),
            'recommended_grams_per_100ml' => fake()->numberBetween(1, 10),
            'production_date' => fake()->date(),
            'purchase_date' => fake()->date(),
            'storage_notes' => fake()->sentence(),
            'rating' => fake()->numberBetween(1, 5),
            'personal_notes' => fake()->sentence(),
        ];
    }
}
