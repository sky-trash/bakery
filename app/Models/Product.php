<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Filterable;
    protected $table = 'products';
    protected $guarded = [];

    public function baskets()
    {
        return $this->hasMany(Basket::class, 'product_id', 'id');
    }

    public function order_product()
    {
        return $this->hasMany(Order_product::class, 'product_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

}
