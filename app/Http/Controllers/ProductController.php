<?php

namespace App\Http\Controllers;

use Facades\App\Category;
use Facades\App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::getCategoriesWithProducts();
        $products = Product::getProducts();
        return view('products.index', compact('categories', 'products'));
    }

    public function show($slug)
    {
        $product = Product::getProductBySlug($slug);
        return view('products.show', compact('product'));
    }

}
