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
        User::factory()->create([
            'name' => 'User',
            'username' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $klant->id,
        ]);
        User::factory()->create([
            'name' => 'Purchase',
            'username' => 'Purchase',
            'email' => 'purchase@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $purchase->id,
        ]);
        User::factory()->create([
            'name' => 'Sales',
            'username' => 'Sales',
            'email' => 'sales@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $sales->id,
        ]);
        User::factory()->create([
            'name' => 'Finance',
            'username' => 'Finance',
            'email' => 'finance@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $finance->id,
        ]);
        User::factory()->create([
            'name' => 'Maintenance',
            'username' => 'Maintenance',
            'email' => 'maintenance@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $maintenance->id,
        ]);
        User::factory()->create([
            'name' => 'Head-Maintenance',
            'username' => 'Head-Maintenance',
            'email' => 'headmaintenance@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $head_maintenance->id,
        ]);

//        Maakt users aan
        $customers = User::factory(200)->create(['role_id' => $klant->id]);
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
            CustomInvoice::factory(rand(2,5))->create(['company_id' => $company->id]);
            if (rand(0, 1) == 1){
                Maintenance_appointment::factory()->create(['company_id' => $company->id, 'responsible' => $maintenance->random()->id]);
                Note::factory()->create(['company_id' => $company->id, 'author_id' => $sales->random()]);
            }
        }
        for ($i = 0; $i < 6; $i++){
            Product::factory()->create(['product_category_id' => $coffee_machine->id, 'image_path' => (rand(0,1) == 1) ? asset('img/machine-bit-deluxe.png') : asset('img/machine-bit-light.png')]);
        }
        for ($i = 0; $i < 12; $i++){
            Product::factory()->create(['product_category_id' => $beans->id, 'image_path' => (rand(0,1) == 1) ? asset('https://www.koffievoordeel.nl/media/catalog/product/c/w/cw101701_illy_beans_classico_bonen-1.png?quality=95&fit=bounds&height=450&width=700&bg-color=FFF') : asset('https://m.media-amazon.com/images/I/61C3UnayK0L._SX522_.jpg')]);
        }
    }
}
