<?php

namespace Database\Factories;

use App\Models\Maintenance_appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance_appointment>
 */
class Maintenance_appointmentFactory extends Factory
{
    protected $model = Maintenance_appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'remark' => fake()->sentence(rand(150, 300)),
            'date_added' => fake()->dateTime(),
        ];
    }
}
