<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'name',
        'completes'
    ];

    // Ensure completes is returned as an integer (not string)
    protected $casts = [
        'completes' => 'integer'
    ];
}
