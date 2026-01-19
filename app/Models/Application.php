<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'full_name',
        'age',
        'email',
        'phone',
        'program',
        'statement',
        'portfolio',
        'status',
    ];

    protected $casts = [
        'age' => 'integer',
    ];
}
