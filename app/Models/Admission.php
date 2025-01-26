<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'email',
        'phone',
        'education_level',
        'portfolio_path',
    ];
}

