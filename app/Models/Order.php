<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'name_user',
        'email_user',
        'number_user',
        'address_user',
        'day',
        'order_amount',
        'note',
        'payment_method_id',
        'status_order_id',
    ];
    use HasFactory;
    use SoftDeletes;
    public function DetailOrder() :HasMany {
        return $this->hasMany(DetailOrder::class);
    }
    public function User() :BelongsTo {
        return $this->belongsTo(User::class);
    }
}
