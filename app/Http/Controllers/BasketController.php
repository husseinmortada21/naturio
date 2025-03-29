<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class BasketController extends Controller
{
    
    public function index()
    {
        $basket = session()->get('basket', []);
        return view('basket.index', compact('basket'));
    }

    /**
     * Add product to basket.
     */
    public function add(Product $product)
    {
        $basket = session()->get('basket', []);

        if (isset($basket[$product->id])) {
            $basket[$product->id]['quantity']++;
        } else {
            $basket[$product->id] = [
                'id'       => $product->id,
                'name'     => $product->name,
                'price'    => $product->price,
                'image'    => $product->image,
                'quantity' => 1,
            ];
        }

        session()->put('basket', $basket);
        return redirect()->back()->with('success', 'Product added to basket!');
    }

    /**
     * Remove product from basket.
     */
    public function remove(Product $product)
    {
        $basket = session()->get('basket', []);

        if (isset($basket[$product->id])) {
            unset($basket[$product->id]);
            session()->put('basket', $basket);
        }

        return redirect()->route('basket')->with('success', 'Product removed from basket.');
    }

    /**
     * Show checkout page.
     */
    public function checkout()
    {
        $basket = session()->get('basket', []);
        return view('basket.checkout', compact('basket'));
    }

    /**
     * Confirm the order, save it in DB and clear basket.
     */
    public function confirmCheckout(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $basket = session()->get('basket', []);

        if (empty($basket)) {
            return redirect()->route('basket')->with('error', 'Your basket is empty!');
        }

        // ✅ Save order in database
        Order::create([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'address' => $request->address,
            'items'   => json_encode($basket),
        ]);

        session()->forget('basket');

        return redirect()->route('products')->with('success', 'Your order has been confirmed!');
    }
}
