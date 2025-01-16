<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Retrieve the category ID from the query parameter
        $categoryId = $request->query('category_id');

        // Retrieve products based on the category ID if provided
        if ($categoryId) {
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all();
        }

        // Return the products (you can return as JSON, pass to a view, etc.)
        return response()->json($products);
    }
}
