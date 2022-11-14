<?php

namespace Database\Factories;

use App\Models\Maintenance_appointment;
use App\Models\User;
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
            'date_added' => fake()->dateTimeBetween('+2 days', '+60 days'),
            'type' => fake()->numberBetween(0, 1),
            'responsible' => if(rand(0, 2))


//             random(User::all()->where('role_id', '6')),
        ];
    }
}
