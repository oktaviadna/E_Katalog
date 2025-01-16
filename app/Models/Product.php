<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if it follows naming convention)
    protected $table = 'products';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price',
        'image_url',
        'stocks',
        'rating',
    ];

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define the relationship with the Review model
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
