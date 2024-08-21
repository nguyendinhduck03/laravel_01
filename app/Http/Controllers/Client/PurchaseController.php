<?php

namespace App\Http\Controllers\Client;

use App\Models\Cart;
use App\Models\DetailOrder;
use App\Models\User;
use App\Models\Order;
use App\Models\DetailCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function cartAdd(Request $request) {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $cart_id = Cart::where('user_id', Auth::user()->id)->get()->first()->id;
   
        DetailCart::create([
            'quantity' => $quantity,
            'product_id' => $product_id,
            'cart_id' => $cart_id,
        ]);

        return redirect()->back();
    }

    public function cartShow() {
        $cart_id = Cart::where('user_id', Auth::user()->id)->value('id');
        $products = DetailCart::where('cart_id', $cart_id)->with('product.imageproduct')->get();
        return view('clients.purchases.cart', compact('products'));
    } 
    public function cartDelete($id) {
        $product = DetailCart::findOrFail($id);
        $product->delete();

        return redirect()->back();
    }

    public function checkout(Request $request) {

        $user_id = $request->input('user_id');
        $products = $request->input('products');
        $order_amount = $request->input('order_amount');
        $user = User::findOrFail($user_id);
        return view('clients.purchases.checkout', compact('user','products','order_amount', 'user_id'));
    }

    public function order(Request $request) {
        // dd($request->all());
        $data = [
            'user_id' => $request->input('user_id'),
            'name_user' => $request->input('name'),
            'email_user' => $request->input('user_id'),
            'number_user' => $request->input('email'),
            'address_user' => $request->input('address'),
            'day' => now(),
            'order_amount' => $request->input('order_amount'),
            'note' => $request->input('note'),
        ];

        $order = Order::create($data);

        foreach ($request->products as $product) {
            $dataa = [
                'name' => $product['name'],
                'quantity' => $product['quantity'],
                'price' => $product['price'],
                'total_price' => $product['total_price'],
                'order_id' => $order->id,
                'product_id' => $product['product_id'],
            ];
    
            DetailOrder::create($dataa);
        }

        $cartItems = Cart::where('user_id', $request->input('user_id'))->get();
        foreach ($cartItems as $cartItem) {
            $cartItem->delete();
        }
        
        if(Auth::user() && !Cart::where('user_id', Auth::id())->first()){
            Cart::create([
                'user_id' => Auth::id(),
            ]);
        };


        return redirect()->route('congratulations');
    }

    public function congratulations() {
        return view('clients.purchases.congratulations');
    }
}
