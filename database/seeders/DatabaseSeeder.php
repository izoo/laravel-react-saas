<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test U  ser',
            'email' => 'test@example.com',
            'password'=> bcrypt('123456789'),
        ]);

        Feature::create([
            'image'=>'https://www.136home.com/wp-content/uploads/2023/01/wholesomeyum-Air-Fryer-Sausage-6-edited.jpeg',
            'route_name'=>'feature1.index',
            'name'=> 'Calculate Sum',
            'description'=> 'Calculate sum of two numbers',
            'required_credits'=>1,
            'active'=>true,
            ]);

            Feature::create([
                'image'=>'https://evergoodfoods.com/wp-content/uploads/2020/05/070834122148-HotLinkFront.png',
                'route_name'=>'feature2.index',
                'name'=> 'Calculate Sum',
                'description'=> 'Calculate sum of two numbers',
                'required_credits'=>3,
                'active'=>true,
                ]);

            Package::create([
                'name'=>'Basic',
                'price'=>5,
                'credits'=>20
            ]);

            Package::create([
                'name'=>'Silver',
                'price'=>20,
                'credits'=>100
            ]);

            Package::create([
                'name'=>'Gold',
                'price'=>50,
                'credits'=>500
            ]);
               
    }
}
