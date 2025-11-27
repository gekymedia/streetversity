<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'is_approved',
        'blog_post_id',
        'user_id',
        'guest_name',
        'guest_email',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    public function blogPost(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getAuthorNameAttribute()
    {
        return $this->user ? $this->user->name : $this->guest_name;
    }

    public function getAuthorEmailAttribute()
    {
        return $this->user ? $this->user->email : $this->guest_email;
    }
}
