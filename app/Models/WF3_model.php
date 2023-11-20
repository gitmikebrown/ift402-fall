<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WF3_model extends Model
{
    use HasFactory;
    public static function menu_items(){
        return [
            ['title'=>'Chick-fil-A Sandwich Meal'],
            ['title'=>'Chick-fil-A Deluxe Meal'],
            ['title'=>'Chick-fil-A Spicy Chicken Sandwich Meal'],
            ['title'=>'Spicy Chicken Sandwich Deluxe Meal']
            
        ];
    }

    public static function resturant(){
        return [
            'name'=>'Chick-fil-A Sandwich Meal',
            'address_street'=>'123 Anytown',
            'address_city'=>'Phoenix',
            'address_state'=>'AZ',
            'address_zip'=>'85001',
            'phone_number'=>'555-555-5555'
        ];
    }
}
