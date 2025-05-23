<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function order_product()
    {
        return $this->hasMany(Order_product::class, 'order_id', 'id');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');

    }

    public function saleUser()
    {
        return $this->belongsToMany(User::class, 'sales_statistics', 'order_id', 'user_id');
    }
}
