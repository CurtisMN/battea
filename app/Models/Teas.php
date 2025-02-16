<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'tea_type_id',
        'vendor',
        'url',
        'description',
        'price',
        'weight_grams',
        'year',
        'production_batch',
        'packaging_type',
        'region_of_origin',
        'tasting_notes',
        'aging_potential',
        'recommended_brewing_temp_celsius',
        'recommended_steeping_time_seconds',
        'recommended_grams_per_100ml',
        'production_date',
        'purchase_date',
        'storage_notes',
        'rating',
        'personal_notes',
    ];

    public function teaType()
    {
        return $this->belongsTo(TeaType::class);
    }
}
