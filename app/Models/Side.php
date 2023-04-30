<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Side extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
      /**
     * The entree's that belong to the cook.
     */
    public function cooks(): BelongsToMany
    {
        return $this->belongsToMany(Cook::class);
    }
}
