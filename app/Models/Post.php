<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_name',
        'email',
        'phone',
        'address',
        'location',
        'ad_type',
        'category',
        'property_type',
        'price',
        'address_property',
        'postal_code',
        'city',
        'canton',
        'surface_area',
        'rooms',
        'bathrooms',
        'floor',
        'features',
        'description',
        'photos',
        'documents',
        'publication_duration',
        'payment_method',
    ];

    protected $casts = [
        'features' => 'array',
        'photos' => 'array',
        'documents' => 'array',
    ];
      public function user(){
        return $this->belongsTo(User::class);
    }
}
