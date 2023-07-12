<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
use App\Customer;
use App\Order;

class adminController extends Controller
{
    public function admin()
    {
        return view ('/admin');
    }

    public function product()
    {
        $products = Product::all();
        return view('/product', compact('products'));
    }

    public function create()
    {
        $types = Type::all();
        return view('/create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'types_id' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('produk.product')->with('success', 'Product created successfully');
    }
    
    public function edit($id)
    {
        $product = Product::find($id);
        $types = Type::all();
        return view('/edit', compact('product', 'types'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'types_id' => 'required'
        ]);

        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('produk.product')->with('success', 'Product updated successfully');
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('produk.product')->with('success', 'Product deleted successfully');
    
    }

    public function customers()
    {
        $customers = Customer::all();
        return view ('/customers', compact('customers'));
    }

    public function create2()
    {
        return view('/create2');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('pelanggan.customers')->with('success', 'Product created successfully');
    }

    public function editCustomer($id)
    {
        $customer = Customer::find($id);
        return view('/edit2', compact('customer'));
    }

    public function updateCustomer(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->update($request->all());

        return redirect()->route('pelanggan.customers')->with('success', 'Customer updated successfully');
    }

    public function destroyCustomer(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('pelanggan.customers')->with('success', 'Customer deleted successfully');
    }

    public function orders()
    {
        $orders = Order::all();
        return view ('/orders', compact('orders'));
    }
}
