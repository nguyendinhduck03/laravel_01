<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'day_add',
        'description',
        'category_id',
    ];
    public function Category() :BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function ImageProduct() :HasMany
    {
        return $this->hasMany(ImageProduct::class);
    }
    public function Comment() :HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function DetailCart()
    {
        return $this->hasMany(DetailCart::class, 'product_id');
    }
    public function DetailOrder()
    {
        return $this->hasMany(DetailOrder::class, 'product_id');
    }
}
