<?php

namespace App\Http\Controllers\Client;

use App\Models\DetailOrder;
use App\Models\User;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    protected $category;
    protected $product;
    protected $comment;
    public function __construct(Category $category, Product $product, Comment $comment) {
        $this->product = $product;
        $this->category = $category;
        $this->comment = $comment;
    }

    public function home() {
        $categories = $this->category->get();
        $products = $this->product->orderBy('view', 'desc')->with('imageproduct')->take(8)->get();

        return view('clients.index', compact('categories', 'products'));
    }
    public function menu(Request $request) {
        $query = $request->input('query');
        if($query) {
            $products = $this->product->with('imageproduct')->where('name', 'like', "%$query%")->get();
        } else {
            $products = $this->product->with('imageproduct')->get();
        }
        return view('clients.homes.menu', compact('products'));
    }

    public function detailProduct($id) {
        $product = $this->product->with('imageproduct')->findOrFail($id);
        $relateds = $this->product->with('imageproduct')->where('category_id', $product->category_id)->get();
        $comments = $this->comment
                    ->where('product_id', $id)
                    ->with('user')
                    ->orderBy('created_at', 'desc')
                    ->take(2)
                    ->get();

        return view('clients.homes.detailProduct', compact('product', 'relateds', 'comments'));
    }

    public function comment(Request $request, $id)
{
    if (Auth::check()) {
        $data = $request->only(['content']);
        $data['user_id'] = Auth::user()->id;
        $data['product_id'] = $id;
        $data['day'] = now();
        $this->comment->create($data);

        return redirect()->back();
    }

    return redirect()->back();
}

    public function myAccount() {
        $user = User::findOrFail(Auth::user()->id);
        return view('clients.homes.myaccount', compact('user'));
    }
    public function accountUpdate(Request $request) {
        // dd($request);
        $user = User::findOrFail(Auth::user()->id);
        $data = $request->all([
            "name" ,
            "email" ,
            "number",
            "gender" ,
            "address" ,
            "date",
        ]);
        if($request->hasFile('avatar')){
            if($user->avatar){
                Storage::disk('public')->delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('uploads/users', 'public');
        }
        $user->update($data);

        return redirect()->back();
    }

    public function myOrder() {
        $orders = Order::where('user_id', Auth::user()->id)->with('user')->get();
        return view('clients.homes.myOrder', compact('orders'));
    }

    public function viewOrder($id) {
        $order = Order::with('user')->findOrFail($id);
        $detail_orders = DetailOrder::where('order_id', $id)->get();
        return view('clients.homes.orderView', compact('order', 'detail_orders'));
    }

    public function myAccDelete($id) {
        Order::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function accept($id) {
        $order = Order::findOrFail($id);
        $order->status_order_id = 2;
        $order->save();
        return redirect()->back();
    }
    public function cancel($id) {
        $order = Order::findOrFail($id);
        $order->status_order_id = 3;
        $order->save();
        return redirect()->back();
    }
    

}
