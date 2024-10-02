<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'position',
        'role',
        'email',
        'phone',
        'last_seen',
    ];
}
