<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
        $validator = Validator::make($request->all(),[
            'tgl' => 'required',
            'jumlah' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Order::create($request->except(['_token','submit']));

        return redirect()->route('home');
    }
}
