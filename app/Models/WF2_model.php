<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WF2_model extends Model
{
    use HasFactory;
    protected $table = 'restaurant';
   /* public static function restaurant_results(){
        return [
            ['title'=>'Waffle House'],
            ['title'=>'Good Fellas Grill'],
            ['title'=>'India Palace'],
            ['title'=>'Top Shelf Mexican Restaurant'],
            ['title'=>'Burger Mania']
        ];
    }*/

    public function scopeFilter($query, array $filters){
        
        if($filters['city'] ?? false){
            $query->where('city', 'like', request('city'));
        };
    }
}
