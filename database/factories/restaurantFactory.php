<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
require_once 'vendor/autoload.php';
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class restaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'owner_ID' => mt_rand(1, 1000),
                'menu_ID' => mt_rand(1, 10),
                'phoneNumber' => mt_rand(5553001001,5553009999),
                'street' => Str::random(10),
                'city' => fake()->randomElement(new \ArrayIterator(['Phoenix', 'LA', 'San Francisco', 'Austin', 'New York', 'Malibu'])),
                'state' => fake()->randomElement(new \ArrayIterator(['AZ', 'CA', 'TX', 'NY'])),
                'zip' => mt_rand(85001,85099),
                'description'=> Str::random(100),
                'name' => fake()->name()
            ];

                   
    }
}
