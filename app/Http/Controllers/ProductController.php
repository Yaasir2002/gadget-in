<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\loop;

class ProductController extends Controller
{
    public function index()
    {
        $products = loop::all();
        $hps = loop::where('types_id', 1)->get();
        $laptops = loop::where('types_id', 2)->get();
        $earphones = loop::where('types_id', 3)->get();
        $cameras = loop::where('types_id', 4)->get();
        $tablets = loop::where('types_id', 5)->get();
        return view('index', compact('products', 'hps', 'laptops', 'earphones', 'cameras','tablets'));
    }

    public function view($id)
{
    $product = loop::find($id);
    return view('detail', compact('product'));
}


    public function products()
    {
        $products = loop::all();
        return view('products', compact('products'));
    }
}
