<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailOrder extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'total_price',
        'order_id',
        'product_id',
    ];
    use HasFactory;
    public function Order() :BelongsTo {
        return $this->belongsTo(Order::class);
    }
    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
