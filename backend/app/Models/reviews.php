<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'descripcion',
        'rating',
        'bootcamp_id',
        'user_id',
        
    
    ];
}
