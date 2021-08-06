<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_id',
        'outlet_id',
        'name',
        'phone',
        'email',
        'city',
        'shipping_charge',
        'shipping_address',
        'note',
        'amount',
        'discount_amount',
        'amount_after_discount',
        'coupon_id',
        'paid_by',
        'payment_initiation_server_response',
        'payment_validation_server_response',
        'order_status',
        'payment_status',
        'is_delivered',
        'is_active',
    ];

    public function order_products()
    {
        return $this->hasMany(OrderProducts::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
