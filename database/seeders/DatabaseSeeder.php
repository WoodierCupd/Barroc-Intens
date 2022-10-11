<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $admin = Role::create([
            'name' => 'admin',
        ]);

        $klant = Role::create([
            'name' => 'klant',
        ]);

        $purchase = Role::create([
            'name' => 'purchase',
        ]);

        $sales = Role::create([
            'name' => 'sales',
        ]);

        $finance = Role::create([
            'name' => 'finance',
        ]);

        $maintenance = Role::create([
            'name' => 'maintenance',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $admin->id,
        ]);
    }
}
