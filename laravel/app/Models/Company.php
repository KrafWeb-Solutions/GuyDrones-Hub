<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'domain',
        'subscription_plan',
        'email',
        'phone',
        'address',
        'logo',
        'active',
    ];

    /**
     * Get all users that belong to this company.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}