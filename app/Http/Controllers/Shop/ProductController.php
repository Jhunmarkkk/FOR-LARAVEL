<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review; // Import the Review model
use Illuminate\Http\Request;

class ProductController extends Controller{
    /**
     * Display all of the products
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        // Update this method as needed
        $all = Product::all(); // For example, fetch all products directly
        return view('frontend.shop', compact('all'));
    }



    /**
     * Display the specified product.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){
        // Fetch reviews for the current product
        $reviews = Review::where('product_id', $product->id)->get();
        return view('frontend.single-product', compact('product', 'reviews'));
    }
}
