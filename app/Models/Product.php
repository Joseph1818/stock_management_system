<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    
    use HasFactory;

    protected $fillable = ['name', 'product_category_id', 'quantity', 'price'];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    /**
     * Get the product movements for the product.
     */
    public function movements()
    {
        return $this->hasMany(ProductsMovement::class);
    }
}
