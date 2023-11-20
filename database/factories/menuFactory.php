<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
require_once 'vendor/autoload.php';
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_ID'=>mt_rand(1, 10),
            'restaurant_ID'=>mt_rand(1, 10),
            'menu_ID'=>mt_rand(1, 10),
        ];
    }
}
