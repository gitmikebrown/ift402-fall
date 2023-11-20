<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();
        \App\Models\cuisine::factory(20)->create();
        \App\Models\item::factory(10000)->create();
        \App\Models\menu::factory(1000)->create();
        \App\Models\restaurant::factory(200)->create();

         /*\App\Models\User::factory()->create([
             'fname' => Str::random(10),
             'lname' => Str::random(10),
             'email' => Str::random(10).'@gmail.com',
             'password' => Hash::make('password')
             
         ]);*/


         

    }
}
