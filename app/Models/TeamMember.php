<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'bio',
        'photo',
        'social_media',
        'order',
    ];

    protected $casts = [
        'social_media' => 'array',
        'order' => 'integer',
    ];
}