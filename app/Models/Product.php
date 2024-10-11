<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'stock',
        'status',
        'category_products_id', // Jangan lupa tambahkan ini
    ];

    public function categoryproducts()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_products_id');
    }
}
