<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ImageProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'link',
        'product_id',
    ];
    public function Product() :BelongsTo 
    {
        return $this->belongsTo(Product::class);
    }
}
