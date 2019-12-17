<?php

namespace App\Http\Controllers;

use Facades\App\Category;
use Facades\App\Product;
use App\Property;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function deleteDubleImage()
    {
        $products = Product::all();
        foreach($products as $product) {
            if (@fopen($product->getPhoto(), 'r')) {
                $photo = hash_file('md5', $product->getPhoto());
                $hash = [];
                foreach($product->getGallery() as $k => $item) {
                    $im = hash_file('md5', $item);
                    if (!empty($product->getGallery())) {
                        if ($im != $photo && !empty($product->getGallery()[$k])) {
                            if (!empty($product->gallery)) {
                                $hash[] = substr($product->getGallery()[$k], 40);
                            }
                        }
                    }
                }
                if (!empty($hash)) {
                    $product->gallery = json_encode($hash);
                    $product->save();
                }
            }
        }
    }
    public function index()
    {
        $categories = Category::getCategoriesWithProducts();
        $products = Product::getProducts();
        return view('products.index', compact('categories', 'products'));
    }

    public function show($slug)
    {
        $product = Product::getProductBySlug($slug);
        $props = Property::getPropPsv($product->id);
        return view('products.show', compact('product', 'props'));
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
