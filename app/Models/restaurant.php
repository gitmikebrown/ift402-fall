<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    use HasFactory, HasFactory;
    protected $table = 'restaurant';
    protected $primarykey = 'restaurantID';
    

    protected $fillable = [
        'owner_ID',
        'menu_ID',
        'phoneNumber',
        'street',
        'city',
        'state',
        'zip',
        'description',
        'name'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

}
