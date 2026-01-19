<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SponsorshipInquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'amount',
        'message',
        'status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];
}
