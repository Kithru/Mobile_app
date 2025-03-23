<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'product_name', 'productimage', 'quantity', 'cost_price', 'sell_price','description','rate','status'
    ];
}
