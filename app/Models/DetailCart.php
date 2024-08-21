<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DetailCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'cart_id',
        'product_id',
    ];
    public function Cart() :BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
