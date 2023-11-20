<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory, HasFactory;
    protected $table = 'item';
    protected $primarykey = 'itemID';
    
    protected $fillable = [
        'restaurant_ID',
        'menu_ID',
        'itemName',
        'description',
        'price',
        
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        
    ];
}
