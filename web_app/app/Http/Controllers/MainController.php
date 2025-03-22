<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function addproduct(Request $request)
{
    // Validate incoming data
    $request->validate([
        'brand'         => 'required|string',
        'product_name'  => 'required|string|max:255',
        'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'quantity'      => 'required|integer',
        'cost_price'    => 'required|numeric',
        'sell_price'    => 'required|numeric',
    ]);

    // Handle file upload if a file is provided
    if ($request->hasFile('product_image')) {
        $imagePath = $request->file('product_image')->store('products', 'public');
    } else {
        $imagePath = null;
    }

    // Create and save the product (assuming you have a Product model)
    $product = new Product();
    $product->brand = $request->brand;
    $product->product_name = $request->product_name;
    $product->product_image = $imagePath;
    $product->quantity = $request->quantity;
    $product->cost_price = $request->cost_price;
    $product->sell_price = $request->sell_price;
    $product->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Product added successfully!');
}

}
