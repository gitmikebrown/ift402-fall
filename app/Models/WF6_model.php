<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WF6_model extends Model
{
    use HasFactory;
    public static function resturant(){
        return [
            'name'=>'Chick-fil-A',
            'store_manager' => 'Tom',
            'email'=>'me@chickfila.com',
            'address_street'=>'123 Anytown',
            'address_city'=>'Phoenix',
            'address_state'=>'AZ',
            'address_zip'=>'85001',
            'phone_number'=>'555-555-5555'
        ];
    }

    public static function resturant_items(){
        return [
            [
                'title'=>'taco',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],[
                'title'=>'Quesadilla',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],[
                'title'=>'sandwitch',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]
        ];
    }
}
