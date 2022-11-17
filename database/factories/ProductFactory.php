<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->text(rand(1000, 2000)),
            'price' => fake()->randomFloat(2, 5, 200),
            'image_path' => (rand(0,1) == 1) ? asset('img/machine-bit-deluxe.png') : asset('img/machine-bit-light.png'),
            'stock' => fake()->randomFloat(0, 0, 20),
        ];
    }
}
