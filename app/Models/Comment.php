<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'day',
        'user_id',
        'product_id',
    ];

    public function Product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function User() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
