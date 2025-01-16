<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if it follows naming convention)
    protected $table = 'categories';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'description',
    ];

    // Define the relationship with the Product model
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
