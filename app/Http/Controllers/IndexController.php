<?php

namespace App\Http\Controllers;

use Facades\App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::getNewProducts();
        return view('index.index', compact('products'));
    }
}
