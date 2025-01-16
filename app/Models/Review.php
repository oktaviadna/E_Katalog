<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if it follows naming convention)
    protected $table = 'reviews';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'product_id',
        'reviewer',
        'comment', // Updated column name
        'rating',
    ];

    // Define the relationship with the Product model
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
