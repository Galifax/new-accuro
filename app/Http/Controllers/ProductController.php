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

    public function store($id, Request $request)
    {
        $product = Product::where('id', $id)
            ->firstOrFail();

        $psv = $request->PropertyStaticValue;

        $psvi = [];
        foreach($psv as $item) {
            foreach($item as $value) {
                $psvi[] = (int) $value;
            }
        }

        $product->properties()->sync($psvi);
        $product->save();

        return redirect()->back()->with('message', 'Свойства сохранены');;
    }

}
