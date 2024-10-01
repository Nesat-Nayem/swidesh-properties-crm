<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'full_name',
        'account',
        'email',
        'phone',
        'address',
        'state',
        'city',
        'country',
        'postal_code',
        'dob',
        'status',
        'remarks',
        'next_followup_date',
        'next_followup_time',
        'description',
    ];
}
