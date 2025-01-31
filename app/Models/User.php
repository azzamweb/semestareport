<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * Relasi dengan laporan (Report)
     */
    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
