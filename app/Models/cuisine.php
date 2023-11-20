<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuisine extends Model
{
    use HasFactory, HasFactory;
    protected $table = 'cuisine';
    protected $primarykey = 'cuisineCat';
    
    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        
    ];
}
