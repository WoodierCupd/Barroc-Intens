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
            'stock' => fake()->randomFloat(0, 0, 10),
            'image_path' => (rand(0, 1) == 1) ? 'https://filerepository.itslearning.com/e111f4bb-8a86-4487-99ac-66cc9a577a3e?Token=jbcGACMDAAARAm5jAAAAACAAMW91IKDHGipWeLUZJRi9aX9zpegDTCgm5LfVjx86SDcAAA' : 'https://filerepository.itslearning.com/beb82afd-3398-4a41-8199-509bfdfb1094?Token=jbcGACMDAAA0Am5jAAAAACAAEjDlOtHSVaT7Jpbv2kqKFeAOU-R0-IOKl1Zm7FlY3S8AAA',
        ];
    }
}
