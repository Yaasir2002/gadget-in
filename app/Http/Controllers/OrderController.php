<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create($id)
    {
        $order = Order::all();
        $customer = Customer::all();
        $products = Product::find($id);
        
        return view('checkout', compact('order', 'customer', 'products'));
    }


    public function store(Request $request)
    {
        Order::create($request->except(['_token','submit']));
    }
}
