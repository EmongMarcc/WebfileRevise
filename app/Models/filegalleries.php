<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filegalleries extends Model
{
    use HasFactory;
    protected $casts = [
        'fg_file' => 'array',
    ];
}
