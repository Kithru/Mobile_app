<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    
    public function addproduct(Request $request){

        $request->validate([
        //     'brand'         => 'required|string',
        //     'product_name'  => 'required|string|max:255',
            'productimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'quantity'      => 'required|integer',
        //     'cost_price'    => 'required|numeric',
        //     'sell_price'    => 'required|numeric',
        ]);

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            // Get filename
            $filename = time() . '_' . $file->getClientOriginalName();

            // file path (public/uploads)
            $destinationPath = public_path('uploads');

            // Move uploading file to the storage location
            $file->move($destinationPath, $filename);
            $filePath = 'uploads/' . $filename;
        } else {
            $filePath = null;
        }

        $product = new Product();
        $product->brand = $request->brand;
        $product->product_name = $request->product_name;
        $product->productimage = $filename;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->rate = 0;
        $product->cost_price = $request->cost_price;
        $product->sell_price = $request->sell_price;
        $product->save();

        session()->flash('success', 'Product added successfully!');
        return redirect()->back();
    }

    public function getProducts() {
        $products = Product::select('id', 'name', 'price', 'image_url')->paginate(10); // Fetch 10 products per page
        return response()->json($products);
    }

    public function searchByBrand(Request $request){
        $brand = $request->input('probrand') ?? $request->input('mprobrand');
        $type = $request->query('type', 'search');
        //  if ($type != 'search') {
        //     $type = 'manage';
        //  } 
        // $brand = $request->input('probrand');
        if (!$brand) {
            return redirect()->back()->with('error', 'Please select a brand');
        }
        
        $products = Product::where('brand', $brand)->get();

        if ($type === 'manage') {
            $manageproducts = $products;
            return view('manageproduct', compact('manageproducts', 'brand'));
        }

        return view('product', compact('products', 'brand'));
    }

    public function searchByProductName(Request $request){

        $productName = $request->input('product_name') ?? $request->input('mproduct_name');
        $type = $request->query('type', 'search');
        // if ($type != 'search') {
        //     $type = 'manage';
        //  } 
        if (!$productName) {
            return redirect()->back()->with('error', 'Please enter a product name');
        }

        $products = Product::where('product_name', 'LIKE', "%{$productName}%")->get();
        if ($type === 'manage') {
            $manageproducts = $products;
            return view('manage_products', compact('manageproducts', 'productName'));
        }

        return view('product', compact('products', 'productName'));
    }

    public function searchByProductCost(Request $request){

        $costPrice = $request->input('cost_price') ?? $request->input('mcost_price');
        $type = $request->query('type', 'search');
        // if ($type != 'search') {
        //     $type = 'manage';
        //  } 
        if (!$costPrice) {
            return redirect()->back()->with('error', 'Please enter a cost price');
        }

        $products = Product::where('cost_price', '>=', $costPrice)->get();

        if ($type === 'manage') {
            $manageproducts = $products;
            return view('manage_products', compact('manageproducts', 'costPrice'));
        }

        return view('product', compact('products', 'costPrice'));
    }

    public function searchByProductSellPrice(Request $request) {

        $sellPrice = $request->input('sell_price') ?? $request->input('msell_price');
        $type = $request->query('type', 'search');
        // if ($type != 'search') {
        //     $type = 'manage';
        // } 
        if (!$sellPrice) {
            return redirect()->back()->with('error', 'Please enter a sell price');
        }

        $products = Product::where('sell_price', '>=', $sellPrice)->get();

        if ($type === 'manage') {
            $manageproducts = $products;
            return view('product', compact('manageproducts', 'sellPrice'));
        }
        return view('product', compact('products', 'sellPrice')); 
    }

    public function searchManageByBrand(Request $request){
        $brand = $request->input('probrand') ?? $request->input('mprobrand');
        $type = $request->query('type', 'search');
        //  if ($type != 'search') {
        //     $type = 'manage';
        //  } 
        // $brand = $request->input('probrand');
        if (!$brand) {
            return redirect()->back()->with('error', 'Please select a brand');
        }
    }
    
}

