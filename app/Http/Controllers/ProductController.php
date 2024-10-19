<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import the Storage facade

class ProductController extends Controller
{
    // Show the list of products
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products.index', compact('products'));
    }

    // Show the form to create a new product
    public function create()
    {
        return view('products.create');
    }
    

public function home()
{
    $products = Product::all(); // Fetch all products from the database
    return view('home', compact('products')); // Pass products to the view
}

    
    

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }

        $product->save();
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Show a single product
    public function show($id)
    {
        $product = Product::findOrFail($id); // Find product by ID
        return view('products.show', compact('product'));
    }

    // Show the form to edit a product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update an existing product
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::delete($product->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }

        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    
}
