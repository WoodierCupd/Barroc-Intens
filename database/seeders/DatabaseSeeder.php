<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\CustomInvoice;
use App\Models\Maintenance_appointment;
use App\Models\Note;
use App\Models\Product;
use App\Models\Product_category;
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
//        Maakt alle rollen aan voor users
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

        $head_maintenance = Role::create([
            'name' => 'head-maintenance',
        ]);


        $coffee_machine = Product_category::create([
            'name' => 'coffee machine',
            'is_employee_only' => 0,
        ]);

        $beans = Product_category::create([
            'name' => 'coffee beans',
            'is_employee_only' => 0,
        ]);

//        Maakt admin account aan
        User::factory()->create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $admin->id,
        ]);

//        Maakt users aan
        $customers = User::factory(20)->create(['role_id' => $klant->id]);
        User::factory(3)->create(['role_id' => $purchase->id]);
        $sales = User::factory(3)->create(['role_id' => $sales->id]);
        User::factory(3)->create(['role_id' => $finance->id]);
        $maintenance = User::factory(3)->create(['role_id' => $maintenance->id]);
        User::factory(1)->create(['role_id' => $head_maintenance->id]);
//        Maakt companies aan die gelinkt zijn aan de customers die hiervoor zijn aangemaakt.
        $companies = collect();
        foreach ($customers as $customer){
            $companies->push(Company::factory()->create(['contact_id' => $customer->id]));

        }
        foreach ($companies as $company){
            if (rand(0, 1) == 1){
                Maintenance_appointment::factory()->create(['company_id' => $company->id, 'responsible' => $maintenance->random()->id]);
                Note::factory()->create(['company_id' => $company->id, 'author_id' => $sales->random()]);
            } else {
                CustomInvoice::factory()->create(['company_id' => $company->id]);
            }
        }

        Product::factory(6)->create(['product_category_id' => $coffee_machine->id]);
        Product::factory(12)->create(['product_category_id' => $beans->id]);
    }
}
