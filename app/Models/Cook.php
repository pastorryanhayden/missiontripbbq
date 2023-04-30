<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cook extends Model
{
    use HasFactory;

    protected $fillable = [
        'cook_date',
        'signup_deadline',
        'pickup_time',
    ];

    protected $casts = [
        'cook_date' => 'date',
        'signup_deadline' => 'date',
    ];
     
    /**
     * The entree's that belong to the cook.
     */
    public function entrees(): BelongsToMany
    {
        return $this->belongsToMany(Entree::class);
    }
     /**
     * The side's that belong to the cook.
     */
    public function sides(): BelongsToMany
    {
        return $this->belongsToMany(Side::class);
    }
}
