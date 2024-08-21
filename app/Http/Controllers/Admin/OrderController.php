<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    protected $order;
    protected $detail_order;
    public function __construct(Order $order, DetailOrder $detail_order) {
        $this->order = $order;
        $this->detail_order = $detail_order;
    }
    public function list(Request $request) {
        $query = $request->input('query');
        $orders = $this->order->with('detailorder')->with('user')->get();
        if($query == ''){
            $orders = $this->order->get();
        } else {
            $orders = $this->order->where('status_order_id', $query)->get();
        }
        $statusMapping = [
            1 => 'Đang xử lý',
            2 => 'Đã nhận',
            3 => 'Đã hủy',
        ];
        return view('admins.orders.list', compact('orders', 'statusMapping'));
    }

    public function delete( $id) {
        $order = $this->order->findOrFail($id);
        $order->delete();
        return redirect()->back();
    }

    public function detail($id) {
        $order = $this->order->findOrFail($id);
        $detail_orders = $this->detail_order->where('order_id', $id)->get();
        return view('admins.orders.detail', compact('order', 'detail_orders'));
    }
    public function accept($id) {
        $order = $this->order->findOrFail($id);
        $order->status_order_id = 2;
        $order->save();
        session()->flash('message', 'Order accepted successfully.');
        return redirect()->back();
    }
    public function cancel($id) {
        $order = $this->order->findOrFail($id);
        $order->status_order_id = 3;
        $order->save();
        session()->flash('message', 'Order canceled successfully.');
        return redirect()->back();
    }


}
