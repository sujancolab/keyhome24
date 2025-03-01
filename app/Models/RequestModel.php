<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'search_type',
        'search',
        'npa',
        'city',
        'max_budget',
        'description',
        'full_name',
        'email',
        'phone',
    ];
    protected $table = 'requests';
}
