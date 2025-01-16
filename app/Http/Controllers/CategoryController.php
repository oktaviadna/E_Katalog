<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all categories from the database
        $categories = Category::all();

        // Return the categories (you can return as JSON, pass to a view, etc.)
        return response()->json($categories);
    }
}
