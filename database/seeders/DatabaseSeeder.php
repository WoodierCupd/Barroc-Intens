<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
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

//        Maakt users aan voor testdata.
        $customers = User::factory(20)->create(['role_id' => $klant->id]);
        User::factory(3)->create(['role_id' => $purchase->id]);
        User::factory(3)->create(['role_id' => $sales->id]);
        User::factory(3)->create(['role_id' => $finance->id]);
        User::factory(3)->create(['role_id' => $maintenance->id]);

        foreach ($customers as $customer){
            Company::factory()->create(['contact_id' => $customer->id]);
        }
    }
}
