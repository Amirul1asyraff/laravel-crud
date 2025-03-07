<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('product.index',['products' => $products]);
        
    }

    public function create()
    {
    return view('product.create');
    } 

    public function store(Request $request){
        $data = $request->validate([
            'name'  => 'required|string|max:255', 
            'qty'   => 'required|integer', // Use 'integer' instead of 'number'
            'price' => 'required|numeric|min:0,2', // 'numeric' ensures a valid number
            'description' => 'nullable' 
        ]);
    
        $newProduct = Product::create($data);
        return redirect()->route('product.index')->with('success', 'Product added successfully!');
    }

    public function edit(Product $product){
    dd($product);
    
    }
    
    
}

    



