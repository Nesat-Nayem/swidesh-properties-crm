<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
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
        'phone_type',
        'telephone',
        'email',
        'lead_value',
        'assigned',
        'status',
        'notes',
        'source',
        'category',
        'tags',
        'last_contacted',
        'total_budget',
        'target_date',
        'content_type',
        'brand_name',
        'company_name',
        'street',
        'city',
        'state',
        'zip_code',
        'country',
        'website',
    ];

        /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'last_contacted' => 'date',
        'target_date' => 'date',
    ];
}
