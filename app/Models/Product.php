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
        'discount',
        'stock',
        'category_products_id', // Jangan lupa tambahkan ini
        'status_produk',
    ];

    public function categoryproducts()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_products_id');
    }

    public function getFinalPriceAttribute()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }

    // Tambahkan fungsi untuk mengecek apakah produk bisa di-checkout
    public function isAvailableForCheckout()
    {
        return $this->stock > 0 && $this->status_produk == 'public';
    }
}
