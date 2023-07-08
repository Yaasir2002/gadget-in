<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\loop;

class ProductController extends Controller
{
    public function index()
    {
        $products = loop::all();
        return view('index', compact('products'));
    }
}
