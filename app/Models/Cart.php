<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    ];

    public function User() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function DetailCart() :HasMany
    {
        return $this->hasManHasMany(DetailCart::class);
    }
}
