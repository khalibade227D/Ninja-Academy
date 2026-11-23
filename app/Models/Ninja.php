<?php

namespace App\Models;

use Database\Factories\NinjaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ninja extends Model
{
    /** @use HasFactory<NinjaFactory> */
    use HasFactory;

    protected $fillable = ['name', 'rank', 'skill', 'bio', 'dojo_id'];

    /**
     * Get the dojo that this ninja belongs to.
     */
    public function dojo(): BelongsTo
    {
        return $this->belongsTo(Dojo::class);
    }
}
