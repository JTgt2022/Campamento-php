<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'descripcion',
        'weeks',
        'enroll_cost',
        'minimum_skill',
        'bootcamp_id',
    
    ];
}
