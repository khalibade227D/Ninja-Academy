<?php

namespace App\Models;

use Database\Factories\DojoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dojo extends Model
{
    /** @use HasFactory<DojoFactory> */
    use HasFactory;

    protected $fillable = ['name', 'location', 'description'];

    /**
     * Get the ninjas that belong to this dojo.
     */
    public function ninjas(): HasMany
    {
        return $this->hasMany(Ninja::class);
    }
}
