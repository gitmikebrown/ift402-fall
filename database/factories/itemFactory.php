<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

require_once 'vendor/autoload.php';
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class itemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'restaurant_ID'=>mt_rand(10001, 10999),
            //'menu_ID'=>mt_rand(1, 10),
            'itemName'=>fake()->randomElement(new \ArrayIterator(['Chicken Sandwich', 'Hamburger', 'Sub Sandwich', 'Pizza', 'Chicken Wings', 'Burrito'])),
            'description'=>fake()->paragraph(2),
            'price'=>mt_rand(100, 10000) / 100,
        ];
    }
}
