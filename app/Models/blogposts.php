<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogposts extends Model
{
    use HasFactory;
    protected $casts = [
        'audio' => 'array',
    ];
}
