<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews by product.
     *
     * @param  int  $productId
     * @return \Illuminate\Http\Response
     */
    public function getReviewsByProduct($productId)
    {
        // Retrieve reviews by product ID
        $reviews = Review::where('product_id', $productId)->get();

        // Return the reviews (you can return as JSON, pass to a view, etc.)
        return response()->json($reviews);
    }
}
