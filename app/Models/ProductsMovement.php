<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsMovement extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'user_id', 'action', 'quantity'];

    /**
     * Get the product associated with the movement.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the user who performed the movement.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}