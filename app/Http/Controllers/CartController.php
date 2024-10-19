<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
        // Get the product details from the database (assuming you have a Product model)
        $product = \App\Models\Product::find($id);

        // Get the cart from session
        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        if (isset($cart[$id])) {
            // Increase the quantity of the product in the cart
            $cart[$id]['quantity']++;
        } else {
            // Add the product to the cart with quantity = 1
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image // Optional if you're storing images
            ];
        }

        // Store the cart back in session
        session()->put('cart', $cart);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function index()
    {
        // Get the cart from session
        $cart = session()->get('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed successfully!');
    }

    public function update(Request $request, $id)
{
    $cart = session()->get('cart');

    if (isset($cart[$id])) {
        if ($request->input('action') == 'increase') {
            $cart[$id]['quantity']++;
        } elseif ($request->input('action') == 'decrease' && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
        }
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Cart updated successfully!');
}

}
