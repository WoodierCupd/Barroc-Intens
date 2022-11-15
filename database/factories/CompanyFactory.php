<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'phone' => fake()->phoneNumber(),
            'street' => fake()->streetName(),
            'house_number' => rand(1,200),
            'city' => fake()->city(),
            'country_code' => fake()->countryCode(),
            'bkr_checked' => (rand(0,1) == 1) ? fake()->dateTime() : null,
        ];
    }
}
