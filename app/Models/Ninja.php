<?php

namespace App\Models;

use Database\Factories\NinjaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    /** @use HasFactory<NinjaFactory> */
    use HasFactory;

    protected $fillable = ['name', 'rank', 'skill', 'bio'];
}
