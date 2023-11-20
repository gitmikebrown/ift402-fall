<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory, HasFactory;
    protected $table = 'menu';
    protected $primarykey = 'menuID';
    
    protected $fillable = [
        'item_ID',
        'restaurant_ID',
        'menu_ID',
        'title',
        'menuOrder',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        
    ];
}
