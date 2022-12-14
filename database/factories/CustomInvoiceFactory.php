<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomInvoice>
 */
class CustomInvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => Carbon::now(),
            'paid_at' => (rand(0,1) == 1) ? fake()->dateTimeBetween('-365 days', '-1 days') : null,
            'amount' => fake()->randomFloat(2, 100, 250),
        ];
    }
}
